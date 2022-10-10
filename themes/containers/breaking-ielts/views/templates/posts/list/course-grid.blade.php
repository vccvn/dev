@php
    if(isset($column_class) && $column_class){
        $columnClass = $column_class;
    }
    else{

        $xs = isset($col_xs) && is_numeric($col_xs) && in_array($col_xs, [1,2,3,4,5,6,7,8,9,10,11,12]) ? $col_xs : null;

        $sm = isset($col_sm) && is_numeric($col_sm) && in_array($col_sm, [1,2,3,4,5,6,7,8,9,10,11,12]) ? $col_sm : 12;

        $md = isset($col_md) && is_numeric($col_md) && in_array($col_md, [1,2,3,4,5,6,7,8,9,10,11,12]) ? $col_md : 6;

        $lg = isset($col_lg) && is_numeric($col_lg) && in_array($col_lg, [1,2,3,4,5,6,7,8,9,10,11,12]) ? $col_lg : 4;

        $xl = isset($col_xl) && is_numeric($col_xl) && in_array($col_xl, [1,2,3,4,5,6,7,8,9,10,11,12]) ? $col_xl : $lg;


        $columnClass = ($xs? 'col-' . $xs. ' ' : ''). 'col-sm-' . $sm . ' ' .'col-md-' . $md . ' ' . 'col-lg-' . $lg . ' ' .  'col-xl-' . $xl;

    }
    
@endphp
<div class="row g-5">

@foreach ($posts as $post)
@php
    $post->applyMeta();
    $url = $post->getViewUrl();
    // $image = $post->getImage('770x400');
    // $post_title = $post->title
    $isVideo = $post->contentType('video_embed') || $post->contentType('video');
@endphp
    <!-- Start Single Course  -->
    <div class="{{$columnClass}}" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
        <div class="edu-course course-style-3 course-box-shadow {{$isVideo?"post-video":''}}">
            <div class="inner">
                <div class="thumbnail">
                    <a href="{{$url}}">
                        <img src="{{$post->getImage()}}" alt="{{$post->title}}">
                    </a>
                    <div class="time-top">
                        <span class="duration"><i class="icon-61"></i>{{$post->month}} tháng</span>
                    </div>
                </div>
                <div class="content">
                    <span class="course-level">{{$post->course_level}}</span>
                    <h5 class="title">
                        <a href="{{$url}}">{{$post->title}}</a>
                    </h5>
                    <p>{{$post->getShortDesc(100)}}</p>
                    <div class="course-rating">
                        <div class="rating">
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                        </div>
                        <span class="rating-count">({{$post->rating_avg}} /{{$post->rating_count}} đánh giá)</span>
                    </div>
                    <div class="read-more-btn">
                        <a class="edu-btn btn-small btn-secondary" href="{{$url}}">Nhập học <i class="icon-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Course  -->
    
@endforeach

</div>
