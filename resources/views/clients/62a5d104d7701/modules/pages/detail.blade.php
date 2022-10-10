@php
    $u = $article->getViewUrl();


    switch ($article->id) {
        case $options->theme->about->about_page_id:
            $layout = 'master';
            break;
        case $options->theme->policy->page_id:
            $layout = 'master';
            break;
        case $options->theme->products->suggest_page_id: 
            $layout = 'master';
            break;
        default:
            $layout = 'page';
            break;
    }
@endphp
@section('title', $page_title)
@include($_lib.'register-meta')
@extends($_layout.$layout)
@section('content')
    
    @switch($article->id)
        @case($options->theme->about->about_page_id)
            {!! $html->about_contents->components !!}
            
            @break
        
         @case($options->theme->policy->page_id)
            <div class="policy-page-section section section-small pt-20 pb-10 pb-md-20 pb-lg-40 pb-xl-50">
                <div class="container-max">
                    {!! $html->policy_contents->components !!}
                </div>
                
            </div>
            
            @break
        @case($options->theme->products->suggest_page_id)
            @include($_template.'style-sets.suggestion-styles')
            
            @break
        
        @default
            <div class="row g-4">
                <div class="col-12">
                    <div class="blog-details">

                        <div class="blog-detail-contain">
                            {{-- <span class="font-light">{{$article->dateFormat('d/m/Y')}}</span> --}}
                            <h2 class="card-title">{{$article->title}}</h2>
                            <div class="font-light article-content">
                                {!! $article->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    @endswitch

@endsection