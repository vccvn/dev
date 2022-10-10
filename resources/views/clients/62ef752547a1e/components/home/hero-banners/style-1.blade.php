

        <!--=====================================-->
        <!--=       Hero Banner Area Start      =-->
        <!--=====================================-->
        <div class="hero-banner hero-style-1 bg-image bg-image--11">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">
                                {!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title))) !!}
                            </h1>
                            <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">{!! nl2br(htmlentities($data->description)) !!}</p>
                            <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                <a href="{{$data->url}}" class="edu-btn">{{$data->button_text}} <i class="icon-4"></i></a>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="2" src="{{theme_asset('images/about/shape-13.png')}}" alt="Shape">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumbnail">
                            <div class="thumbnail" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000">
                                <img src="{{$data->instrunctor_image(theme_asset('images/banner/girl-1.png'))}}" alt="Girl Image">
                            </div>
                            <div class="instructor-info" data-sal-delay="600" data-sal="slide-up" data-sal-duration="1000">
                                <div class="inner">
                                    <h5 class="title">{{$data->instrunctor_title}}</h5>
                                    <div class="media">
                                        <div class="thumb">
                                            <img src="{{$data->instrunctor_list_image(theme_asset('images/banner/author-1.png'))}}" alt="Images">
                                        </div>
                                        <div class="content">
                                            <span>{{$data->instrunctor_number > 0 ? $data->instrunctor_number : 100}}+</span> Giảng viên
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="1.5" src="{{theme_asset('images/about/shape-15.png')}}" alt="Shape">
                                </li>
                                <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="-1.5" src="{{theme_asset('images/about/shape-16.png')}}" alt="Shape">
                                </li>
                                <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="3" src="{{theme_asset('images/about/shape-17.png')}}" alt="Shape">
                                </li>
                                <li class="shape-4" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="-1" src="{{theme_asset('images/counterup/shape-02.png')}}" alt="Shape">
                                </li>
                                <li class="shape-5 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="1.5" src="{{theme_asset('images/about/shape-13.png')}}" alt="Shape">
                                </li>
                                <li class="shape-6 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                    <img data-depth="-2" src="{{theme_asset('images/about/shape-18.png')}}" alt="Shape">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


