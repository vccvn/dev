
@foreach ($posts as $post)
@php
    $post->applyMeta();
    $url = $post->getViewUrl();
    // $image = $post->getImage('770x400');
    // $post_title = $post->title
    $isVideo = $post->contentType('video_embed') || $post->contentType('video');
@endphp
    <!-- Start Single Course  -->
    <div class="edu-course course-style-4 course-style-9 {{$isVideo?"post-video":''}}">
        <div class="inner">
            <div class="thumbnail">
                <a href="{{$url}}">
                    <div class="img-ratio square"></div>
                    <img src="{{$post->getImage()}}" alt="{{$post->title}}">
                </a>
                
            </div>
            <div class="content">
                <div class="course-price">{{$p = number_format($post->course_price, 0, ',', '.')}} Đ</div>
                <h6 class="title">
                    <a href="{{$url}}">{{$post->title}}</a>
                </h6>
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
                <p>{{$post->getShortDesc(200)}}</p>
                <ul class="course-meta">
                    <li><i class="icon-24"></i>{{$post->lesson_count}} buổi học</li>
                    <li><i class="icon-25"></i>{{$post->student_count}} học viên</li>
                </ul>
            </div>
        </div>
        <div class="hover-content-aside">
            <div class="content">
                <span class="course-level">{{$post->course_level}}</span>
                <h5 class="title">
                    <a href="{{$url}}">{{$post->title}}</a>
                </h5>
                <div class="course-rating">
                    <div class="rating">
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                    </div>
                    <span class="rating-count">({{$post->rating_count}})</span>
                </div>
                    
                <ul class="course-meta">
                    <li>{{$post->lesson_count}} buổi học</li>
                    <li>{{$post->student_count}} học viên</li>
                    
                </ul>
                @if (COUNT($list = nl2array($post->feature_list)))
                    <div class="course-feature">
                        <h6 class="title">Khóa học này có gì</h6>
                        <ul>
                            @foreach ($list as $text)
                                <li>{{$text}}</li>
                            @endforeach
                        
                        </ul>
                    </div>
                @endif

                <div class="button-group">
                    <a href="{{$post->title}}" class="edu-btn btn-medium">Chi tiết</a>
                    <a href="#" class="wishlist-btn btn-outline-dark"><i class="icon-22"></i></a>
                </div>
            </div>
        </div>
    </div>

@endforeach

