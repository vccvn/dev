
    @php
        $video_thumbnail = $data->video_thumbnail(theme_asset('images/about/about-02.jpg'));
        if(!$data->video_thumbnail && $data->video_url && $video = $helper->getVideoFromUrl($data->video_url)){
            if(!$data->video_thumbnail){
                $video_thumbnail = $video->thumbnail;
            }
        }
    @endphp

        <!--=====================================-->
        <!--=       About Us Area Start      	=-->
        <!--=====================================-->
        <div class="gap-bottom-equal edu-about-area about-style-1">
            <div class="container edublink-animated-shape">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image-gallery">
                            <img class="main-img-1" src="{{$data->image(theme_asset('images/about/about-01.jpg'))}}" alt="About Image">
                            <div class="video-box" data-sal-delay="150" data-sal="slide-down" data-sal-duration="800">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="{{$video_thumbnail}}" alt="About Image">
                                        <a href="{{$data->video_url}}" class="popup-icon video-popup-activation">
                                            <i class="icon-18"></i>
                                        </a>
                                    </div>
                                    <div class="loading-bar">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="award-status bounce-slide">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="{{$data->award_icon}}"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">{{$data->award_number}}+</h6>
                                        <span class="subtitle">{{$data->award_label}}</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="1" src="{{theme_asset('images/about/shape-36.png')}}" alt="Shape">
                                </li>
                                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="-1" src="{{theme_asset('images/about/shape-37.png')}}" alt="Shape">
                                </li>
                                <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="1" src="{{theme_asset('images/about/shape-02.png')}}" alt="Shape">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content">
                            <div class="section-title section-left">
                                <span class="pre-title">{{$data->sub_title}}</span>
                                <h2 class="title">
                                    {!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title))) !!}
                                </h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <p>{{$data->description}}</p>
                            </div>
                            <ul class="features-list">
                                @if ($features = nl2array($data->features))
                                    @foreach ($features as $item)
                                        <li>{{$item}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                        <span data-depth="-2.3"></span>
                    </li>
                </ul>
            </div>
        </div>