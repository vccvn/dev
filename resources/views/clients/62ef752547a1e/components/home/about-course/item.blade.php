
<div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
    <div class="why-choose-box-2 features-box color-{{$data->style}}-style">
        <div class="icon">
            <i class="{{$data->icon}}"></i>
        </div>
        <div class="content">
            <h4 class="title">{{$data->title}}</h4>
            <p><strong>Giáo trình</strong></p>
            <p>{!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->syllabus))) !!}</p>
            <p><strong>Đầu ra:</strong> {{$data->outpoint}}</p>
            <p><strong>Thời gian:</strong> {{$data->duetime}} tháng</p>
        </div>
    </div>
</div>