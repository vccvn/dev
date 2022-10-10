@if($data->show)
    <div class="col-xl-{{$data->col_xl(2)}} col-lg-{{$data->col_lg(3)}} col-md-{{$data->col_md(4)}} col-sm-{{$data->col_sm(6)}} col-sm-{{$data->col_xs(12)}}  {{$data->class}}">
        <div class="footer-links">
            <div class="footer-title">
                <h3>{{$data->title}}</h3>
            </div>
            <div class="footer-content">
                <div class="footer-newsletter">
                    <form class="ps-form--newsletter {{parse_classname('subcribe-form')}}" action="{{route('client.subscribe')}}" method="post" novalidate="">
                        <div class="form-newsletter">
                            <div class="input-group mb-4 t-form-email">
                                <input type="email" name="email" class="form-control" placeholder="Nhập email">
                                <button type="submit" class="btn btn-theme-color">Đăng ký</button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>

        </div>
        <div class="footer-newsletter">
            <div class="form-newsletter">
                <p>
                    <img src="{{theme_asset('images/custom/cart/icon-phone.png')}}" alt="">
                    <span>Liên hệ: {{$data->phone}}</span>
                </p>
                <p>
                    <img src="{{theme_asset('images/custom/cart/icon-mail.png')}}" alt="">
                    <span>Email: {{$data->email}}</span>
                </p>
                <p>
                    <img src="{{theme_asset('images/custom/cart/icon-location.png')}}" alt="">
                    <span>{{$data->address}}</span>
                </p>

                <ul class="social">
                    <li><a href="{{$data->tiktok}}" target="_blank"><img src="{{theme_asset('images/custom/cart/icon-tiktok.png')}}" alt=""></a></li>
                    <li><a href="{{$data->instagram}}" target="_blank"><img src="{{theme_asset('images/custom/cart/icon-instagram.png')}}" alt=""></a></li>
                    <li><a href="{{$data->facebook}}" target="_blank"><img src="{{theme_asset('images/custom/cart/icon-facebook.png')}}" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
@endif