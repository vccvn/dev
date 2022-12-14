<?php

namespace App\Validators\Sliders;

use Gomee\Validators\Validator as BaseValidator;

class SliderItemValidator extends BaseValidator
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
        $data = [
            'title'                    => 'required',
            'sub_title'                => 'mixed|max:180',
            'description'              => 'mixed|max:500',
            'image'                    => 'mimes:jpg,jpeg,png,gif',
            'image_data'               => 'base64_file:image',
            'link'                     => 'mixed|max:180',
            'url'                      => 'mixed|max:180',

        ];
    
        if(!$this->id){
            $data['image'].='|required';
        }
        return $data;
    }

    /**
     * các thông báo
     */
    public function messages()
    {
        return [
            
            'title.required'           => 'title Không được bỏ trống',
            'image.required'           => 'Hình ảnh không được bỏ trống',
            'image.mimes'              => 'Định đạng file không được hỗ trợ',
            'image_data.base64_file'   => 'Định đạng file không được hỗ trợ',
        ];
    }
}