@php
    $rating_avg = $course->rating_avg??0;
    $rating_count = $course->rating_count??0;
@endphp
@extends($_layout.'master')
@include($_lib.'register-meta')

@section('content')
    
<div class="edu-breadcrumb-area breadcrumb-style-3">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="edu-breadcrumb">
                @if ($breadcrumbs = $helper->getBreadcrumbs())
                    @foreach ($breadcrumbs as $item)
                        @if ($loop->last)
                            <li class="breadcrumb-item active" aria-current="page">{{ $item->text }}</li>
                        @else
                            <li class="breadcrumb-item"><a title="{{ $item->text }}" href="{{ $item->url }}">{{ $item->text }}</a></li>
                            <li class="separator"><i class="icon-angle-right"></i></li>
                        @endif
        
                    @endforeach
                @endif
            </ul>
            <div class="page-title">
                <h1 class="title">{{$course->name}}</h1>
            </div>
            <ul class="course-meta">
                <li><i class="icon-58"></i>by {{$siteinfo->site_name}}</li>
                <li><i class="icon-59"></i>English</li>
                @if ($rating_avg && $rating_count)
                    
                <li class="course-rating">
                    <div class="rating">
                        @for ($i = 0; $i < $rating_avg; $i++)
                            
                        <i class="icon-23"></i>
                        
                        @endfor
                    </div>
                    <span class="rating-count">({{$rating_count}} Đánh giá)</span>
                </li>
                
                @endif
            </ul>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1"><img src="{{theme_asset('images/about/shape-22.png')}}" alt="shape"></li>
        <li class="shape-2 scene"><img data-depth="2" src="{{theme_asset('images/about/shape-13.png')}}" alt="shape"></li>
        <li class="shape-3 scene"><img data-depth="-2" src="{{theme_asset('images/about/shape-15.png')}}" alt="shape"></li>
        <li class="shape-4"><img src="{{theme_asset('images/about/shape-22.png')}}" alt="shape"></li>
        <li class="shape-5 scene"><img data-depth="2" src="{{theme_asset('images/about/shape-07.png')}}" alt="shape"></li>
    </ul>
</div>

<!--=====================================-->
<!--=     Courses Details Area Start    =-->
<!--=====================================-->
<section class="edu-section-gap course-details-area">
    <div class="container">
        <div class="row row--30">
            <div class="col-lg-8">
                <div class="course-details-content course-details-2">
                    <div class="course-overview">
                        {!! $course->content !!}
                    </div>
                    <div class="course-curriculam mb--90">
                        <div class="accordion edu-accordion" id="accordionExample" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Video / Bài giảng
                                    </button>
                                </h3>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="course-lesson">
                                            @php
                                                $user = $request->user();
                                            @endphp
                                            @if ($course->canViewLessons())
                                                <ul>
                                                    @if ($course->lessons && count($course->lessons))
                                                        @foreach ($course->lessons as $lesson)
                                                        @php
                                                            $canViewDetail = $lesson->canViewDetail();
                                                        @endphp
                                                            <li>
                                                                <div class="text"><i class="icon-65"></i> 
                                                                    @if ($canViewDetail)
                                                                        <a href="{{$u = $lesson->getViewUrl()}}">{{$lesson->name}}</a>
                                                                    @else
                                                                        {{$lesson->name}}                                                                    
                                                                    @endif
                                                                
                                                                </div>

                                                                @if (!$canViewDetail)
                                                                    <div class="icon"><i class="icon-68"></i></div>    
                                                                @else
                                                                    @if ($lesson->video_url)
                                                                    <div class="badge-list">
                                                                        <span class="badge badge-primary">Video</span>
                                                                    </div>
                                                                    @endif
                                                                    
                                                                @endif
                                                                
                                                            </li>
                                                            
                                                        @endforeach
                                                    
                                                    @endif
                                                    
                                                    
                                                </ul>
                                            @elseif(!$user)
                                                <div class="alert alert-warning text-center">
                                                    <a href="#">Tham gia</a> khóa học hoặc <a href="{{route('client.account.login')}}">đăng nhập</a> để tiếp tục
                                                </div>
                                            @else
                                                <div class="alert alert-warning text-center">
                                                    <a href="#">Tham gia</a> khóa học
                                                </div>
                                                
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="course-sidebar-3">
                    <div class="edu-course-widget widget-course-summery">
                        <div class="inner">

                            <div class="thumbnail">
                                <img src="{{$course->thumbnail_url}}" alt="{{$course->name}}">
                                @if ($course->video_url)
                                <a href="{{$course->video_url}}" class="play-btn video-popup-activation"><i class="icon-18"></i></a>
                                @endif
                                
                            </div>
                            <div class="content">
                                <h4 class="widget-title">Thông tin khóa học:</h4>
                                <ul class="course-item">
                                    <li>
                                        <span class="label"><i class="icon-60"></i>Giá:</span>
                                        <span class="value price">{{$course->price_format_text}}</span>
                                    </li>
                                    {{-- <li>
                                        <span class="label"><i class="icon-62"></i>Instrutor:</span>
                                        <span class="value">Edward Norton</span>
                                    </li> --}}
                                    <li>
                                        <span class="label"><i class="icon-61"></i>Thời gian học:</span>
                                        <span class="value">{{$course->duetime_label}}</span>
                                    </li>
                                    <li>
                                        <span class="label"><img class="svgInject" src="{{theme_asset('images/svg-icons/books.svg')}}" alt="book icon">Lessons:</span>
                                        <span class="value">{{$course->lesson_count??12}}</span>
                                    </li>
                                    <li>
                                        <span class="label"><i class="icon-63"></i>Số học viên:</span>
                                        <span class="value">{{$course->student_count??12}}</span>
                                    </li>
                                    <li>
                                        <span class="label"><i class="icon-64"></i>Đầu ra:</span>
                                        <span class="value">{{$course->outpoint??'NO'}}</span>
                                    </li>
                                </ul>
                                
                                {{-- @if (!$course->canViewLessons()) --}}
                                    <div class="read-more-btn">
                                        <a href="{{route('client.contacts.form')}}" class="edu-btn">Đăng ký <i class="icon-4"></i></a>
                                    </div>
                                        
                                {{-- @endif --}}
                                @include($_template.'share2',[
                                    'title' => $article->title,
                                    'link' => $course->view_url,
                                    'description' => $article->getShortDesc(150),
                                    'image' => $article->thumbnail_url
                                ])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    
@endsection
