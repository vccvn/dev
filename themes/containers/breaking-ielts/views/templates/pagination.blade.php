@if ($paginator->hasPages())
    <?php
    $itemClass = ''; // 'page-item';
    $activeClass = 'active';
    $prevItemClass = $itemClass;
    $nextItemClass = $itemClass;
    $activeItemClass = $itemClass.' active';
    
    $linkClass = ''; //'page-link';
    $prevLinkClass = $linkClass;// . ' prev';
    $nextLinkClass = $linkClass;// . ' next';
    $activeLinkClass = $linkClass;// . ' active';
    
    $itemDotClass = 'more-next';
    ?>

<ul class="edu-pagination top-space-30 justify-content-start">

        
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li class="{{ $prevItemClass }}">
        <a class="{{$prevLinkClass}}" href="javascript:void(0)" aria-label="Previous">
            <i class="icon-west"></i>
        </a>
    </li>
    
    @else
    <li class="{{ $prevItemClass }}">
        <a class="{{$prevLinkClass}}" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
            <i class="icon-west"></i>
        </a>
    </li>
    
    @endif

    {{-- Pagination Elements --}}
    @php
        $l = false;
        $r = false;
        $l2 = false;
        $r2 = false;
        $mp = 0;
        $cp = $paginator->currentPage();
        $t = $paginator->lastPage();
        
    @endphp
    @foreach ($elements as $element)

        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            @if (!$l && !$l2 && $mp < $cp)
                @php
                    $l = true;
                    $l2 = true;
                @endphp
                <li class="{{$itemDotClass}}"><a class="{{ $linkClass }}" href="javascript:void(0)"><span>{{ $element }}</span></a></li>
            @elseif(!$r && !$r2 && $mp > $cp)
                <li class="{{$itemDotClass}}"><a class="{{ $linkClass }}" href="javascript:void(0)"><span>{{ $element }}</span></a></li>
                @php
                    $r = true;
                    $r2 = true;
                @endphp
            @endif

        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @php $mp++; @endphp
                @if ($page == 1 || ($page >= $cp - 2 && $page <= $cp + 2) || $page == $t)
                    @if ($page == $paginator->currentPage())
                    <li class="{{$activeItemClass}}"><a class="{{ $activeLinkClass }} {{ $linkClass }}" href="javascript:void(0)">{{ $page }}</a></li>
                    @else
                    <li class="{{$itemClass}}"><a class="{{ $linkClass }}" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @elseif($page < $cp-2 && $page> 1 && !$l)
                    @php $l = true; @endphp
                    <li class="{{$itemDotClass}}"><span class="{{ $linkClass }} dots">...</span></li>

                @elseif($page > $cp+2 && $page < $t && !$r) 
                    @php $r = true; @endphp 
                    <li class="{{$itemDotClass}}"><span class="{{ $linkClass }} dots">...</span></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <li class="{{$nextItemClass}}">
        <a class="{{ $nextLinkClass }}" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
            <i class="icon-east"></i>
        </a>
    </li>
    @else
    <li class="{{$nextItemClass}}">
        <a class="{{ $nextLinkClass }}" href="javascript:void(0)" aria-label="Next">
            <i class="icon-east"></i>
        </a>
    </li>
    @endif
</ul>

@endif
