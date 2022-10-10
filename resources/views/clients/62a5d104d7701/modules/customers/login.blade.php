@extends($_layout.'master')
@section('page_type', 'my-account')
@section('title', 'Đăng nhập quản lý đơn hàng')
@include($_lib.'register-meta')

@section('content')

<div class="ps-my-account">
    <div class="container">
        <div class="ps-form--account ps-tab-root">
            <ul class="ps-tab-list">
                <li class="active"><a href="#sign-in">Khách hàng</a></li>
                
            </ul>
            <div class="ps-tabs">
                <div class="ps-tab active" id="sign-in">
                    <form method="POST" action="" class="{{parse_classname('customer-login-form')}}" >
                        @csrf
                    
                        <div class="ps-form__content">
                            <h5 class="text-center">Đăng nhập khách hàng</h5>
                            <div class="form-group">
                                <label class="form__label" for="contact">
                                    Email hoặc số điện thoại <span>*</span>
                                </label>
                                <input type="text" name="contact" class="form-control" value="{{old('contact')}}" placeholder="nhập Email hoặc số điện thoại">
                                
                            </div>
                            @if ($errors->has('contact'))
                                <div class="error has-error">
                                    {{$errors->first('contact')}}
                                </div>
                            @endif
                            <div class="form-group submtit">
                                <button class="ps-btn ps-btn--fullwidth">Tiếp tục</button>
                            </div>
                        </div>
                        
                        <div class="ps-form__footer">
                            <p>
                                <a href="{{route('client.account.login')}}">Đăng nhập</a>
                                | 
                                <a href="{{route('client.account.register')}}">Đăng ký</a>
                            </p>
                            
                        </div>
                    </form>

                </div>
                
            </div>
        </div>
    </div>
</div>



@endsection