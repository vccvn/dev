@php
    $rating_avg = $lesson->rating_avg??0;
    $rating_count = $lesson->rating_count??0;
@endphp
@extends($_layout.'master')
@include($_lib.'register-meta')

@section('content')
    
<div class="edu-breadcrumb-area breadcrumb-style-3">
    <div class="container">
        <div class="breadcrumb-inner">
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
            <div class="page-title">
                <h1 class="title">{{$lesson->name}}</h1>
            </div>
            <ul class="course-meta">
                <li><i class="icon-58"></i>by {{$siteinfo->site_name}}</li>
                <li><i class="icon-59"></i>English</li>
                @if ($rating_avg && $rating_count)
                    
                <li class="course-rating">
                    <div class="rating">
                        @for ($i = 0; $i < $rating_avg; $i++)
                            
                        <i class="icon-23"></i>
                        
                        @endfor
                    </div>
                    <span class="rating-count">({{$rating_count}} Đánh giá)</span>
                </li>
                
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

        <!--=====================================-->
        <!--=       Blog Details Area Start     =-->
        <!--=====================================-->
        <div class="blog-details-area section-gap-equal">
            <div class="container">
                <div class="row row--30">
                    <div class="col-lg-8">
                        <div class="blog-details-content">
                            @php
                                $user = $request->user();
                            @endphp
                            @if ($course->canViewLessons())
                                <div class="entry-content">
                                        
                                    @if ($article->video_url && $video = $article->getVideo())
                                        <div class="video-container mb-40">
                                            <div class="video-wrapper">
                                                <iframe src="{{$video->embed_url}}" class="video" title="Advertisement" name="fitvid1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    @else
                                    {{-- if($article->featured_image) --}}
                                        
                                        <div class="thumbnail">
                                            <img src="{{$article->getThumbnail()}}" alt="{{$article->title}}">
                                        </div>
                                    @endif
                                                
                                    
                                    {{-- <span class="category">Developer</span> --}}
                                    <h3 class="title">{{$article->title}}</h3>
                                    <ul class="blog-meta">
                                        <li><i class="icon-27"></i> {{$article->dateFormat('d/m/Y')}}</li>
                                        <li><i class="icon-28"></i>{{$article->comment_count?$article->comment_count:0}}</li>
                                    </ul>
                                    
                                </div>
                                <div class="article-content">
                                    {!! $article->content !!}
                                </div>

                            @elseif(!$user)
                                <div class="alert alert-warning text-center">
                                    <a href="#">Tham gia</a> khóa học hoặc <a href="{{route('client.account.login')}}">đăng nhập</a> để tiếp tục
                                </div>
                            @else
                                <div class="alert alert-warning text-center">
                                    <a href="#">Tham gia</a> khóa học
                                </div>
                                
                            @endif

                        </div>
                    </div>
                        
                    <div class="col-lg-4">
                        <div class="course-sidebar-3">
                            
                            <div class="edu-blog-widget widget-categories">
                                <div class="inner">
                                    <h4 class="widget-title">Các bài / Video</h4>
                                    <div class="content">
                                        <ul class="category-list">
                                            @if (count($course->lessons))
                                                @foreach ($course->lessons as $item)
                                                    <li>
                                                        <a href="{{$item->getViewUrl()}}">
                                                            @if ($item->id == $article->id)
                                                                <strong>{{$item->name}} </strong>
                                                            @else
                                                                {{$item->name}} 
                                                            @endif
                                                        
                                                        {{-- <span>(3)</span> --}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="edu-course-widget widget-course-summery">
                                <div class="inner">
        
                                    <div class="thumbnail">
                                        <img src="{{$course->thumbnail_url}}" alt="{{$course->name}}">
                                        @if ($course->video_url)
                                        <a href="{{$course->video_url}}" class="play-btn video-popup-activation"><i class="icon-18"></i></a>
                                        @endif
                                        
                                    </div>
                                    <div class="content">
                                        <h4 class="widget-title">Thông tin khóa học:</h4>
                                        <ul class="course-item">
                                            <li>
                                                <span class="label"><i class="icon-60"></i>Giá:</span>
                                                <span class="value price">{{$course->price_format_text}}</span>
                                            </li>
                                            {{-- <li>
                                                <span class="label"><i class="icon-62"></i>Instrutor:</span>
                                                <span class="value">Edward Norton</span>
                                            </li> --}}
                                            <li>
                                                <span class="label"><i class="icon-61"></i>Thời gian học:</span>
                                                <span class="value">{{$course->duetime_label}}</span>
                                            </li>
                                            <li>
                                                <span class="label"><img class="svgInject" src="{{theme_asset('images/svg-icons/books.svg')}}" alt="book icon">Lessons:</span>
                                                <span class="value">{{$course->lesson_count??12}}</span>
                                            </li>
                                            <li>
                                                <span class="label"><i class="icon-63"></i>Số học viên:</span>
                                                <span class="value">{{$course->student_count??12}}</span>
                                            </li>
                                            <li>
                                                <span class="label"><i class="icon-64"></i>Đầu ra:</span>
                                                <span class="value">{{$course->outpoint??'NO'}}</span>
                                            </li>
                                        </ul>
                                        
                                        {{-- @if (!$course->canViewLessons()) --}}
                                        <div class="read-more-btn">
                                            <a href="{{route('client.contacts.form')}}" class="edu-btn">Đăng ký <i class="icon-4"></i></a>
                                        </div>
                                        {{-- @endif --}}
                                        @include($_template.'share2',[
                                                    'title' => $article->title,
                                                    'link' => $course->getViewUrl(),
                                                    'description' => $article->getShortDesc(150),
                                                    'image' => $article->thumbnail_url
                                                ])
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>


    
@endsection
