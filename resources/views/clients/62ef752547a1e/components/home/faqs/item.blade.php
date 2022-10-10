<div class="accordion-item">
    <h5 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$data->index+1}}" aria-expanded="{{$data->index == 0 ? 'true' : 'false'}}">
            {{$data->title}}
        </button>
    </h5>
    <div id="collapse-{{$data->index+1}}" class="accordion-collapse collapse {{$data->index == 0 ? 'show' : 'collapsed'}}" data-bs-parent="#faq-accordion">
        <div class="accordion-body">
            <p>{!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->content))) !!}</p>
        </div>
    </div>
</div>