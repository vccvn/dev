@extends($_layout.'master')
@section('title', 'Đăng ký tài khoản')
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
                            <h3 class="title">Đăng ký</h3>
                            <p>Đã có tài khoản? <a href="{{route('client.account.login')}}" class="theme-color">Đăng nhập</a></p>
                            <form class="{{parse_classname('register-form')}}" action="{{route('client.account.post-register')}}" method="POST">
                                @if ($next = old('next', $request->next))
                                    <input type="hidden" name="next" value="{{$next}}">
                                @endif
                                @php
                                    $registerForm = $html->getRegisterForm([
                                        'class' => 'fc'
                                    ]);
                                @endphp
                                @csrf
                                @if ($registerForm && $inputs = $registerForm->inputs())
                                    @foreach ($inputs as $input)
                                    @php
                                        $input->id = 'current-log-' . $input->name;
                                    @endphp
                                        <div class="form-group">
                                            <label for="current-log-{{$input->name}}">{{$input->label}} *</label>
                                            {!! $input !!}
                                        </div>
                                        @if ($input->error)
                                            <div class="error-register">{{$input->error}}</div>
                                        @endif
                                        
                                    @endforeach
                                @endif
                            
                                <div class="form-group">
                                    <button type="submit" class="edu-btn btn-medium">Đăng ký <i class="icon-4"></i></button>
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