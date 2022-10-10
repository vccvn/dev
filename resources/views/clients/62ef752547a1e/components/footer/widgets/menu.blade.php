
<div class="col-xl-{{$data->col_xl(2)}} col-lg-{{$data->col_lg(3)}} col-md-{{$data->col_md(4)}} col-sm-{{$data->col_sm(6)}} col-sm-{{$data->col_xs(12)}} {{$data->class}}">
    <div class="edu-footer-widget explore-widget">
        <h5 class="widget-title">{{$data->title}}</h5>
        <div class="inner">
            {!! $helper->getCustomMenu(['id' => $data->menu_id], 1, [
                'class' => 'footer-link link-hover'
            ]) !!}
                
            
        </div>
    </div>
</div>