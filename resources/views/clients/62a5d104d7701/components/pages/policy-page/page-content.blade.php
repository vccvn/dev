<div class="policy-page-content">
    <div class="page-content-header">
        <h3 class="page-content-title">{{$data->title}}</h3>
    </div>
    <div class="page-content-texts">
        @if ($data->content_type=='custom')
            {!! $data->content !!}

            @elseif($page = get_active_model('page')){
                {!! $page->content !!}
            }
        @endif
    </div>
</div>