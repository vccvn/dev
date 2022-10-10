
@extends($_layout.'master')
@section('title', $page_title)
@include($_lib.'register-meta')
@section('show_breadcrumb', 1)
@section('breadcrumb.title', $page_title)
@section('content')

        <!--=====================================-->
        <!--=        Courses Area Start         =-->
        <!--=====================================-->
        <div class="edu-course-area course-area-1 section-gap-equal">
            <div class="container-max">
                <div class="row g-5">
                    <div class="col-lg-9 col-pr--35 order-lg-1">


                        @if ($t = count($courses))
                            @php
                                $columnClass = 'col-12 col-sm-12 col-md-6 col-lg-4';
                            @endphp
                            <div class="row g-5">
                                
                                @foreach ($courses as $course)
                                    @php
                                        $url = $course->view_url;
                                        $rating_avg = $course->rating_avg??0;
                                        $rating_count = $course->rating_count??0;
                                    @endphp                    
                                    <!-- Start Single Course  -->
                                    <div class="{{$columnClass}}" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                                        <div class="edu-course course-style-1 course-box-shadow hover-button-bg-white">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{$url}}">
                                                        <img src="{{$course->getThumbnail()}}" alt="{{$course->title}}">
                                                    </a>
                                                    <div class="time-top">
                                                        <span class="duration"><i class="icon-61"></i>{{$course->duetime_label}}</span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="content">
                                                    <span class="course-level">
                                                        {{-- Cho người mới bắt đầu --}}
                                                        {{$course->user_level}}
                                                    </span>
                                                    <h6 class="title">
                                                        <a href="{{$url}}">{{$course->title}}</a>
                                                    </h6>
                                                    @if ($rating_avg && $rating_count)
                    
                                                        <div class="course-rating">
                                                            <div class="rating">
                                                                @for ($i = 0; $i < $rating_avg; $i++)
                                                                    
                                                                <i class="icon-23"></i>
                                                                
                                                                @endfor
                                                            </div>
                                                            <span class="rating-count">({{$rating_avg}} /{{$rating_count}})</span>
                                                        </div>
                                                        
                                                    @endif
                                                    <div class="course-price">{{$course->price_format_text}}</div>
                                                    <ul class="course-meta">
                                                        <li><i class="icon-24"></i>{{$course->lesson_count??0}} buổi học</li>
                                                        <li><i class="icon-25"></i>{{$course->student_count??0}} học viên</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="course-hover-content-wrapper">
                                                <button class="wishlist-btn"><i class="icon-22"></i></button>
                                            </div>
                                            <div class="course-hover-content-wrapper">
                                                <button class="wishlist-btn"><i class="icon-22"></i></button>
                                            </div>
                                            <div class="course-hover-content">
                                                <div class="content">
                                                    <button class="wishlist-btn"><i class="icon-22"></i></button>
                                                    <span class="course-level">
                                                        {{-- Khóa level 2 --}}
                                                        {{$course->course_level}}
                                                    </span>
                                                    <h6 class="title">
                                                        <a href="{{$url}}">{{$course->title}}</a>
                                                    </h6>
                                                    @if ($rating_avg && $rating_count)
                    
                                                        <div class="course-rating">
                                                            <div class="rating">
                                                                @for ($i = 0; $i < $rating_avg; $i++)
                                                                    
                                                                <i class="icon-23"></i>
                                                                
                                                                @endfor
                                                            </div>
                                                            <span class="rating-count">({{$rating_avg}} /{{$rating_count}})</span>
                                                        </div>
                                                        
                                                    @endif
                                                    <div class="course-price">{{$course->price_format_text}}</div>
                                                    <p>{{$course->getShortDesc(120)}}</p>
                                                    <ul class="course-meta">
                                                        <li><i class="icon-24"></i>{{$course->lesson_count??0}} buổi học</li>
                                                        <li><i class="icon-25"></i>{{$course->student_count??0}} học viên</li>
                                                    </ul>
                                                    <a href="{{$url}}" class="edu-btn btn-secondary btn-small">Nhập học <i class="icon-4"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                @endforeach
                                
                            </div>
                    
                            {{ $courses->links($_template . 'pagination') }}
                        @else
                            <div class="alert alert-warning text-cxenter">
                                Danh sách trống
                            </div>
                        @endif

                    </div>
                    <div class="col-lg-3 order-lg-2">
                        @include($_current.'templates.sidebars.course')
                    </div>
                </div>

            </div>
        </div>


@endsection