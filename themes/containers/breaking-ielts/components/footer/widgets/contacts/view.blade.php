


<div class="col-xl-{{$data->col_xl(2)}} col-lg-{{$data->col_lg(3)}} col-md-{{$data->col_md(4)}} col-sm-{{$data->col_sm(6)}} col-sm-{{$data->col_xs(12)}} {{$data->class}}">
    <div class="edu-footer-widget">
        <h5 class="widget-title">{{$data->title}}</h5>
        <div class="inner">
            <p class="description">{{$data->description}}</p>
            <form class="{{parse_classname('subcribe-form')}}" action="{{route('client.subscribe')}}" method="post" novalidate="">
                <div class="input-group footer-subscription-form">
                    <input type="email" name="email" class="form-control" placeholder="Nhập email">
                    <button class="edu-btn btn-medium" type="submit">Đăng ký <i class="icon-4"></i></button>
                </div>
            </form>
            {!! 
                $helper->getCustomMenu(['id' => $data->menu_id], 1, [
                    'class' => 'social-share icon-transparent'
                ]) 
            !!}
            
        </div>
    </div>
</div>