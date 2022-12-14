<?php

namespace App\Validators\Auth;

use Gomee\Validators\Validator as BaseValidator;
use App\Repositories\Users\UserRepository;

use App\Repositories\Web\SettingRepository;

class Register extends BaseValidator
{
    public function extends()
    {
        $this->addRule('unique_attr', function($name, $value, $parameters){
            $data = [$name => $value];
            if(is_array($parameters) && count($parameters)){
                foreach ($parameters as $attr) {
                    if($a = trim($attr)){
                        $data[$attr] = $this->{$attr};
                    }
                }
            }
            $this->repository->removeStaffQuery();
            $result = $this->repository->first($data);
            $this->repository->staffQuery();

            if($result){
                if($this->id && $this->id == $result->id){
                    return true;
                }
                return false;
            }
            return true;
        });
        $this->addRule('phone_exists', function($name, $value){
            if(!$value) return true;
            if($user = $this->repository->first(['phone_number'=>$value])){
                if($this->id){
                    if($this->id == $user->id){
                        return true;
                    }
                }
                return false;
            }
            return true;
        });

        $this->addRule('phone_number', function($attr, $value){
            if(!$value) return true;
            return preg_match('/^(\+84|0)+[0-9]{9,10}$/si', $value);
        });

        $this->addRule('username', function($attr, $value){
            return preg_match('/^[A-z]+[A-z0-9_\.]*$/si', $value);
        });

    }
    /**
     * ham lay rang buoc du lieu
     */
    public function rules()
    {
        $rules = [
            'name'                => 'required|max:191',
            'email'               => 'required|email|unique_attr',
            'phone_number'        => 'phone_number|phone_exists',
            'avatar'              => 'mimes:jpg,jpeg,png,gif',
            'username'            => 'required|username|unique_attr|min:4|max:64',
            'password'            => 'required|string|min:6|confirmed'
        ];

        return $this->parseRules($rules);
    }

    public function messages()
    {
        return [
            'name.max'                             => 'H??? t??n d??i v???a qu?? s??? k?? t???',
            'name.required'                        => 'B???n ch??a nh???p h??? v?? t??n',
            

            'username.required'                    => 'B???n ch??a nh???p t??n ????ng nh???p',
            'username.min'                         => 'T??n ng?????i d??ng ph???i c?? ??t nh???t 2 k?? t???',
            'username.username'                    => 'T??n ????ng nh???p kh??ng h???p l???',
            'username.unique_attr'                 => 'B???n kh??ng th??? d??ng username n??y',
            
            'email.required'                       => 'B???n ch??a nh???p email',
            'email.email'                          => 'Email kh??ng h???p l???',
            'email.unique_attr'                    => 'Do v???n ????? b???o m???t, B???n kh??ng th??? s??? d???ng email',
            
            'password.required'                    => 'B???n ch??a nh???p m???t kh???u',
            'password.min'                         => 'M???t kh???u ph???i c?? ??t nh???t 6 k?? t???',
            'password.confirmed'                   => 'M???t kh???u kh??ng kh???p',
            
            'phone_number.required'                => 'S??? ??i???n tho???i kh??ng ???????c b??? tr???ng',
            'phone_number.phone_number'            => 'S??? ??i???n tho???i kh??ng h??p l???',
            'phone_number.phone_exists'            => 'S??? ??i???n tho???i ???? ???????c s??? d???ng',
            '*.phone_number'                       => 'S??? ??i???n tho???i kh??ng h??p l???',

            'status.required'                      => 'Tr???ng th??i kh??ng h???p l???',
            

            'avatar.required'                      => '???nh ?????i di???n kh??ng ???????c b??? tr???ng',
            'avatar.mimes'                         => '???nh ?????i di???n kh??ng ????ng d???nh d???ng',

        ];
    }
}