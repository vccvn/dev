
        
        <!--=====================================-->
        <!--=       FAQ Area Start      		=-->
        <!--=====================================-->
        <div class="edu-faq-area faq-style-1">
            <div class="container">
                <div class="row g-5 row--45">
                    <div class="col-lg-6">
                        <div class="edu-faq-gallery">
                            <div class="row g-5">
                                <div class="col-6" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                    <div class="faq-thumbnail thumbnail-1">
                                        <img src="{{$data->image_1??theme_asset('images/faq/faq-01.jpg')}}" alt="Faq Images">
                                    </div>
                                </div>
                                <div class="col-6" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800">
                                    <div class="faq-thumbnail thumbnail-2">
                                        <img src="{{$data->image_2??theme_asset('images/faq/faq-02.jpg')}}" alt="Faq Images">
                                    </div>
                                </div>
                                <div class="col-6" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                    <div class="faq-thumbnail thumbnail-3">
                                        <img src="{{$data->image_3??theme_asset('images/faq/faq-03.jpg')}}" alt="Faq Images">
                                    </div>
                                </div>
                                <div class="col-6" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800">
                                    <div class="faq-thumbnail thumbnail-4">
                                        <img src="{{$data->image_4??theme_asset('images/faq/faq-04.jpg')}}" alt="Faq Images">
                                    </div>
                                </div>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="2" src="{{theme_asset('images/faq/shape-02.png')}}" alt="Shape Images">
                                </li>
                                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="-2" src="{{theme_asset('images/faq/shape-03.png')}}" alt="Shape Images">
                                </li>
                                <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="2" src="{{theme_asset('images/faq/shape-04.png')}}" alt="Shape Images">
                                </li>
                                <li class="shape-4 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="-2" src="{{theme_asset('images/faq/shape-05.png')}}" alt="Shape Images">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-faq-content">
                            <div class="section-title section-left">
                                <span class="pre-title">{{$data->sub_title("FAq’s")}}</span>
                                <h2 class="title">{!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title('Over 10 Years in Distant Skill Development')))) !!}</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            <div class="faq-accordion" id="faq-accordion">
                                <div class="accordion">
                                    {!! $children !!}
                                </div>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="1.5" src="{{theme_asset('images/about/shape-02.png')}}" alt="Shape Images">
                                </li>
                                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <span data-depth="-2.2"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonial Area  -->
