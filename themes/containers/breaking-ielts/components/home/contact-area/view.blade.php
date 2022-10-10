

        <!--=====================================-->
        <!--=      Call To Action Area Start   	=-->
        <!--=====================================-->
        <!-- Start CTA Area  -->
        <div class="home-one-cta-two cta-area-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="home-one-cta edu-cta-box bg-image bg-image--7">
                            <div class="inner">
                                <div class="content text-md-end">
                                    <span class="subtitle">Liên hệ:</span>
                                    <h3 class="title"><a href="mailto:{{$email = $data->email('Breakingielts@gmail.com')}}">{{$email}}</a></h3>
                                </div>
                                <div class="sparator">
                                    <span>Hoặc</span>
                                </div>
                                <div class="content">
                                    <span class="subtitle">Hotline:</span>
                                    <h3 class="title"><a href="tel:{{$data->hotline}}">{{$data->hotline}}</a></h3>
                                </div>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-01 scene">
                                    <img data-depth="2" src="{{theme_asset('images/cta/shape-06.png')}}" alt="shape">
                                </li>
                                <li class="shape-02 scene">
                                    <img data-depth="-2" src="{{theme_asset('images/cta/shape-07.png')}}" alt="shape">
                                </li>
                                <li class="shape-03 scene">
                                    <img data-depth="-3" src="{{theme_asset('images/cta/shape-04.png')}}" alt="shape">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End CTA Area  -->

