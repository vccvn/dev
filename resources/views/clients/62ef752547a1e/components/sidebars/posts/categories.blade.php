@php
    $url = null;
    $args = [
        '@limit' => $data->cate_number?$data->cate_number:10,
        '@advance' => ['post_count'],
    ];
    $title = null;
    if($data->get_by_dynamic_active && $active = $helper->getActiveModel('dynamic')){
        $args['dynamic_id'] = $active->id;
        $title = $active->name;
        
    }
    else{
        if($data->dynamic_id && $dynamic = $helper->getDynamic(['id' => $data->dynamic_id])){
            $args['dynamic_id'] = $data->dynamic_id;
            $title = $dynamic->name;
            // $url = $dynamic->getViewUrl();
        }
        if($data->category_id && $category = $helper->getPostCategory(['id' => $data->category_id])){
            $args['parent_id'] = $data->category_id;
            if(!$title) $title = $category->name;
        }
        
    }
    if($data->title) $title = $data->title;
@endphp


@count($categories = $helper->getPostCategories($args))
<div class="edu-blog-widget widget-categories">
    <div class="inner">
        <h4 class="widget-title">{{$title}}</h4>
        <div class="content">
            <ul class="category-list">
                @foreach ($categories as $cate)
                    <li><a href="{{$cate->getViewUrl()}}">{{$cate->name}} <span>({{$cate->post_count}})</span></a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endcount