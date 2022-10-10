

<div class="col-xl-{{$data->col_xl(2)}} col-lg-{{$data->col_lg(3)}} col-md-{{$data->col_md(4)}} col-sm-{{$data->col_sm(6)}} col-sm-{{$data->col_xs(12)}} {{$data->class}}">
    <div class="edu-footer-widget">
        <div class="logo">
            <a href="{{route('home')}}">
                <img class="logo-light" src="{{$data->image(theme_asset('images/logo/logo-white.png'))}}" alt="Corporate Logo">
            </a>
        </div>
        <p class="description">{{$data->slogan}}</p>
        <div class="widget-information">
            {!! $helper->getCustomMenu(['id' => $data->menu_id], 1, [
                'class' => 'information-list'
            ]) !!}
        </div>
    </div>
</div>