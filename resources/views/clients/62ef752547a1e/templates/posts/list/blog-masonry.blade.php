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
<div class="row g-5" id="masonry-gallery">
    @foreach ($posts as $post)
        @php
            $post->applyMeta();
            $url = $post->getViewUrl();
            // $image = $post->getImage('770x400');
            // $post_title = $post->title
            $isVideo = $post->contentType('video_embed') || $post->contentType('video');
        @endphp
        <div class="col-xl-4 col-lg-6 col-md-6 col-12 masonry-item" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
            <div class="edu-blog blog-style-5 {{$isVideo?'post-video':'' }}">
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
                    
                    <div class="content position-top">
                        <div class="read-more-btn">
                            <a class="btn-icon-round" href="{{$url}}"><i class="icon-4"></i></a>
                        </div>
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
                        <p>{{$post->getShortDesc(100)}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>