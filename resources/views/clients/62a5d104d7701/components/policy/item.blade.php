<div class="col-xl-3 col-sm-6">
    <div class="service-wrap">
        <div class="service-icon">
            <img src="{{ $data->image }}" style="width: 40%;object-fit: cover;">
        </div>
        <div class="service-content">
            <h3 class="mb-2">{{$data->title}}</h3>
            <span class="font-light">{{$data->content}}</span>
        </div>
    </div>
</div>
<style>
    .service-wrap {
        text-align: left !important;
    }
</style>
