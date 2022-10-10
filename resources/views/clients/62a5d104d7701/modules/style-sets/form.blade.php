
@extends($_layout.'master')
@section('title', $page_title??($style?'Cập nhật':'Tạo') . ' style cá nhân')
@include($_lib.'register-meta')

@section('content')
<div class="section section-personal-style-form ovxh section-default section-small">
    <form action="{{route('client.style-sets.save')}}" method="post" id="personal-style-set-form" enctype="multipart/form-data">
        @csrf
        @if ($style)
        <input type="hidden" name="id" value="{{$style->id}}">
        @endif
        <input type="hidden" name="template_id" value="{{$templateDetail->id}}">
        <div class="container-max">
            <div class="section-header">
                <div class="flexable">
                    <h3 class="section-title">{{$style?'Cập nhật':'Tạo'}} style cá nhân</h3>
                    <button type="button" class="btn btn-colored-default d-md-none btn-save-style" data-name="{{$style?$style->name:''}}">Lưu</button>
                </div>
                
        
            </div>
            <div class="section-content">
                @if ($errors->first())
                    <div class="alert alert-danger">
                        Có vẻ như bạn chưa điền đầy đủ thông tin. Vui lòng kiểm tra lại thông tin của mỗi loại item
                    </div>
                @endif

                <div class="style-form-components">
                    <div class="style-types style-preview"  style="width: {{$templateDetail->width}}px;">
                        <div class="thumbnail-group">
                            <div class="custom-file mb-12">
                                <input type="file" name="thumbnail" id="thumbnail_image" class="custom-file-input" accept="*image/jpeg,image/png,image/gif,image/svg">
                                <label class="custom-file-label" for="thumbnail_image">{{$style && $style->thumbnail_image?$style->thumbnail_image:'Chưa có file nào được chọn'}}</label>
                            </div>
                            @if ($errors->has('thumbnail'))
                                <div class="alert alert-danger">
                                    {{$errors->first('thumbnail')}}
                                </div>
                            @endif
                        </div>
                        <div class="frame" style="width: {{$templateDetail->width}}px; height: {{$templateDetail->height}}px;">
                            <div class="avatar">
                                <img src="{{$templateDetail->avatar_url}}" alt="">
                            </div>
                            @if (count($templateDetail->itemConfigs))
                                @php
                                    $frameWidth = $templateDetail->width;
                                    $frameHeight = $templateDetail->height;
                                    
                                @endphp
                                @foreach ($templateDetail->itemConfigs as $item)
                                    @php
                                        $previewConfig = $item->preview_config;
                                        $width = $previewConfig['width'] && $previewConfig['width'] > 0?$previewConfig['width']:1;
                                        $height = $previewConfig['height'] && $previewConfig['height'] > 0?$previewConfig['height']:1;
                                        $oldItemId = old('items.'.$item->id, 0);
                                    @endphp
                                    <div class="item back" id="preview-item-back-{{$item->id}}" style="top: {{$previewConfig['top']}}px; left: {{$previewConfig['left']}}px; width: {{$previewConfig['width']}}px; height: {{$previewConfig['height']}}px">
                                        
                                    </div>
                                    <div class="item front" id="preview-item-front-{{$item->id}}" style="top: {{$previewConfig['top']}}px; left: {{$previewConfig['left']}}px; width: {{$previewConfig['width']}}px; height: {{$previewConfig['height']}}px"></div>
                                @endforeach
                            @endif


                        </div>
                        
                    </div>
                    <div class="style-items style-select-options"  style="">
                        <div class="name-group df-sm-none">
                            <div class="input-group">
                                <input type="text" class="form-control" name="name" id="input-style-name" value="{{old('name', $style?$style->name:null)}}" placeholder="Tên style">
                                <button class="btn btn-theme btn-outline-default" type="submit">Lưu Style</button>
                            </div>
                            @if ($errors->has('name'))
                                <div class="alert alert-danger mt-12">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                        <div class="tab-nav">
                            <ul>
                                @if (count($templateDetail->itemConfigs))
                                    @foreach ($templateDetail->itemConfigs as $item)
                                        <li>
                                            <a href="#tab-item-{{$item->id}}" class="tab-link {{$loop->index == 0?'active':''}}" data-id="{{$item->id}}">{{$item->itemConfig->name}}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="tab-contents">
                            @if (count($templateDetail->itemConfigs))
                                @foreach ($templateDetail->itemConfigs as $item)
                                    @php
                                        $previewConfig = $item->preview_config;
                                        $width = $previewConfig['width'] && $previewConfig['width'] > 0?$previewConfig['width']:1;
                                        $height = $previewConfig['height'] && $previewConfig['height'] > 0?$previewConfig['height']:1;
                                        $ratio = $height/$width * 100;
                                        
                                    @endphp
                                    
                                    <div class="tab-item {{$loop->index == 0?'active':''}}" id="tab-item-{{$item->id}}">
                                        @php
                                            $oldItemId = old('items.'.$item->id, 0);
                                        @endphp
                                        @if (is_mobile())
                                            <div class="style-item-slides">
                                                <div class="slides">
                                                    @if (count($item->templateItems))
                                                        @foreach ($item->templateItems as $tempItem)
                                                            <div class="template-item" data-item-config-id="{{$item->id}}" data-item-id="{{$tempItem->id}}">
                                                                <input type="radio" name="items[{{$item->id}}]" value="{{$tempItem->id}}" id="template-item-{{$item->id}}-{{$tempItem->id}}" @if ($tempItem->id==$oldItemId || in_array($tempItem->id, $styleItems))
                                                                    checked
                                                                @endif>
                                                                <label for="template-item-{{$item->id}}-{{$tempItem->id}}">
                                                                    <div class="img-ratio">
                                                                        <div class="ratio" style="padding-top: {{$ratio}}%"></div>
                                                                        <img src="{{$tempItem->front_image_url}}" alt="">
                                                                        <div class="checked"></div>
                                                                    </div>
                                                                </label>
                                                                
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    <div class="template-item">
                                                        <div class="flexable text-center" style="opacity: 0.01">
                                                            End
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        @else
                                            <div class="row row-cols-2 row-cols-md-3 row-cols-xxl-4">
                                                @if (count($item->templateItems))
                                                    @foreach ($item->templateItems as $tempItem)
                                                        <div class="template-item" data-item-config-id="{{$item->id}}" data-item-id="{{$tempItem->id}}">
                                                            <input type="radio" name="items[{{$item->id}}]" value="{{$tempItem->id}}" id="template-item-{{$item->id}}-{{$tempItem->id}}" @if ($tempItem->id==$oldItemId || in_array($tempItem->id, $styleItems))
                                                                checked
                                                            @endif>
                                                            <label for="template-item-{{$item->id}}-{{$tempItem->id}}">
                                                                <div class="img-ratio">
                                                                    <div class="ratio" style="padding-top: {{$ratio}}%"></div>
                                                                    <img src="{{$tempItem->front_image_url}}" alt="">
                                                                    <div class="checked"></div>
                                                                </div>
                                                            </label>
                                                            
                                                        </div>
                                                    @endforeach
                                                @endif

                                                
                                            </div>
                                        @endif

                                        @if ($errors->has('items.'.$item->id))
                                            <div class="alert alert-danger">
                                                {{$errors->first('items.'.$item->id)}}
                                            </div>
                                        @endif

                                            @php
                                                $attr_values = $style && is_array($style->set_data) && 
                                                            ($set_data = $style->set_data) && 
                                                            array_key_exists('attr_values', $set_data) && 
                                                            is_array($set_data['attr_values']) && 
                                                            array_key_exists($item->id, $set_data['attr_values']) ?
                                                            array_values($set_data['attr_values'][$item->id]) : []; 
                                                            

                                            @endphp
                                            @include($_current.'attributes', [
                                                'attributes' => $item->attributes, 
                                                'item_id' => $item->id,
                                                'attr_values' => $attr_values
                                            ])
                                        
                                    </div>
                                
                                @endforeach
                                @if ($errors->has('items'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('items')}}
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </form>
</div>

@endsection

{{-- thêm js mà layout chua co --}}
@php
    add_css_link(theme_asset('css/style-form.min.css'));
    add_js_src(theme_asset('js/style-form.js'));
    add_js_data('style_template_data', $templateDetail->toArray())

@endphp
@section('css')
    <style>

        @media screen and (min-width: 768px){
            .style-items{
                width: calc(100% - {{$templateDetail->width+15}}px);
            }
        }
    </style>


@endsection
@section('js')
    
    <!-- newsletter js -->
    <script src="{{theme_asset('js/newsletter.js')}}"></script>

    <!-- add to cart modal resize -->
    {{-- <script src="{{theme_asset('js/cart_modal_resize.js')}}"></script> --}}

    
    <script>
        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
    </script>

@endsection

