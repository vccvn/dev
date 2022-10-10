


        <!--=====================================-->
        <!--=      		Brand Area Start   		=-->
        <!--=====================================-->
        <!-- Start Brand Area  -->
        <div class="edu-brand-area brand-area-1 gap-top-equal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="brand-section-heading">
                            <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">{{$data->sub_title('Hợp tác')}}</span>
                                <h2 class="title">{!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title))) !!}</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <p>{!! nl2br(htmlentities($data->description)) !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="brand-grid-wrap">
                            @if ($children)
                                {!! $children !!}
                            @else

                            <div class="brand-grid">
                                <img src="{{theme_asset('images/brand/brand-01.png')}}" alt="Brand Logo">
                            </div>
                            <div class="brand-grid">
                                <img src="{{theme_asset('images/brand/brand-02.png')}}" alt="Brand Logo">
                            </div>
                            <div class="brand-grid">
                                <img src="{{theme_asset('images/brand/brand-03.png')}}" alt="Brand Logo">
                            </div>
                            <div class="brand-grid">
                                <img src="{{theme_asset('images/brand/brand-04.png')}}" alt="Brand Logo">
                            </div>
                            <div class="brand-grid">
                                <img src="{{theme_asset('images/brand/brand-05.png')}}" alt="Brand Logo">
                            </div>
                            <div class="brand-grid">
                                <img src="{{theme_asset('images/brand/brand-06.png')}}" alt="Brand Logo">
                            </div>
                            <div class="brand-grid">
                                <img src="{{theme_asset('images/brand/brand-07.png')}}" alt="Brand Logo">
                            </div>
                            <div class="brand-grid">
                                <img src="{{theme_asset('images/brand/brand-08.png')}}" alt="Brand Logo">
                            </div>
                            
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area  -->