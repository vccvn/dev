@php
    $pageSettings = $options->theme->pages;
    if (isset($parent)) {
        if ($dynamicSettings = get_ielts_page_settings($parent->id)) {
            $pSettings = $dynamicSettings;
            $pageSettings->merge($dynamicSettings->all());
        }
        if ($parent != $article && ($peSettings = get_ielts_page_settings($article->id))) {
            $pageSettings->merge($peSettings->all());
        }
    } elseif ($pSettings = get_ielts_page_settings($article->id)) {
        $pageSettings->merge($pSettings->all());
    }
    $pageOptions = $pageSettings->makeByPrefix('detail_');
    $layout = $pageOptions->layout('sidebar');
    
    $next = $article->next();
    $previous = $article->previous();


    $url = $article->getViewUrl();
    $category = $article->category;
@endphp
@extends($_layout.'master')
@include($_lib.'register-meta')

@section('content')
    

        <!--=====================================-->
        <!--=       Blog Details Area Start     =-->
        <!--=====================================-->
        <div class="blog-details-area section-gap-equal">
            <div class="container-max">
                <div class="blog-details-content">
                    <div class="entry-content">
                                    
                                    
                        
                        {{-- <span class="category">Developer</span> --}}
                        <h1 class="title text-center">{{$article->title}}</h1>
                        
                    </div>
                    <div class="article-content">
                        {!! $article->content !!}
                    </div>

                    <div class="blog-share-area">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                @if(count($article->tags))

                                    <div class="blog-tags">
                                        <h6 class="title">Tags:</h6>
                                        <div class="tag-list">
                                            @foreach ($article->tags as $tag)
                                                <a href="{{route('client.posts.tag', ['tag' => $tag->slug])}}">{{$tag->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                
                            </div>
                            <div class="col-md-5">
                                
                                @include($_template.'share',[
                                    'title' => $article->title,
                                    'link' => $url,
                                    'description' => $article->getShortDesc(150),
                                    'image' => $article->getImage('social')
                                ])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
