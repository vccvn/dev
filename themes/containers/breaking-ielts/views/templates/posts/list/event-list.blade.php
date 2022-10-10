<div class="row g-5">
    @foreach ($posts as $post)
    @php
    $post->applyMeta();
    $url = $post->getViewUrl();
    // $image = $post->getImage('770x400');
    // $post_title = $post->title
    $isVideo = $post->contentType('video_embed') || $post->contentType('video');
@endphp
        
        <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <div class="edu-event-list event-list-2 {{$isVideo?"post-video":''}}">
                <div class="inner">
                    <div class="thumbnail">
                        <a href="{{$url = $post->getViewUrl()}}">
                            <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}">
                        </a>
                        
                        @if ($isVideo)
                            
                            <a href="{{$url}}" class="video-play-btn video-popup-activation1">
                                <i class="icon-18"></i>
                            </a>
                        @endif
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="{{$url}}">{{$post->sub('title', 64, '...')}}</a></h4>
                        {{-- <span class="event-location"><i class="icon-40"></i>Newyork City, USA</span> --}}
                        <p>{{$post->getShortDesc(100)}}</p>
                        <div class="read-more-btn">
                            <a class="edu-btn btn-medium btn-border" href="{{$url}}">Chi tiết <i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    @endforeach
</div>