@extends($_layout.'master')
@section('meta.robots', 'noindex')
@section('title', '404 - Không tìm thấy')
@section('content')
        
        <!--=====================================-->
        <!--=        404 Area Start            =-->
        <!--=====================================-->
        <section class="section-gap-equal error-page-area">
            <div class="container">
                <div class="edu-error">
                    <div class="thumbnail">
                        <img src="{{theme_asset('images/others/404.png')}}" alt="404 Error">
                        <ul class="shape-group">
                            <li class="shape-1 scene">
                                <img data-depth="2" src="{{theme_asset('images/about/shape-25.png')}}" alt="Shape">

                            </li>
                            <li class="shape-2 scene">
                                <img data-depth="-2" src="{{theme_asset('images/about/shape-15.png')}}" alt="Shape">
                            </li>
                            <li class="shape-3 scene">
                                <img data-depth="2" src="{{theme_asset('images/about/shape-13.png')}}" alt="Shape">
                            </li>
                            <li class="shape-4 scene">
                                <img data-depth="-2" src="{{theme_asset('images/counterup/shape-02.png')}}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h2 class="title">404 - Không tìm thấy</h2>
                        <h4 class="subtitle">Trang mà bạn truy cập có thể đang bị lỗi tạm thời hoặc đã bị xóa, bạn có thể truy cập sau hoặc xem thêm các sản phẩm hấp dẫn khác trên website Wisestyle.vn</h4>
                        <a href="{{route('home')}}" class="edu-btn"><i class="icon-west"></i>Về trang chủ </a>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1">
                    <img src="{{theme_asset('images/others/map-shape-2.png')}}" alt="Shape">
                </li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Footer Area Start          =-->
        <!--=====================================-->

@endsection