@if ($data->type == 'menu')
    <!-- Category section Start -->
    <div class="category-section menu-eidget">
        <h3>{{$data->title}}</h3>
        {!!
            $helper->getCustomMenu(['id' => $data->menu_id], 2, [
                'class' => 'sidebar-menu'
            ])
        !!}
    </div>
    <!-- Category section End -->
@else
@php
    $url = null;
    $args = [
        'parent_id' => 0,
        '@withChildren' => true,
        '@limit' => $data->cate_number?$data->cate_number:10
    ];
    $categories = $data->type == 'prodcate' ? $helper->getProductCategories($args) : $helper->getPostCategories($args);
@endphp



@count($categories)
                        <!-- Category section Start -->
                        <div class="category-section menu-widget">
                            <h3>{{$data->title}}</h3>
                            <ul class="sidebar-menu">
                                
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{$category->getViewUrl()}}">
                                            {{$category->name}}
                                        </a>
                                    </li>
                                    @if ($category->children)
                                        <ul>
                                            @foreach ($category->children as $child)
                                            <li>
                                                <a href="{{$child->getViewUrl()}}">
                                                    {{$child->name}}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @endforeach
                                
                            </ul>
                        </div>
                        <!-- Category section End -->
@endcount
    
@endif

