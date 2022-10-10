
    <section class="breadcrumb-section section-b-space">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container container-max">
            <div class="row">
                <div class="col-12">
                    @if ($_title = isset($title) && $title ? $title : $__env->yieldContent('breadcrumb.title'))
                        <h3>{!! $_title !!}</h3>
                    @endif
        
                    <nav>
                        <ol class="breadcrumb">
                            @if ($breadcrumbs = $helper->getBreadcrumbs())
                                @foreach ($breadcrumbs as $item)
                                    @if ($loop->last)
                                        <li class="breadcrumb-item active" aria-current="page">{{ $item->text }}</li>
                                    @else
                                        <li class="breadcrumb-item"><a title="{{ $item->text }}" href="{{ $item->url }}">{{ $item->text }}</a></li>
                                    @endif
                    
                                @endforeach
                            @endif
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
