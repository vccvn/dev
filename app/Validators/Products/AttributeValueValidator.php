<?php

namespace App\Validators\Products;

use Gomee\Validators\Validator as BaseValidator;

use App\Repositories\Products\AttributeRepository;

class AttributeValueValidator extends BaseValidator
{
    /**
     * @var \App\Repositories\Products\AttributeRepository $attributeRepository
     */
    public $attributeRepository;

    /**
     * @var \App\Models\ProductAttribute $attribute
     */
    public $attribute = null;
    public function extends()
    {
        $this->attributeRepository = app(AttributeRepository::class);

        if($this->attribute_id){
            $this->attribute = $this->attributeRepository->find($this->attribute_id);
        }

        $this->addRule('check_attribute', function($prop, $value){
            return $this->attribute?true:false;
        });

        $this->addRule('check_value', function($prop, $value){
            $attr = $this->attribute;
            if(!$attr) return false;
            if(strlen($value)){
                if($attr->is_unique && !$this->checkUniqueProp($attr->value_type.'_value', $value, 'attribute_id')) return false;
                if(in_array($attr->value_type, ['int', 'decimal']) && ( !is_numeric($value) || strlen($value) > 11)) return false;
                if(($attr->value_type == 'int' && (int) $value != $value) || ($attr->value_type == 'decimal' && (float) $value != $value)) return false;
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
            'attribute_id'                     => 'required|check_attribute',
            'value'                            => 'required|check_value',
            'text'                             => 'mixed|max:300',
            
        ];
        
        if($this->attribute){
            $avt = $this->attribute->advance_value_type;
            if($avt == 'image'){
                $rules['image'] = 'base64_file:jpg,png,gif,svg,jpeg,ico';
            }elseif($avt == 'color'){
                $rules['color'] = 'mixed|max:180';
            }
        }

        return $rules;
        // return $this->parseRules($rules);
    }

    public function messages()
    {
        return [
            'attribute_id.required'            => 'ID thu???c t??nh kh??ng ???????c b??? tr???ng',
            'attribute_id.check_attribute'     => 'Thu???c t??nh kh??ng t???n t???i',
            
            'value.required'                   => 'Gi?? tr??? kh??ng ???????c b??? tr???ng',
            'value.check_type'                 => 'Gi?? tr??? kh??ng h???p l???',
            'image.base64_file'                => 'File kh??ng h???p l???'
            
            
        ];
    }
}