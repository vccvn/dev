<?php

namespace App\Validators\Promos;

use App\Models\Promo;
use Carbon\Carbon;
use Gomee\Validators\Validator as BaseValidator;
use App\Repositories\Products\ProductRepository;
use App\Repositories\Users\UserRepository;

class PromoValidator extends BaseValidator
{
    public function extends()
    {
        $this->addRule('check_type', function ($prop, $value) {
            return (!array_key_exists($value, get_promo_type_options())) ? false : (
                (($this->scope == 'product' && $value == Promo::TYPE_FREESHIP) || (in_array($this->scope, ['user', 'order']) && $value == Promo::TYPE_SAME_PRICE)) ? false : true
            );
        });
        $this->addRule('check_down_price', function ($prop, $value) {
            if (!$value) return true;
            if (!is_numeric($value) || strlen($value) > 10) return false;

            return ($this->type == Promo::TYPE_DOWN_PERCENT && $value > 100) ? false : true;
        });

        $this->addRule('check_products', function ($prop, $value) {
            if (!$value) return true;
            if (!is_array($value)) return false;

            return (count($value) == (new ProductRepository())->count(['id' => $value]));
        });

        $this->addRule('check_users', function ($prop, $value) {
            if (!$value) return true;
            if (!is_array($value)) return false;

            return (count($value) == (new UserRepository())->count(['id' => $value]));
        });

        $this->addRule('check_time_lt_now', function ($prop, $value) {
            if (is_null($value)) return true;
            // if (count($date = array_map('trim', explode(' - ', $value))) == 2) {
            //     $time = [
            //         'from' => $date[0],
            //         'to'   => $date[1]
            //     ];
            //     $now  = Carbon::now();
            //     if (Carbon::parse($time['from'])->lt($now)) {
            //         return false;
            //     }
            // }

            return true;
        });


    }

    /**
     * ham lay rang buoc du lieu
     */
    public function rules()
    {

        $rules = [
            'name'        => 'required|string|max:191|unique_prop',
            'description' => 'max:500',
            'scope'       => 'in_list:order,product,user',
            'type'        => 'check_type',
            'is_activated'=> 'check_boolean',
            'down_price'  => 'required|numeric|min:0|max:100000000|check_down_price',
            'code'        => 'max:32',
            'times'       => 'required|datetimerange|check_time_lt_now'
        ];
        if ($this->scope == 'order') {
            $rules = array_merge($rules, [
                'limited_total' => 'required|numeric|min:1'
            ]);
        } elseif ($this->scope == 'user') {
            $rules = array_merge($rules, [
                'quantity_per_user' => 'required|numeric|min:1',
                'user_list'         => 'required|check_users'
            ]);
        } else {
            $rules = array_merge($rules, [
                'products' => 'check_products',

            ]);
        }

        if ($this->schedule) {
            $rules = array_merge($rules, [
                'schedule'       => 'required',
                'type_schedule'  => 'required|in:day,week,month,year',
                'value_schedule' => 'required|numeric|min:1|max:1000',
            ]);
        }


        return $rules;
        // return $this->parseRules($rules);
    }

    public function messages()
    {
        return [
            'name.required'               => 'T??n ch????ng tr??nh khuy???n m??i kh??ng ???????c b??? tr???ng',
            'name.string'                 => 'T??n ch????ng tr??nh khuy???n m??i kh??ng h???p l???',
            'name.max'                    => 'T??n ch????ng tr??nh khuy???n m??i h??i... d??i!',
            'name.unique_prop'            => 'T??n ch????ng tr??nh khuy???n m??i b??? tr??ng l???p',
            'description.max'             => 'M?? t??? h??i d??i',
            'down_price.check_down_price' => 'M???c khuy???n m??i',
            'code.max'                    => 'M?? khuy???n m??i kh??ng ???????c v?????t qu?? 32 k?? t???',
            'products.check_products'     => 'H??nh nh?? c?? m???t v??i s???n ph???m kh??ng h???p l???',
            'times.datetimerange'         => 'Th???i gian khuy???n m??i kh??ng h???p l???',
            'times.check_time_lt_now'     => 'Th???i gian b???t ?????u khuy???n m???i ph???i l???n h??n th???i gian hi???n t???i',
            'limited_total.required'      => 'Vui l??ng nh???p s??? l?????ng khuy???n m??i',
            'limited_total.numeric'       => 'S??? l?????ng khuy???n m??i ph???i l?? ki???u s???',
            'limited_total.min'           => 'S??? l?????ng khuy???n m??i ph???i l???n h??n ho???c b???ng 1',
            'quantity_per_user.required'  => 'Vui l??ng nh???p s??? l?????ng ??p d???ng cho m???i ng?????i',
            'quantity_per_user.numeric'   => 'S??? l?????ng ??p d???ng cho m???i ng?????i ph???i l?? ki???u s???',
            'quantity_per_user.min'       => 'S??? l?????ng ??p d???ng cho m???i ng?????i ph???i l???n h??n ho???c b???ng 1',
            'user_list.*'                 => 'Danh s??ch ng?????i d??ng ko h???p l???',
            'type_schedule.required'      => 'Tr?????ng ch???n chu k??? l?? b???t bu???c',
            'value_schedule.required'     => 'Tr?????ng gi?? tr??? chu k??? l?? b???t bu???c',
            'value_schedule.numeric'      => 'Tr?????ng gi?? tr??? chu k??? ph???i l?? m???t s???',
            'value_schedule.min'          => 'Tr?????ng gi?? tr??? chu k??? ph???i ph???i l???n h??n ho???c b???ng 1'
        ];
    }
}