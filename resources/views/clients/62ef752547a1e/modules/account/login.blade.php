@extends($_layout.'master')
@section('title', 'Đăng nhập')
@section('page_type', 'my-account')

@section('content')



        <!--=====================================-->
        <!--=          Login Area Start         =-->
        <!--=====================================-->
        <section class="account-page-area section-gap-equal">
            <div class="container position-relative">
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-5 mx-auto">
                        <div class="login-form-box">
                            <h3 class="title">Đăng nhập</h3>
                            <p>Chưa có tài khoản? <a href="{{route('client.account.register')}}" class="theme-color">Đăng ký ngay</a></p>
                            <form class="{{parse_classname('login-form')}}" action="{{route('client.account.post-login')}}" method="POST">
                                @if ($next = old('next', $request->next))
                                    <input type="hidden" name="next" value="{{$next}}">
                                @endif
                                @csrf
                            
                                <div class="form-group">
                                    <label for="current-log-email">Tên đăng nhập hoặc email *</label>
                                    <input type="text" name="username" value="{{old('username')}}" id="current-log-email" required="" placeholder="Tên đăng nhập hoặc email">
                                </div>
                                
                                @if ($error = session('error'))
                                    <span class="error">{{$error}}</span>
                                @endif

                                <div class="form-group">
                                    <label for="current-log-password">Mật khẩu*</label>
                                    <input type="password" name="password" id="current-log-password" placeholder="Mật khẩu">
                                    <span class="password-show"><i class="icon-76"></i></span>
                                </div>
                                <div class="form-group chekbox-area">
                                    <div class="edu-form-check">
                                        <input type="checkbox" id="remember-me" name="remember" @if(old('remember')) checked @endif>
                                        <label for="remember-me">Nhớ đăng nhập</label>
                                    </div>
                                    {{-- <a href="#" class="password-reset">Lost your password?</a> --}}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="edu-btn btn-medium">Đăng nhập <i class="icon-4"></i></button>
                                </div>
                            </form>
                            
                            <p><a href="{{route('home')}}" class="theme-color"><i class="fa fa-arrow-single-left"></i> Về trang chủ</a></p>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-1 scene"><img data-depth="2" src="{{theme_asset('images/about/shape-07.png')}}" alt="Shape"></li>
                    <li class="shape-2 scene"><img data-depth="-2" src="{{theme_asset('images/about/shape-13.png')}}" alt="Shape"></li>
                    <li class="shape-3 scene"><img data-depth="2" src="{{theme_asset('images/counterup/shape-02.png')}}" alt="Shape"></li>
                </ul>
            </div>
        </section>

@endsection