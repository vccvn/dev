
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <!-- Start Footer Area  -->
        <footer class="edu-footer footer-dark bg-image bg-image--1">
            <div class="footer-top">
                <div class="container">
                    <div class="row g-5">
                        {!! $html->footer_widgets->components !!}
                        


                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner text-center">
                                @if ($options->theme->footer->copyright)
                                    {!! $options->theme->footer->copyright !!}
                                @else
                                    <p>Bản quyền &copy; 2022 <a href="{{route('home')}}">{{$siteinfo->site_name}}</a>. Được phát triển bởi <a href="https://gomee.vn">Gomee Inovation</a>. Giữ bản quyền</p>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area  -->

