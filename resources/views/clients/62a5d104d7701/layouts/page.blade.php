@php
    $color = '#e22454';
    $textInsideColor = '#ffffff';
    if($general = $options->theme->general){
        $color = $general->theme_primary_color($color);
        $textInsideColor = $general->text_inside_color($textInsideColor);
    }
    $html->addTagAttribute('html', 'lang', 'vi-VN');
    $html->addTagAttribute('body', [
        'class'=> "theme-color2 light ltr ". $__env->yieldContent('body.class'),
        'style' => "--theme-color:$color;--text-inside-color: $textInsideColor"
    ]);
    $general = $options->theme->general;
    $show_header = $__env->yieldContent('page.header.show');
@endphp
@extends($_lib.'layout')
@section('body')
    

    <!-- header start -->
    @include($_template.'header')
    <!-- header end -->

    <!-- mobile fix menu start -->
    @include($_template.'mobile-fix-menu')
    <!-- mobile fix menu end -->

    <!-- Breadcrumb section start -->
    @if(in_array($show_header, ["breadcrumb", "breadcrumbs"]))
        @include($_template.'breadcrumb')
    @elseif(in_array($show_header, ['show', 1, true, "true", "on"]))
        @include($_template.'page-header')
    @endif
    <!-- Breadcrumb section end -->


    <!-- Blog Section Start -->
    <section class="left-sidebar-section masonary-blog-section section-small min-80vh">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-12 col-md-12 ratio3_2">
                    @yield('content')
                </div>
{{--                <div class="col-lg-3 col-md-5">--}}
{{--                    @include($_template.'sidebars.blog')--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- Blog Section End -->



    <!-- footer start -->
    @include($_template.'footer')
    <!-- footer end -->
    
    @include($_template.'js')

    

@endsection
