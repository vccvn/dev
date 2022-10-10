<div class="col-lg-4 col-sm-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
    @if ($data->link)
        <a href="{{$data->link}}">
    @endif
    <div class="categorie-grid categorie-style-1 color-extra08-style edublink-svg-animate">
        <div class="icon">
            <img class="svgInject" src="{{theme_asset('images/animated-svg-icons/off-campus-programs.svg')}}" alt="animated icon">
            <!-- <i class="icon-11"></i> -->
        </div>
        <div class="content">
            <h5 class="title">{{$data->title}}</h5>
            <p>
                {!! nl2br($data->description) !!}
            </p>
        </div>
    </div>
    @if ($data->link)
        </a>
    @endif
    
</div>