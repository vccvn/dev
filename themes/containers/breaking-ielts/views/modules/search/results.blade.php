
@extends($_layout.'master')
@section('title', $page_title)
@include($_lib.'register-meta')
@section('show_breadcrumb', 1)
@section('content')
    
        <!--=====================================-->
        <!--=        Event Area Start         =-->
        <!--=====================================-->
        <div class="edu-event-area event-area-1 section-gap-equal">
            <div class="container-max">
                <div class="row g-5">
                    <div class="col-lg-8 col-xl-9 col-pr--35">
                        @if ($t = count($results))
                            <div class="row g-5">
                                
                                @foreach ($results as $item)
                                    <!-- Start Event Grid  -->
                                    <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                                        <div class="edu-event event-style-1">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{$url = $item->getViewUrl()}}">
                                                        <img src="{{$item->getThumbnail()}}" alt="{{$item->title}}">
                                                    </a>
                                                    
                                                </div>
                                                <div class="content">
                                                    {{-- <div class="event-date">
                                                        <span class="day">30</span>
                                                        <span class="month">SEP</span>
                                                    </div> --}}
                                                    <h5 class="title"><a href="{{$url}}">{{$item->sub('title', 64, '...')}}</a></h5>
                                                    <p>{{$item->getShortDesc(100)}}</p>
                            
                                                    <ul class="event-meta">
                                                        <li>
                                                            {{$item->dateFormat('d/m/Y')}}
                                                        </li>
                                                    </ul>
                                                    <div class="read-more-btn">
                                                        <a class="edu-btn btn-small btn-secondary" href="{{$url}}">Chi tiết <i class="icon-4"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Event Grid  -->
                                
                                @endforeach
                            </div>

                            {{ $results->links($_template . 'pagination') }}
                        @else
                            <div class="alert alert-warning text-cxenter">
                                Không có kết quả
                            </div>
                        @endif

                    </div>
                            
                    <div class="col-lg-4 col-xl-3">
                        <div class="course-sidebar-2">
                            {!! $html->sidebar_posts->components !!}
                        </div>
                    </div>
                
                    
                </div>

            </div>
        </div>


@endsection