@php
    $args = [
        '@limit' => $data->post_number?$data->post_number:20,
        '@sort' => $data->sorttype?$data->sorttype:1
    ];
    $title = null;
    if($data->dynamic_id && $dynamic = $helper->getDynamic(['id' => $data->dynamic_id])){
        $args['dynamic_id'] = $data->dynamic_id;
        $title = $dynamic->name;
    }
    if($data->category_id && $category = $helper->getPostCategory(['id' => $data->category_id])){
        $args['@category'] = $data->category_id;
        if(!$title) $title = $category->name;
    }
    
    if($data->content_type && $data->content_type != 'all'){
        $args['content_type'] = $data->content_type;
    }
    if($data->title) $title = $data->title;
    
@endphp
@if (count($posts = $helper->getPosts($args)))
                            <!-- Start Single Widget  -->
                            <div class="edu-blog-widget widget-latest-post">
                                <div class="inner">
                                    <h4 class="widget-title">{{$title?$title:'Mới nhất'}}</h4>
                                    <div class="content latest-post-list">
                                        @foreach ($posts as $post)
                                        <div class="latest-post">
                                            <div class="thumbnail">
                                                <a href="{{$u = $post->getViewUrl()}}">
                                                    <img src="{{$post->getImage('90x90')}}" alt="{{$post->title}}">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h6 class="title"><a href="{{$u}}">{{$post->title}}</a></h6>
                                                <ul class="blog-meta">
                                                    <li><i class="icon-27"></i>{{$post->dateFormat('d/m/Y')}}</li>
                                                </ul>
                                            </div>
                                        </div>


                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget  -->

                        
@endif