<div class="row g-5">
    @foreach ($pages as $page)
        
        <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <div class="edu-event-list event-list-2">
                <div class="inner">
                    <div class="thumbnail">
                        <a href="{{$url = $page->getViewUrl()}}">
                            <img src="{{$page->getThumbnail()}}" alt="{{$page->title}}">
                        </a>
                        
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="{{$url}}">{{$page->sub('title', 64, '...')}}</a></h4>
                        {{-- <span class="event-location"><i class="icon-40"></i>Newyork City, USA</span> --}}
                        <p>{{$page->getShortDesc(150)}}</p>
                        <div class="read-more-btn">
                            <a class="edu-btn btn-medium btn-border" href="{{$url}}">Chi tiết <i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    @endforeach
</div>