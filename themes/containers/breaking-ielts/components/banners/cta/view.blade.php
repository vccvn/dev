
        <!--=====================================-->
        <!--=        CTA  Area Start            =-->
        <!--=====================================-->
        <!-- Start Ad Banner Area  -->
        <div class="edu-cta-banner-area home-one-cta-wrapper bg-image bg-image--6">
            <div class="container">
                <div class="edu-cta-banner">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <h2 class="title">{!! preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title)) !!}</h2>
                                <a href="{{$data->url}}" class="edu-btn">{{$data->button_text}} <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-01 scene">
                            <img data-depth="2.5" src="assets/images/cta/shape-10.png" alt="shape">
                        </li>
                        <li class="shape-02 scene">
                            <img data-depth="-2.5" src="assets/images/cta/shape-09.png" alt="shape">
                        </li>
                        <li class="shape-03 scene">
                            <img data-depth="-2" src="assets/images/cta/shape-08.png" alt="shape">
                        </li>
                        <li class="shape-04 scene">
                            <img data-depth="2" src="assets/images/about/shape-13.png" alt="shape">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Ad Banner Area  -->