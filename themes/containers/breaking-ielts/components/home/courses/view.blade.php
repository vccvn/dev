@php
    $args = [
        '@limit' => $data->course_number?$data->course_number:4,
        '@sort' => $data->sorttype?$data->sorttype:1,
        '@withCountLessons' => 'lesson_count'
    ];
    $link = null;
    $title = null;
    if($data->title) $title = $data->title;
    if($data->link) $link = $data->link;
    else $link = route('client.courses');
    
@endphp


@if (count($courses = $helper->getCourses($args)))

        <!--=====================================-->
        <!--=       Course Area Start      		=-->
        <!--=====================================-->
        <!-- Start Course Area  -->
        <div class="edu-course-area course-area-1 edu-section-gap bg-lighten01">
            <div class="container">
                <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">{{$data->sub_title}}</span>
                    <h2 class="title">{!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title))) !!}</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
                @include($_template.'courses.list', [
                    'courses' => $courses,
                    'column_class' => 'col-md-6 col-xl-3'
                ])
                <div class="course-view-all" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                    <a href="{{$link}}" class="edu-btn">Xem thêm các khóa học <i class="icon-4"></i></a>
                </div>
            </div>
        </div>
        <!-- End Course Area -->
@endif

        