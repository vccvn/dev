@php
    $html->addTagAttribute('html', [
        'class' => 'no-js'
    ]);
    $html->addTagAttribute('body', [
        'class' => 'sticky-header'
    ]);
    $show_breadcrumb = $__env->yieldContent('page.header.show', $__env->yieldContent('show_breadcrumb'));
@endphp
@extends($_lib.'layout')
@section('body')
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

      <div id="edublink-preloader">
        <div class="loading-spinner">
            <div class="preloader-spin-1"></div>
            <div class="preloader-spin-2"></div>
        </div>
        <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">
                Cancel Preloader</span>
        </div>
    </div>

    <div id="main-wrapper" class="main-wrapper">

        @include($_template.'header')

        @if(in_array($show_breadcrumb, ["breadcrumb", "breadcrumbs", 'show', 1, true, "true", "on"]))
            @include($_template.'breadcrumb')
        @endif
        
        <!-- Content -->
        @yield('content')
        <!-- End Content -->

        @include($_template.'footer')


    </div>

    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    
    @include($_template.'js')


@endsection