<div class="policy-about">
    <div class="row">
        <div class="col-12 col-md-6">
            @if($data->icon)
            <div class="policy-icon">
                <img src="{{$data->icon}}" alt="">
            </div>
            @endif

            <h3 class="about-title">
                {{$data->title}}
            </h3>
            <div class="about-content">
                {!! $data->content !!}
            </div>
        </div>
        <div class="col-12 col-md-6">
            @if($data->image)
            <div class="policy-image">
                <img src="{{$data->image}}" alt="">
            </div>
            @endif
        </div>
        
    </div>
</div>