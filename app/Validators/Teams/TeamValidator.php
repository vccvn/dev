<?php

namespace App\Validators\Teams;

use Gomee\Validators\Validator;

class TeamValidator extends Validator
{
    public function extends()
    {
        // Thêm các rule ở đây
    }

    /**
     * ham lay rang buoc du lieu
     */
    public function rules()
    {
    
        return [
            
            'name' => 'required',
            'description' => 'mixed',

        ];
    }

    /**
     * các thông báo
     */
    public function messages()
    {
        return [
            
            'name.required' => 'Tên đội Không được bỏ trống',
            'description.mixed' => 'Mô tả Không hợp lệ',

        ];
    }
}