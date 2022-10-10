@foreach ($posts as $post)
@php
    $post->applyMeta();
    $url = $post->getViewUrl();
    // $image = $post->getImage('770x400');
    // $post_title = $post->title
    $isVideo = $post->contentType('video_embed') || $post->contentType('video');
@endphp
<div class="edu-blog blog-style-4 {{$isVideo?'post-video':'' }}" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
    <div class="inner">
        <div class="thumbnail">
            <a href="{{$url}}">
                <img src="{{$post->getImage()}}" alt="{{$post->title}}">
            </a>
            @if ($isVideo)
                
                <a href="{{$url}}" class="video-play-btn video-popup-activation1">
                    <i class="icon-18"></i>
                </a>
            @endif
        </div>
        
        <div class="content">
            @if ($cate = $post->category)
                <div class="category-wrap">
                    <a href="{{$cate->getViewUrl()}}" class="blog-category">{{$cate->name}}</a>
                </div>
            @endif
            
            <h3 class="title"><a href="{{$url}}">{{$post->title}}</a></h3>
            <ul class="blog-meta">
                <li><i class="icon-27"></i>{{$post->dateFormat('M d, Y')}}</li>
                <li><i class="icon-28"></i>0 Bình luận</li>
            </ul>
            <p>{{$post->getShortDesc(200)}}</p>
            <div class="read-more-btn">
                <a class="edu-btn btn-border btn-medium" href="{{$url}}">Xem thêm <i class="icon-4"></i></a>
            </div>
        </div>
    </div>
</div>
@endforeach