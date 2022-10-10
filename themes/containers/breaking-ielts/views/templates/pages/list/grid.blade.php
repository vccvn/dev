<div class="row g-5">
    @foreach ($pages as $page)
        <!-- Start Event Grid  -->
        <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
            <div class="edu-event event-style-1">
                <div class="inner">
                    <div class="thumbnail">
                        <a href="{{$url = $page->getViewUrl()}}">
                            <img src="{{$page->getThumbnail()}}" alt="{{$page->title}}">
                        </a>
                        
                    </div>
                    <div class="content">
                        {{-- <div class="event-date">
                            <span class="day">30</span>
                            <span class="month">SEP</span>
                        </div> --}}
                        <h5 class="title"><a href="{{$url}}">{{$page->sub('title', 64, '...')}}</a></h5>
                        <p>{{$page->getShortDesc(150)}}</p>

                        <ul class="event-meta">
                            <li>
                                {{$page->dateFormat('d/m/Y')}}
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