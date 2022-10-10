@extends($_layout.'master')
@section('title', $page_title)
@include($_lib.'register-meta')
{{-- @section('page.header.show', 'breadcrumb') --}}

@php
$hasPromo = $product->hasPromo();
// $reviews = $product->getReviewData();
$hasOption = $product->hasOption();
$u = $product->getViewUrl();
@endphp

@section('content')

<!-- Shop Section start -->
<section class="product-detail-section section-default pt-12 pt-lg-30 pt-xl-30 pt-xxl-40 section-small">
    <div class="container-max">
        <div class="row mt-0">
            <div class="col-lg-12 col-12">
                <div class="details-items {{parse_classname('product-detail')}}">
                    <div class="row mt-0">
                        <div class="col-md-6">
                            <div class="product-thumbnails">
                                <div class="thumbnail-left">
                                    <div class="details-image-vertical black-slide rounded">
                                        <div>
                                            <img src="{{$product->getImage()}}" class="img-fluid blur-up lazyload" alt="{{$product->name}}">
                                        </div>
                                        @if ($product->gallery && count($product->gallery))
                                        @foreach ($product->gallery as $item)
                                        <div>
                                            <img src="{{$item->url}}" class="img-fluid blur-up lazyload" alt="{{$product->name}}">
                                        </div>
    
                                        @endforeach
                                        @endif
    
                                    </div>
                                </div>

                                <div class="details-image-1 ratio_asos">
                                    <div>
                                        <img src="{{$product->getImage()}}" id="zoom_01" data-zoom-image="{{$product->getImage()}}" class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="{{$product->name}}">
                                    </div>
                                    @if ($product->gallery && count($product->gallery))
                                    @foreach ($product->gallery as $item)
                                    <div>
                                        <img src="{{$item->url}}" id="zoom_02" data-zoom-image="{{$item->url}}" class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="{{$product->name}}">
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="cloth-details-size product-info {{parse_classname('product-detail-info', 'product-detail-info-'.$product->id)}}" id="product-detail-{{$product->id}}" data-id="{{$product->id}}">
                                <div class="sku">
                                    {{$product->sku}}
                                </div>

                                <div class="details-image-concept product-name">
                                    <h2>{{$product->name}}</h2>
                                </div>

                                <div class="product-rating-overview">
                                    <ul class="rating d-inline-block">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>

                                        <li><span>120 Đánh giá</span></li>
                                    </ul>
                                </div>
                                <div class="product-price-box">

                                    @if ($hasPromo)
                                    <span class="old-price">
                                        {{$product->priceFormat('list')}}
                                    </span>
                                    <span class="onsale-label">-{{$product->getDownPercent()}}%</span>
                                    @endif

                                    <div class="regular-price  {{parse_classname('product-price')}}">{{$product->priceFormat('final')}}</div>
                                </div>
                                
                                <div class="border-product">
                                    @if ($product->features)
                                        <div class="seo-features">
                                            <h6 class="product-title product-title-2 d-block">Đặc điểm nổi bật</h6>
                                            <ul class="">
                                                @foreach ($product->features as $text)
                                                    <li class="feature-item">
                                                        <a href="javascript:;">{{$text}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        
                                    @endif
                                    @if ($ecommerce->allow_place_order && $product->price_status > 0 && $product->status > 0 && $product->available_in_store)
                                        <form action="{{ route('client.orders.add-to-cart') }}" method="post" class="{{ $product->price_status < 0 ? '' : parse_classname('product-order-form') }}">

                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}" class="{{ parse_classname('product-order-id') }}">
                                            <input type="hidden" name="redirect" value="checkout">


                                                {!! $product->attributesToHtml([
                                                    'section_class' => '',
                                                    'attribute_class' => '',
                                                    'attribute_name_class' => '',
                                                    'value_list_class' => '',
                                                    'value_item_class' => '',
                                                    'select_class' => '',
                                                    'image_class' => '',
                                                    'value_text_class' => '',
                                                    'radio_class' => '',
                                                    'value_label_class' => '',
                                                ]) !!}





                                            <div class="addeffect-section product-description">
                                                {{-- <h6 class="product-title size-text">select size
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#sizemodal">size chart</a>
                                                </h6>

                                                <h6 class="error-message">please select size</h6>

                                                <div class="size-box">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">s</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">m</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">l</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">xl</a>
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                                

                                                <h6 class="quantity-label d-block">Số lượng</h6>

                                                <div class="qty-box">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                        </span>
                                                        <input type="text" name="quantity" class="form-control input-number {{ $product->price_status < 0 ? '' : parse_classname('product-order-quantity', 'quantity') }}" value="1" min="1" step="1">
                                                        <span class="input-group-prepend">
                                                            <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="product-buttons">
                                                <button type="submit" class="btn btn-outline-default btn-add-to-cart ">
                                                    Thêm giỏ hàng
                                                </button>
                                                <a href="javascript:void(0)"  class="btn btn-colored-default btn-buy-now crazy-btn-buy-now">
                                                    Mua Ngay
                                                </a>
                                            </div>
                                        </form>

                                    @elseif(!$product->available_in_store)
                                        <div class="alert alert-danger">
                                            Sản phẩm tạm hết hàng
                                        </div>
                                    @endif
                                    
                                </div>

                                <div class="product-extra-info">
                                    {!! $html->product_detail_extra->components !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-max pt-50 pt-lg-40">
        
            <!-- detail content -->
            <div class="detail-contents">
                <div class="row ">
                    <div class="col-12 col-lg-8">
                        <h3 class="detail-title">Chi tiết sản phẩm</h3>
                        <div class="detail-box">
                            <div class="content-box article-content">
                                {!! $product->detail !!}
                            </div>
                            <div class="see-more-content">
                                <a href="javascript:;" class="btn-see-more">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        {!! $html->sidebar_product->components !!}
                    </div>
                </div>
            </div>

    </div>
</section>
<!-- Shop Section end -->
{!! $html->product_detail_append->components !!}
<!-- product section end -->
@endsection
