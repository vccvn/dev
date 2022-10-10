
        <!--=====================================-->
        <!--=       Why Choose Area Start       =-->
        <!--=====================================-->
        <!-- Start Why Choose Area  -->
        <section class="why-choose-area-3 edu-section-gap bg-lighten01">
            <div class="container">
                <div class="row row--45">
                    <div class="section-title-flex section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="left-content">
                            <h2 class="title">
                                {!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title))) !!}
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="right-content">
                            <p>{!! nl2br(htmlentities($data->description)) !!}</p>
                        </div>
                    </div>
                </div>

                <div class="row g-5">
                    {!! $children !!}
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1 scene">
                    <span data-depth=".8"></span>
                </li>
                <li class="shape-2 scene">
                    <img data-depth="-2" src="{{theme_asset('images/about/shape-13.png')}}" alt="shape">
                </li>
                <li class="shape-3">
                    <img data-parallax='{"x": 0, "y": 100}' src="{{theme_asset('images/faq/shape-12.png')}}" alt="shape">
                </li>
            </ul>
        </section>
        <!-- End Why Choose Area  -->