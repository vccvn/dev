
    @php
        $footer = $options->theme->footer;
        $bgColor = $footer->background_color;
        $textColor = $footer->text_color;
        $titleColor = $footer->title_color;
    @endphp
        @if ($bgColor != '#111212')
            <style>
                .edu-footer,
                .edu-footer.footer-dark{
                    background-color: {{$bgColor}};
                }
            </style>
        @endif
        
        @if ($textColor)
            <style>
                .edu-footer,
                .footer-dark p,
                .footer-dark a,
                .edu-footer.footer-dark p,
                .edu-footer.footer-dark a {
                    color: {{$textColor}};
                }
            </style>
        @endif
        @if ($titleColor)

            <style>
                .edu-footer .widget-title,
                .edu-footer.footer-dark .widget-title{
                    color: {{$titleColor}};
                }
            </style>
        @endif
        
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <!-- Start Footer Area  -->
        <footer class="edu-footer footer-dark {{$bgColor == '' ?'bg-image bg-image--1' : ''}}">
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

        {!! $html->plugins->components !!}
