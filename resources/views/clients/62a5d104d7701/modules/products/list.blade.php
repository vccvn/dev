@extends($_layout.'shop')
@section('title', $page_title)
@include($_lib.'register-meta')
{{-- @section('page.header.show', 'breadcrumb') --}}

@section('content')
@include($_current.'templates.filter')


<!-- label and featured section -->
@if (count($products))
    
<!-- Prodcut setion -->
<div class="row row-cols-max-4  row-cols-lg-3 row-cols-md-3 row-cols-2 mt-3  product-style-2 ratio_asos product-list-section">
    @foreach ($products as $product)
        <div>
            @include($_template.'products.grid-item', [
                'product' => $product,
                'item_class' => 'mb-10',
                'use_thubnail_slide' => true
            ])
        </div>
    @endforeach
</div>
{{$products->links($_template.'pagination')}}

@if (isset($category) && $category && $category->second_content)
    <div class="cate-content-box {{strlen($category->second_content) > 300?'viewmoreable':''}}">
        <div class="content-box article-content">
            {!! $category->second_content !!}
        </div>
        
        <div class="see-more-content">
            <a href="javascript:;" class="btn-see-more">Xem thêm</a>
        </div>
    </div>
@endif
@else
    <div class="alert alert-error text-center">
        Không có kết quả phù hợp
    </div>
@endif

@php
    add_css_link(theme_asset('css/vendors/ion.rangeSlider.min.css'));
    add_js_src(theme_asset('js/price-filter.js'));
    add_js_src(theme_asset('js/ion.rangeSlider.min.js'));
    add_js_src(theme_asset('js/filter.js'));
@endphp
@endsection