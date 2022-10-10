
                    @php
                        $hasPromo = $product->hasPromo();
                        $reviews = $product->getReviewData();
                        $hasOption = $product->hasOption();
                        $u = $product->getViewUrl();
                    @endphp                 
                    
                    <div class="product-box product-item {{isset($item_class)?$item_class:''}}">
                        <div class="prod-thumbnail">
                            <div class="img-wrapper {{isset($use_thubnail_slide) && $use_thubnail_slide ?(isset($thumbnail_class) && $thumbnail_class?$thumbnail_class:'product-thumbnail-slide'):''}}">
                            
                                <a href="{{$u}}">
                                    <img src="{{$product->getImage()}}"
                                        class="bg-img blur-up lazyload" alt="{{$product->name}}">
                                </a>
                                @if (isset($use_thubnail_slide) && $use_thubnail_slide && $product->gallery && count($product->gallery))
                                    @foreach ($product->gallery as $item)
                                    <a href="{{$u}}">
                                        <img src="{{$item->url}}"
                                            class="bg-img blur-up lazyload" alt="{{$product->name}}">
                                    </a>    
                                    @endforeach
                                @endif
    
                            </div>
                                
                            @if(($colorAttr = $product->getOrderOption('size')) && $colorAttr->values)
                                <div class="hover-product-attribute-sizes">
                                    @foreach ($colorAttr->values as $av)
                                    <span class="size-item" title="{{$av->text}}">{{$av->text}}</span>
                                    @endforeach
                                    
                                </div>
                            @endif

                        </div>

                        <div class="product-details">
                            <div class="attributes">
                                @if (($colorAttr = $product->getTypeOrderOption('color')) && $colorAttr->values)
                                <div class="product-attribute-colors">
                                    @foreach ($colorAttr->values as $av)
                                    <span class="color-item" style="background-color: {{$av->advance_value}}" title="{{$av->text}}"></span>
                                    @endforeach
                                    
                                </div>
                                @else
                                <div class="product-attribute-colors">
                                    <span class="color-item" style="background-color: #fff" title=""></span>
                                </div>
                                
                                @endif
                            </div>
                            <div class="product-name">
                                <h5>{{$product->name}}</h5>
                            </div>
                            <div class="product-price {{$hasPromo?'has-promo':''}}">
                                
                                @php
                                       $downPercent = $product->getDownPercent();
                                       $listPrice = $product->priceFormat('list');
                                       $finalPrice = $product->priceFormat('final');
                                @endphp
                                <div class="mobile d-sm-none">
                                    
                                    @if ($hasPromo)
                                        <span class="old-price">
                                            {{$listPrice}}
                                        </span>
                                        <span class="onsale-label mobile">-{{$downPercent}}%</span>
                                    @endif
                                        
                                        <span class="regular-price {{$hasPromo?'d-block':''}}">{{$finalPrice}}</span>
                                </div>
                                <div class="desktop d-none d-sm-flex">
                                    
                                    @if ($hasPromo)
                                        <span class="old-price">
                                            {{$listPrice}}
                                        </span>
                                    @endif
                                        <div class="regular-group">
                                            <span class="regular-price {{$hasPromo?'mr-sm-12':''}}">{{$finalPrice}}</span>
                                            @if ($hasPromo)
                                                <span class="onsale-label desktop">-{{$downPercent}}%</span>
                                            @endif
                                        </div>
                                        
                                </div>
                                
                                
                            </div>
                            <div class="rating-details">
                                
                            </div>
                            <div class="btns">
                                <a href="{{$product->getViewUrl()}}" class="btn btn-outline-default btn-theme square btn-add-cart {{$hasOption? 'product-quick-view '.parse_classname('product-quick-view'): parse_classname('add-to-cart')}}" data-product-id="{{$product->id}}">
                                    <img src="{{theme_asset('images/header/cart.png')}}" alt="">
                                </a>
                                <a href="{{$product->getViewUrl()}}" class="btn btn-colored-default btn-theme btn-buy-now {{$hasOption? 'product-quick-view '.parse_classname('product-quick-view'): parse_classname('add-buy-now')}}" data-product-id="{{$product->id}}">
                                    Mua ngay
                                </a>
                            </div>
                        </div>
                    </div>