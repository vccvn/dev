@php
    $args = [
        '@limit' => $data->post_number?$data->post_number:4,
        '@sort' => $data->sorttype?$data->sorttype:1,
        '@with' => ['metadatas']
    ];
    $link = null;
    $title = null;
    if($data->dynamic_id && $dynamic = $helper->getDynamic(['id' => $data->dynamic_id])){
        $args['dynamic_id'] = $data->dynamic_id;
        $title = $dynamic->name;
        $link = $dynamic->getViewUrl();
    }
    if($data->category_id && $category = $helper->getPostCategory(['id' => $data->category_id])){
        $args['@category'] = $data->category_id;
        if($category->hasChild() && $data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
        if(!$title) $title = $category->name;
        $link = $category->getViewUrl();
    }
    elseif($data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
    $args['@withCategory'] = true;
    if($data->title) $title = $data->title;
    if($data->link) $link = $data->link;
    
@endphp


@if (count($posts = $helper->getPosts($args)))

        

        <!--=====================================-->
        <!--=      		Blog Area Start   		=-->
        <!--=====================================-->
        <!-- Start Blog Area  -->
        <div class="edu-blog-area blog-area-2 svg-image--2 bg-image gap-bottom-equal">
            <div class="container">
                <div class="section-title section-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">{{$data->sub_title('MỚI CẬP NHẬT')}}</span>
                    <h2 class="title">{!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title))) !!}</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
                @include($_template.'posts.list.blog-grid', [
                    'posts' => $posts,
                    'column_class' => 'col-md-6 col-lg-4'
                ])
            </div>
            <ul class="shape-group">
                <li class="shape-1">
                    <img src="{{theme_asset('images/about/shape-25.png')}}" alt="Shape">
                </li>
            </ul>
        </div>
        <!-- End Blog Area  -->
@endif

        