@php
    $postSettings = $options->theme->posts;

    if($dynamicSettings = get_ielts_post_settings($dynamic->id)){
        $postSettings = $dynamicSettings;
    }

    $postOptions = $postSettings->makeByPrefix('detail_');
    $layout = $postOptions->layout('sidebar');
    
    $next = $article->next();
    $previous = $article->previous();


    $url = $article->getViewUrl();
    $category = $article->category;
@endphp
@extends($_layout.'master')
@include($_lib.'register-meta')
@section('show_breadcrumb', 1)
@section('breadcrumb.title', $page_title)
@section('content')
    

        <!--=====================================-->
        <!--=       Blog Details Area Start     =-->
        <!--=====================================-->
        <div class="blog-details-area section-gap-equal">
            <div class="container">
                <div class="row row--30">
                    <div class="col-lg-{{$layout == 'fullwidth'?12:8}}">
                        <div class="blog-details-content">
                            <div class="entry-content">
                                    
                                @if (in_array($article->content_type, ['video', 'video_embed']) && $video = $article->getVideo())
                                    <div class="video-container mb-40">
                                        <div class="video-wrapper">
                                            <iframe src="{{$video->embed_url}}" class="video" title="Advertisement" name="fitvid1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                @else
                                {{-- if($article->featured_image) --}}
                                    
                                    <div class="thumbnail">
                                        <img src="{{$article->getImage()}}" alt="{{$article->title}}">
                                    </div>
                                @endif
                                            
                                
                                {{-- <span class="category">Developer</span> --}}
                                <h3 class="title">{{$article->title}}</h3>
                                <ul class="blog-meta">
                                    @if ($article->category)
                                        <li><a href="{{$article->category->getViewUrl()}}"><i class="icon-64"></i> {{$article->category->name}}</a></li>
                                    @endif
                                    <li><i class="icon-27"></i> {{$article->dateFormat('d/m/Y')}}</li>
                                    <li><i class="icon-28"></i>{{$article->comment_count?$article->comment_count:0}}</li>
                                </ul>
                                
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
                        <!-- author -->

                        @if ($next || $previous)
                            
                        <div class="blog-pagination">
                            <div class="row g-5">
                                <div class="col-lg-6">
                                    @if ($previous)
                                        
                                    <div class="blog-pagination-list prev-post">
                                        <a href="{{$previous->getViewUrl()}}">
                                            <i class="icon-west"></i>
                                            <span>{{$previous->sub('title', 40, '...')}}</span>
                                        </a>
                                    </div>
                                    
                                    @endif
                                </div>

                                <div class="col-lg-6">
                                    @if ($next)
                                        
                                    <div class="blog-pagination-list next-post">
                                        <a href="{{$next->getViewUrl()}}">
                                            <span>{{$next->sub('title', 40, '...')}}</span>
                                            <i class="icon-east"></i>
                                        </a>
                                    </div>
                                    
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        @endif
                        

                        @include($_template.'comments',[
                            'article' => $article,
                            'ref' => $article->type,
                            'ref_id' => $article->id,
                            'url' => $article->getViewUrl()
                        ])
                    </div>
                    @if ($layout != 'fullwidth')
                        
                    <div class="col-lg-4">
                        @include($_current . 'templates.sidebars.style-2')
                    </div>
                    
                    @endif
                </div>
            </div>
        </div>
{!! $postSettings->detail_footer_components??$html->post_detail_footer->components !!}
@endsection
