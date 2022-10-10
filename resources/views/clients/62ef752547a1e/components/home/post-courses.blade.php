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
                @include($_template.'posts.list.course-standard', [
                    'posts' => $posts,
                    'column_class' => 'col-md-6 col-xl-3'
                ])
                <div class="course-view-all" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                    <a href="{{$link}}" class="edu-btn">Xem thêm các khóa học <i class="icon-4"></i></a>
                </div>
            </div>
        </div>
        <!-- End Course Area -->
@endif

        