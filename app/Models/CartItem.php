<?php

namespace App\Models;

use Gomee\Models\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class CartItem extends Model
{
    public $table = 'cart_items';
    public $fillable = ['cart_id', 'product_id', 'attr_values', 'quantity'];




    /**
     * thuộc tính
     */
    public function getAttrs()
    {
        $attrValues = explode('-', $this->attr_values);
        if (!$attrValues) return [];
        // DB::enableQueryLog();
        $query = Attribute::join('attribute_values', 'attribute_values.attribute_id', '=', 'attributes.id')
            ->join('product_attributes', 'product_attributes.attribute_value_id', '=', 'attribute_values.id')
            ->where('product_attributes.product_id', $this->product_id)
            ->whereIn('attribute_values.id', $attrValues)
            ->orderBy('attributes.is_order_option', 'DESC')
            ->orderBy('attributes.is_variant', 'DESC')
            ->orderBy('attributes.price_type', 'DESC')
            ->select(
                'attributes.id',
                'attributes.name',
                'attributes.label',
                'attributes.value_type',
                'attributes.price_type',
                'attributes.value_unit',
                'attributes.is_variant',
                'attributes.advance_value_type',
                'attribute_values.id AS value_id',
                'attribute_values.varchar_value',
                'attribute_values.int_value',
                'attribute_values.decimal_value',
                'attribute_values.text_value',
                'attribute_values.advance_value as attribute_advance_value',
                'product_attributes.advance_value as variant_advance_value',
                'product_attributes.price',
                'product_attributes.is_default'
            );
        $data = $query->get();
        // dd(DB::getQueryLog());
        return $data;
    }

    /**
     * Get the cart that owns the CartItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'id');
    }



    /**
     * Get the product that owns the CartItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id')->with(['orderOptions', 'promoAvailable', 'gallery']);
    }

    /**
     * lay du lieu form
     * @return array
     */
    public function toFormData()
    {
        $data = $this->toArray();
        $data['attr_values'] = explode('-', $this->attr_values);
        return $data;
    }
}
