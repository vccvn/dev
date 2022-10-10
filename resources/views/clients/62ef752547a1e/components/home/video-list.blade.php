@php
    $args = [
        '@limit' => $data->post_number?$data->post_number:5,
        '@sort' => $data->sorttype?$data->sorttype:1,
        '@with' => ['metadatas']
    ];
    $link = null;
    $title = null;
    $hasVideoChannel = false;
    if($data->dynamic_id && $dynamic = $helper->getDynamic(['id' => $data->dynamic_id, 'post_type' => 'video_embed'])){
        $args['dynamic_id'] = $data->dynamic_id;
        $title = $dynamic->name;
        $link = $dynamic->getViewUrl();
        $hasVideoChannel = true;
    }
    if($data->category_id && $category = $helper->getPostCategory(['id' => $data->category_id])){
        $args['@category'] = $data->category_id;
        if($category->hasChild() && $data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
        if(!$title) $title = $category->name;
        $link = $category->getViewUrl();
    }
    // elseif($data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
    $args['@withCategory'] = true;
    if($data->title) $title = $data->title;
    if($data->link) $link = $data->link;
    
@endphp


@if ($hasVideoChannel && count($posts = $helper->getPosts($args)))


        <!--=====================================-->
        <!--=       	Video Area Start      	=-->
        <!--=====================================-->
        <!-- Start Blog Area  -->
        <div class="edu-blog-area blog-area-3 edu-section-gap video-blog-section">
            <div class="container">
                <div class="section-title section-center" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">{{$data->sub_title}}</span>
                    <h2 class="title">{!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title))) !!}</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
                <div class="row g-5 row--45">
                    @foreach ($posts as $post)
                        
                    <!-- Start Blog Grid  -->
                    <div class="col-lg-6 col-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-blog blog-style-2 first-large-blog">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{$url = $post->getViewUrl()}}">
                                        <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}">
                                    </a>
                                    
                                    <a href="{{$url}}" class="video-play-btn">
                                        <i class="icon-18"></i>
                                    </a>
                                    
                                </div>
                                <div class="content">
                                    {{-- <div class="event-date">
                                        <span class="day">30</span>
                                        <span class="month">SEP</span>
                                    </div> --}}
                                    <div class="blog-date">
                                        <span class="day">{{$post->dateFormat('d')}}</span>
                                        <span class="month">{{$post->dateFormat('M')}}</span>
                                    </div>
                                    @if ($cate = $post->category)
                                        <div class="category-wrap">
                                            <a href="{{$cate->getViewUrl()}}" class="blog-category">{{$cate->name}}</a>
                                        </div>
                                    @endif
                                    
                                    <h4 class="title"><a href="{{$url}}">{{$post->sub('title', 64, '...')}}</a></h4>
                                    <p>{{$post->getShortDesc(100)}}</p>
            
                                    <ul class="blog-meta">
                                        @if ($post->author)
                                            <li><i class="icon-25"></i>By <a href="#{{$post->author->name}}">{{$post->author->name}}</a></li>
                                        @endif
                                        
                                        <li><i class="icon-28"></i>Bình luận {{$post->comment_count??0}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Grid  -->
                    @break
                    @endforeach
                    <div class="col-lg-6 blog-list" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        @foreach ($posts as $post)
                            @continue($loop->first)

                            <div class="edu-blog blog-style-2">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="{{$url = $post->getViewUrl()}}">
                                            <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}">
                                        </a>
                                        
                                        <a href="{{$url}}" class="video-play-btn">
                                            <i class="icon-18"></i>
                                        </a>
                                    </div>
                                    <div class="content">
                                        @if ($cate = $post->category)
                                            <div class="category-wrap">
                                                <a href="{{$cate->getViewUrl()}}" class="blog-category">{{$cate->name}}</a>
                                            </div>
                                        @endif
                                        
                                        <h5 class="title"><a href="{{$url}}">{{$post->sub('title', 64, '...')}}</a></h5>
                                        <p>{{$post->getShortDesc(64)}}</p>
                                        <ul class="blog-meta">
                                            @if ($post->author)
                                                <li><i class="icon-25"></i>By <a href="#{{$post->author->name}}">{{$post->author->name}}</a></li>
                                            @endif
                                            
                                            <li><i class="icon-28"></i>Bình luận {{$post->comment_count??0}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Area -->

@endif

        