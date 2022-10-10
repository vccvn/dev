<?php

namespace App\Models;

use Gomee\Models\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Promo extends Model
{
    public $table = 'promos';
    public $fillable = [
        'name', 'description', 'scope', 'type', 'down_price', 'code', 
        'quantity_per_user', 'limited_total', 'usage_total', 
        'started_at', 'finished_at', 'trashed_status', 'schedule', 'type_schedule', 'value_schedule', 'is_activated'
    ];

    

    const TYPE_DOWN_PRICE = 100;
    const TYPE_DOWN_PERCENT = 200;
    const TYPE_SAME_PRICE = 300;
    const TYPE_FREESHIP = 400;


    const SCOPE_PRODUCT = 'product';
    const SCOPE_ORDER = 'order';
    const SCOPE_USER = 'user';

    const ALL_TYPE = [
        self::TYPE_DOWN_PRICE, self::TYPE_DOWN_PERCENT, self::TYPE_SAME_PRICE, self::TYPE_FREESHIP
    ];
    const TYPE_LABELS = [
        self::TYPE_DOWN_PRICE => 'Giảm trực tiếp', 
        self::TYPE_DOWN_PERCENT => 'Giảm theo phần trăm', 
        self::TYPE_SAME_PRICE => 'Đồng giá', 
        self::TYPE_FREESHIP => 'Miễn phí giao hàng'
    ];

    const NOT_ACTIVATED = 0;
    const ACTIVATED = 1;


    public static function getTypeLabels()
    {
        return self::TYPE_LABELS;
    }
    public static function getTypeMapKeys()
    {
        return ['TYPE_DOWN_PRICE' => self::TYPE_DOWN_PRICE, 'TYPE_DOWN_PERCENT' => self::TYPE_DOWN_PERCENT, 'TYPE_SAME_PRICE' => self::TYPE_SAME_PRICE, 'TYPE_FREESHIP' => self::TYPE_FREESHIP];
    }

    public function getTypeText()
    {
        return array_key_exists($this->type, self::TYPE_LABELS) ? self::TYPE_LABELS[$this->type]:'';
    }

    public function getScopeTypeText()
    {
        switch($this->scope){
            case self::SCOPE_PRODUCT:
                return $this->type == self::TYPE_DOWN_PRICE ? 'Trừ vào giá SP' : ($this->type == self::TYPE_DOWN_PERCENT ? 'Giảm % giá SP': ($this->type == self::TYPE_SAME_PRICE? 'Đồng giá': ""));
                # code...
                break;
            default: 
                return $this->type == self::TYPE_SAME_PRICE? '' : ($this->type == self::TYPE_DOWN_PRICE ? 'Giảm trực tiếp' : ($this->type == self::TYPE_DOWN_PERCENT ? 'Giảm %' : 'Miển phí giao hàng'));
        }
        return array_key_exists($this->type, self::TYPE_LABELS) ? self::TYPE_LABELS[$this->type]:'';
    }

    public function getDownTotalFLabel()
    {
        if($this->type == self::TYPE_DOWN_PRICE) return 'Giảm ' . get_currency_format($this->down_price);
        if($this->type == self::TYPE_DOWN_PERCENT) return 'Giảm ' . $this->down_price . '%';
        if($this->type == self::TYPE_FREESHIP) return 'Miễn phí giao hàng';
        return '';
        
        
    }

    public function productRefs()
    {
        return $this->hasMany(ProductRef::class, 'ref_id', 'id')->where('ref', 'promo');
    }
    /**
     * lay du lieu form
     * @return array
     */
    public function toFormData()
    {
        $data = $this->toArray();
        $data['times'] = substr($this->started_at, 0, 16) . ' - ' . substr($this->finished_at, 0, 16);
        $data['user_list'] = $this->getUserOptions();
        return $data;
    }

    public function promoDateFormat($format = 'H:i:s d/m/Y', $column = 'finished_at')
    {
        return date($format, strtotime($this->{in_array($c = strtolower($column), ['finished_at', 'started_at']) ? $c : 'finished_at'}));
    }

    public function beforeDelete()
    {
        $this->productRefs()->delete();
    }

    /**
     * Get all of the users for the Promo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function users(): HasManyThrough
    {
        return $this->hasManyThrough(
            User::class,
            UserDiscount::class,
            'discount_id',
            'id',
            'id',
            'user_id'
        );
    }

    /**
     * Get all of the userDiscounts for the Promo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userDiscounts(): HasMany
    {
        return $this->hasMany(UserDiscount::class, 'discount_id', 'id');
    }


    /**
     * user optiobs
     * @return array
     */
    public function getUserOptions()
    {
        $options = [];
        if ($this->users) {
            foreach ($this->users as $user) {
                $options[] = [
                    'name' => $user->name,
                    'id' => $user->id
                ];
            }
        }
        return $options;
    }
}
