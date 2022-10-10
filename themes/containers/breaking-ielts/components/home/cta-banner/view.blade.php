@php
    $link = "";
    if($data->url_type == 'page' && $page = get_page(['id' => $data->page_id])){
        $link = $page->getViewUrl();
    }
    elseif($data->url_type == 'custom'){
        $link = $data->url;
    }
@endphp

        <!--=====================================-->
        <!--=       CTA Banner Area Start      =-->
        <!--=====================================-->
        <!-- Start Ad Banner Area  -->
        <div class="online-academy-cta-wrapper edu-cta-banner-area bg-image bg-image--7">
            <div class="container">
                <div class="edu-cta-banner">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <h2 class="title">{!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title))) !!}</h2>
                                @if ($data->description)
                                <p>{!! nl2br(htmlentities($data->description)) !!}</p>
                                @endif
                                @if ($link)
                                    <a href="{{$link}}" class="edu-btn">{{$data->buttom_text('Xem chi tiết')}} <i class="icon-4"></i></a>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-01 scene">
                            <img data-depth="2.5" src="{{theme_asset('images/cta/shape-10.png')}}" alt="shape">
                        </li>
                        <li class="shape-02 scene">
                            <img data-depth="-2.5" src="{{theme_asset('images/cta/shape-09.png')}}" alt="shape">
                        </li>
                        <li class="shape-03 scene">
                            <img data-depth="-2" src="{{theme_asset('images/cta/shape-08.png')}}" alt="shape">
                        </li>
                        <li class="shape-04 scene">
                            <img data-depth="2" src="{{theme_asset('images/about/shape-13.png')}}" alt="shape">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Ad Banner Area  -->