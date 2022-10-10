<?php
$routeParams = [];
if($data->list_type == "collection"){
    if ($data->collection_id && $collection = $helper->getProductCollection(['id' => $data->collection_id])) {
        $routeParams = $collection->urlParams;
    }
}
else{
    if ($data->sorttype) {
        $args['sorttype'] = $data->sorttype;
    }
    if ($data->categories) {
        $routeParams['categories'] = is_array($data->categories) ? implode(',', $data->categories) : '';
    }
    if ($data->match_label && $data->match_label != 'none' && $data->labels) {
        $routeParams[$data->match_label == 'all' ? 'match_labels' : 'has_label'] = is_array($data->labels) ? implode(',', $data->labels) : '';
    }
    if ($data->match_tag && $data->match_tag != 'none' && $data->tags) {
        $routeParams[$data->match_tag == 'all' ? 'match_tags' : 'has_tag'] = is_array($data->tags) ? implode(',', $data->tags) : "";
    }
}

$url = url_merge(route('client.products'), $routeParams, null, null, true);
?>
@if($data->show)
{{--<div class="col-xl-2 col-sm-4">--}}
{{--    <div class="service-wrap">--}}
{{--        <a href="{{$url}}">--}}
{{--            <div class="row">--}}
{{--                <div class="col-6 service-icon">--}}
{{--                    <img src="{{$data->image}}" style="width: 100%;object-fit: cover;">--}}
{{--                </div>--}}
{{--                <div class="col-6 service-content">--}}
{{--                    <h3 class="mb-2" >{{$data->title}}</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="col-md-2 col-sm-6 col-6">
    <a href="{{$url}}" class="t-flex">
        <img src="{{$data->image}}" alt="">
        <div class="box-content">
            <span class="">{{$data->title}}</span>
        </div>
    </a>
</div>
@endif
