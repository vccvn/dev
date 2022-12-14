<?php

namespace App\Validators\Orders;

use Gomee\Engines\Helper;
use App\Repositories\Locations\DistrictRepository;
use App\Repositories\Locations\RegionRepository;
use App\Repositories\Locations\WardRepository;
use App\Repositories\Promos\PromoRepository;
use App\Validators\Extra\ExtraMethods;
use Gomee\Validators\Validator as BaseValidator;
/**
 * @property PromoRepository $promoRepository
 */
class PlaceValidator extends BaseValidator
{
    use ExtraMethods;
    public $methods = [];
    public function extends()
    {
        $this->extraExtends();
        $this->promoRepository = app(PromoRepository::class);
        $this->methods = Helper::getPaymentMethodOptions();
        $this->addRule('check_method', function($attr, $value){
            if(!$value) return false;
            
            $s = false;
            if($this->methods && count($this->methods)){
                foreach ($this->methods as $key => $method) {
                    if($key == $value || $method->method == $value) $s = true;
                }
            }
            return $s;
        });

        $this->addRule('vnpay_bank', function($attr, $value){
            if($this->methods && count($this->methods)){
                foreach ($this->methods as $key => $method) {
                    if($key == 'vnpay' || $method->method == 'vnpay'){
                        if($method->configData && is_countable($method->configData)){
                            foreach ($method->configData as $code => $bank) {
                                if($value == $code || $value == $bank->code){
                                    return true;
                                }
                            }
                        }
                    }
                }
            }
            return false;
        });
        $this->addRule('check_coupon', function($attr, $value){
            return (!$value || $this->promoRepository->checkPromo($value, ($user = $this->request->user())?$user->id:null));
        });
        

    }

    /**
     * ham lay rang buoc du lieu
     */
    public function rules()
    {
        $rules = [
            'billing_name'                        => 'required|string|max:191',
            'billing_email'                       => 'required|email',
            'billing_phone_number'                => 'required|phone_number',
            'billing_address'                     => 'required',
            'billing_region_id'                   => 'required|check_region',
            'billing_district_id'                 => 'required|check_district:billing_region_id',
            'billing_ward_id'                     => 'required|check_ward:billing_district_id',
            'coupon_code'                         => 'check_coupon',
            'payment_method'                      => 'check_method',
            'note'                                => 'mixed|max:300',
            'create_account'                      => 'check_boolean',
            
            'ship_to_different_address'           => 'check_boolean',
        ];
        if(!$this->user() && $this->create_account){
            $rules['password']                    =  'required|string|min:6';
        }

        if($this->ship_to_different_address){
            $rules = array_merge($rules, [
                'shipping_name'                   => 'required|string|max:191',
                'shipping_email'                  => 'required|email',
                'shipping_phone_number'           => 'required|phone_number',
                'shipping_address'                => 'required',
                'shipping_region_id'              => 'required|check_region',
                'shipping_district_id'            => 'required|check_district:shipping_region_id',
                'shipping_ward_id'                => 'required|check_ward:shipping_district_id',
            ]);
        }
        if($this->payment_method == 'vnpay'){
            $rules['vnpay_bank'] = 'vnpay_bank';
        }
    
        return $rules;
    }

    /**
     * c??c th??ng b??o
     */
    public function messages()
    {
        return [
            
            'payment_method.check_method'         => 'Ph????ng th???c thanh to??n kh??ng h???p l???',
            'password.required'                   => 'B???n ch??a nh???p m???t kh???u',
            'password.min'                        => 'M???t kh???u ph???i c?? ??t nh???t 6 k?? t???',
            

            'billing_name.max'                    => 'H??? t??n d??i v???a qu?? s??? k?? t???',
            'billing_name.required'               => 'B???n ch??a nh???p h??? v?? t??n',
            'billing_email.required'              => 'B???n ch??a nh???p email',
            'billing_email.email'                 => 'Email kh??ng h???p l???',
            'billing_phone_number.required'       => 'S??? ??i???n tho???i kh??ng ???????c b??? tr???ng',
            'billing_phone_number.phone_number'   => 'S??? ??i???n tho???i kh??ng h??p l???',
            'billing_address.required'            => '?????a ch??? kh??ng ???????c b??? tr???ng',
            'billing_address.max'                 => '?????a ch??? kh??ng h???p l???',
            'billing_region_id.required'          => 'Vui l??ng ch???n t???nh / th??nh ph???',
            'billing_region_id.check_region'      => 'T???nh / th??nh ph??? kh??ng h???p l???',
            'billing_district_id.required'        => 'Vui l??ng ch???n qu???n / huy???n',
            'billing_district_id.check_district'  => 'Qu???n / huy???n kh??ng h???p l???',
            'billing_ward_id.required'            => 'Vui l??ng ch???n ph?????ng / x??',
            'billing_ward_id.check_ward'          => 'ph?????ng / x?? ph??? kh??ng h???p l???',
            

            'shipping_name.max'                   => 'H??? t??n d??i v???a qu?? s??? k?? t???',
            'shipping_name.required'              => 'B???n ch??a nh???p h??? v?? t??n',
            'shipping_email.required'             => 'B???n ch??a nh???p email',
            'shipping_email.email'                => 'Email kh??ng h???p l???',
            'shipping_phone_number.required'      => 'S??? ??i???n tho???i kh??ng ???????c b??? tr???ng',
            'shipping_phone_number.phone_number'  => 'S??? ??i???n tho???i kh??ng h??p l???',
            'shipping_address.required'           => '?????a ch??? kh??ng ???????c b??? tr???ng',
            'shipping_address.max'                => '?????a ch??? kh??ng h???p l???',
            'shipping_region_id.required'         => 'Vui l??ng ch???n t???nh / th??nh ph???',
            'shipping_region_id.check_region'     => 'T???nh / th??nh ph??? kh??ng h???p l???',
            'shipping_district_id.required'       => 'Vui l??ng ch???n qu???n / huy???n',
            'shipping_district_id.check_district' => 'Qu???n / huy???n kh??ng h???p l???',
            'shipping_ward_id.required'           => 'Vui l??ng ch???n ph?????ng / x??',
            'shipping_ward_id.check_ward'         => 'ph?????ng / x?? ph??? kh??ng h???p l???',
            'vnpay_bank'                          => 'Ng??n h??ng / V?? di???n t??? kh??ng h???p l???'
            
        ];
    }
}