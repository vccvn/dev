@extends($_layout.'blog')
@section('title', $page_title)
@include($_lib.'register-meta')

@section('page.header.show', 'breadcrumb')
@section('content')
@if (count($pages))
    
<div class="row g-4 ">

    @foreach ($pages as $page)
        <div class="col-lg-4 col-md-6">
        <div class="card blog-categority">
            <a href="{{$u = $page->getViewUrl()}}" class="blog-img">
                <img src="{{$page->getThumbnail()}}" alt="{{$page->title}}" class="card-img-top blur-up lazyload bg-img">
            </a>
            <div class="card-body">
                @if ($page->category)
                <h5><a href="{{$page->category->getViewUrl()}}">{{$page->category->name}}</a></h5>
                @endif
                
                <a href="{{$u}}">
                    <h2 class="card-title">
                        {{$page->title}}
                    </h2>
                </a>
                <div class="blog-desc">
                    {{$page->getShortDesc(120)}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
</div>

<div class="col-12">
    {{$pages->links($_template.'pagination')}}
</div>

@else
    <div class="alert alert-warning text-center">
        Không tìm thấy kết quả phù hộp!
    </div>
@endif
@endsection