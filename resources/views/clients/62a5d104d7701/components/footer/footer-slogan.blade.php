@if($data->show)
<div class="col-xl-{{$data->col_xl(2)}} col-lg-{{$data->col_lg(3)}} col-md-{{$data->col_md(4)}} col-sm-{{$data->col_sm(6)}} col-sm-{{$data->col_xs(12)}} {{$data->class}}">
    <div class="footer-contact">
        <div class="brand-logo">
            <a href="index.html" class="footer-logo">
                <img src="{{$data->image}}" class="img-fluid blur-up lazyloaded" alt="logo">
            </a>
        </div>
        <p class="contact-lists">
            {{$data->slogan}}
        </p>
        {!!
            $data->menu_id?$helper->getCustomMenu(['id' => $data->menu_id], 1, [
                'class' => 'footer-content-menu'
            ]):''
        !!}
    </div>
</div>
@endif