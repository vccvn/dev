<?php

namespace App\Validators\Dynamics;

use Gomee\Validators\Validator as BaseValidator;

class DynamicValidator extends BaseValidator
{
    public function extends()
    {
        $this->addRule('check_slug', function($prop, $value){
            if(is_null($value)) return true;
            if(in_array(strtolower($value), ['admin', 'api', 'manager', 'tai-khoan'])) return false;
            if($this->custom_slug){
                return $this->checkUniqueProp($prop, $value);
            }
            return true;
        });

        $this->addRule('post_type', function($prop, $value){
            if(is_null($value)) return true;
            return in_array(strtolower($value), ['article', 'news', 'gallery', 'video_embed', 'custom']);
        });
        $this->addRule('default_fields', function($prop, $value){
            if(is_null($value)) return true;
            if(is_array($value)){
                foreach ($value as $field) {
                    if(!in_array($field, ["title", "slug", "keywords", "description", "content", 'content_type', "featured_image", "tags", "privacy", "meta_title", "meta_description", 'seo'])) return false;
                }
            }
            return true;
        });

        
    }
    /**
     * ham lay rang buoc du lieu
     */
    public function rules()
    {
    
        $rules = [
            'name'                             => 'required|string|max:191|unique_prop',
            'slug'                             => 'check_slug',
            'custom_slug'                      => 'mixed',
            'description'                      => 'mixed|max:300',
            'content'                          => 'mixed',
            'keywords'                         => 'mixed|max:180',
            'featured_image'                    => 'mimes:jpg,jpeg,png,gif',
            
            'featured_image_data'               => 'base64_file:image',
            'post_type'                        => 'post_type',
            'use_category'                     => 'check_boolean',
            'use_gallery'                      => 'check_boolean',
            'default_fields'                   => 'default_fields',
        ];
        if($this->advance_props){
            $rules['advance_props'] = 'array';
            $rules['advance_props.*'] = 'prop_input';
        }


        return $rules;
        // return $this->parseRules($rules);
    }

    public function messages()
    {
        return [
            'name.required'                    => 'T??n m???c kh??ng ???????c b??? tr???ng',
            'name.string'                      => 'T??n m???c kh??ng h???p l???',
            'name.max'                         => 'T??n m???c h??i... d??i!',
            'name.unique_prop'                 => 'T??n m???c b??? tr??ng l???p',
            'slug.check_slug'                  => '???????ng d???n kh??ng h???p l???',
            'featured_image.mimes'              => '?????nh ?????ng file kh??ng ???????c h??? tr???',
            'featured_image_data.base64_file'   => '?????nh ?????ng file kh??ng ???????c h??? tr???',
            'post_type.post_type'              => 'Lo???i n???i dung kh??ng h???p l???',
            'default_fields.default_fields'    => 'C??c th??ng tin m???c ?????nh kh??ng h???p l???',
            'advance_props.array'              => 'Th??ng tin thu???c t??nh kh??ng h???p l???',
            'advance_props.*.prop_input'       => 'Th??ng tin thu???c t??nh kh??ng h???p l???',
            
            
        ];
    }
}