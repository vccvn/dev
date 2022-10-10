

        <!--=====================================-->
        <!--=       Breadcrumb Area Start      =-->
        <!--=====================================-->


        <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        @if ($_title = isset($title) && $title ? $title : $__env->yieldContent('breadcrumb.title'))
                            <h1 class="title">{!! $_title !!}</h1>
                        @endif
                        
                    </div>
                    <ul class="edu-breadcrumb">
                        @if ($breadcrumbs = $helper->getBreadcrumbs())
                            @foreach ($breadcrumbs as $item)
                                @if ($loop->last)
                                    <li class="breadcrumb-item active" aria-current="page">{{ $item->text }}</li>
                                @else
                                    <li class="breadcrumb-item"><a title="{{ $item->text }}" href="{{ $item->url }}">{{ $item->text }}</a></li>
                                    <li class="separator"><i class="icon-angle-right"></i></li>
                                @endif
                
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1"><img src="{{theme_asset('images/about/shape-22.png')}}" alt="shape"></li>
                <li class="shape-2 scene"><img data-depth="2" src="{{theme_asset('images/about/shape-13.png')}}" alt="shape"></li>
                <li class="shape-3 scene"><img data-depth="-2" src="{{theme_asset('images/about/shape-15.png')}}" alt="shape"></li>
                <li class="shape-4"><img src="{{theme_asset('images/about/shape-22.png')}}" alt="shape"></li>
                <li class="shape-5 scene"><img data-depth="2" src="{{theme_asset('images/about/shape-07.png')}}" alt="shape"></li>
            </ul>
        </div>

