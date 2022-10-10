
@extends($_layout.'master')

@section('content')

    <!-- home slider start -->
    <section class="pt-0 poster-section">
        <div class="poster-image slider-for custome-arrow classic-arrow">
            <div>
                <img src="{{theme_asset('images/furniture-images/poster/1.png')}}" class="img-fluid blur-up lazyload" alt="">
            </div>
            <div>
                <img src="{{theme_asset('images/furniture-images/poster/2.png')}}" class="img-fluid blur-up lazyload" alt="">
            </div>
            <div>
                <img src="{{theme_asset('images/furniture-images/poster/3.png')}}" class="img-fluid blur-up lazyload" alt="">
            </div>
        </div>
        <div class="slider-nav image-show">
            <div>
                <div class="poster-img">
                    <img src="{{theme_asset('images/furniture-images/poster/t2.jpg')}}" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div>
                </div>
            </div>
            <div>
                <div class="poster-img">
                    <img src="{{theme_asset('images/furniture-images/poster/t1.jpg')}}" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div>
                </div>

            </div>
            <div>
                <div class="poster-img">
                    <img src="{{theme_asset('images/furniture-images/poster/t3.jpg')}}" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="left-side-contain">
            <div class="banner-left">
                <h4>Sale <span class="theme-color">35% Off</span></h4>
                <h1>New Latest <span>Furniture</span></h1>
                <p>BUY ONE GET ONE <span class="theme-color">FREE</span></p>
                <h2>$79.00 <span class="theme-color"><del>$65.00</del></span></h2>
                <p class="poster-details mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.</p>
            </div>
        </div>

        <div class="right-side-contain">
            <div class="social-image">
                <h6>Facebook</h6>
            </div>

            <div class="social-image">
                <h6>Instagram</h6>
            </div>

            <div class="social-image">
                <h6>Twitter</h6>
            </div>
        </div>
    </section>
    <!-- home slider end -->

    <!-- banner image start -->
    <section class="banner-section pt-4">
        <div>
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-image">
                            <a href="shop-left-sidebar.html">
                                <img src="{{theme_asset('images/furniture-images/banner/1.jpg')}}" class="w-100 blur-up lazyload"
                                    alt="">
                            </a>
                            <div class="banner-details">
                                <a href="wishlist.html" class="heart-button">
                                    <i data-feather="heart"></i>
                                </a>
                                <h4>26% <span class="theme-color">OFF</span></h4>
                                <div class="banner-price">
                                    <h2>$79.00</h2>
                                    <h5 class="theme-color"><del>$65.00</del></h5>
                                </div>
                            </div>

                            <a href="shop-left-sidebar.html" class="banner-shop text-center">
                                <div>
                                    <h5>SHOP NOW</h5>
                                    <p class="mb-0 mt-2">BUY ONE GET ONE FREE</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="banner-image">
                            <a href="shop-left-sidebar.html">
                                <img src="{{theme_asset('images/furniture-images/banner/2.jpg')}}" class="w-100 blur-up lazyload"
                                    alt="">
                            </a>

                            <div class="banner-details">
                                <a href="wishlist.html" class="heart-button">
                                    <i data-feather="heart"></i>
                                </a>
                                <h4>45% <span class="theme-color">OFF</span></h4>
                                <div class="banner-price">
                                    <h2>$42.00</h2>
                                    <h5 class="theme-color"><del>$40.00</del></h5>
                                </div>
                            </div>

                            <a href="shop-left-sidebar.html" class="banner-shop text-center">
                                <div>
                                    <h5>SHOP NOW</h5>
                                    <p class="mb-0 mt-2">BUY ONE GET ONE FREE</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="banner-image">
                            <a href="shop-left-sidebar.html">
                                <img src="{{theme_asset('images/furniture-images/banner/3.jpg')}}" class="w-100 blur-up lazyload"
                                    alt="">
                            </a>

                            <div class="banner-details">
                                <a href="wishlist.html" class="heart-button">
                                    <i data-feather="heart"></i>
                                </a>
                                <h4>15% <span class="theme-color">OFF</span></h4>
                                <div class="banner-price">
                                    <h2>$50.00</h2>
                                    <h5 class="theme-color"><del>$45.00</del></h5>
                                </div>
                            </div>

                            <a href="shop-left-sidebar.html" class="banner-shop text-center">
                                <div>
                                    <h5>SHOP NOW</h5>
                                    <p class="mb-0 mt-2">BUY ONE GET ONE FREE</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner image end -->

    <!-- New Arrival Section Start -->
    <section class="ratio_asos overflow-hidden">
        <div class="container p-sm-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="title-3 text-center">
                        <h2>New Arrival</h2>
                        <h5 class="theme-color">Our Collection</h5>
                    </div>
                </div>
            </div>

            <div class="row g-sm-4 g-3">
                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product-left-sidebar.html">
                                <img src="{{theme_asset('images/furniture-images/new-arrival/1.jpg')}}"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                <a href="product-left-sidebar.html" class="font-default">
                                    <h5>Orange Arm Chair</h5>
                                </a>
                            </div>
                            <div class="main-price">
                                <ul class="rating mb-1 mt-0">
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
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h3 class="theme-color">$32.87</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product-left-sidebar.html">
                                <img src="{{theme_asset('images/furniture-images/new-arrival/2.jpg')}}"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme float-start">New</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                <a href="product-left-sidebar.html" class="font-default">
                                    <h5>Fancy Yellow Chair</h5>
                                </a>
                            </div>
                            <div class="main-price">
                                <ul class="rating mb-1 mt-0">
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
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h3 class="theme-color">$32.87</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product-left-sidebar.html">
                                <img src="{{theme_asset('images/furniture-images/new-arrival/3.jpg')}}"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-black">New</span>
                                <span class="label label-theme">50% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                <a href="product-left-sidebar.html" class="font-default">
                                    <h5>Orange Arm Chair</h5>
                                </a>
                            </div>
                            <div class="main-price">
                                <ul class="rating mb-1 mt-0">
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
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h3 class="theme-color">$32.87</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product-left-sidebar.html">
                                <img src="{{theme_asset('images/furniture-images/new-arrival/4.jpg')}}"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme float-start">New</span>
                                <span class="label label-black float-end">50% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                <a href="product-left-sidebar.html" class="font-default">
                                    <h5>Orange Arm Chair</h5>
                                </a>
                            </div>
                            <div class="main-price">
                                <ul class="rating mb-1 mt-0">
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
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h3 class="theme-color">$32.87</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product-left-sidebar.html">
                                <img src="{{theme_asset('images/furniture-images/new-arrival/5.jpg')}}"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-black">New</span>
                                <span class="label label-theme">50% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                <a href="product-left-sidebar.html" class="font-default">
                                    <h5>Orange Arm Chair</h5>
                                </a>
                            </div>
                            <div class="main-price">
                                <ul class="rating mb-1 mt-0">
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
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h3 class="theme-color">$32.87</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product-left-sidebar.html">
                                <img src="{{theme_asset('images/furniture-images/new-arrival/7.jpg')}}"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme float-start">New</span>
                                <span class="label label-black float-end">50% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                <a href="product-left-sidebar.html" class="font-default">
                                    <h5>Orange Arm Chair</h5>
                                </a>
                            </div>
                            <div class="main-price">
                                <ul class="rating mb-1 mt-0">
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
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h3 class="theme-color">$32.87</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product-left-sidebar.html">
                                <img src="{{theme_asset('images/furniture-images/new-arrival/8.jpg')}}"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-black">New</span>
                                <span class="label label-theme">50% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                <a href="product-left-sidebar.html" class="font-default">
                                    <h5>Orange Arm Chair</h5>
                                </a>
                            </div>
                            <div class="main-price">
                                <ul class="rating mb-1 mt-0">
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
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h3 class="theme-color">$32.87</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product-left-sidebar.html">
                                <img src="{{theme_asset('images/furniture-images/new-arrival/9.jpg')}}"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme float-start">New</span>
                                <span class="label label-black float-end">50% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                <a href="product-left-sidebar.html" class="font-default">
                                    <h5>Orange Arm Chair</h5>
                                </a>
                            </div>
                            <div class="main-price">
                                <ul class="rating mb-1 mt-0">
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
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h3 class="theme-color">$32.87</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Arrival Section End -->

    <!-- Deal Day Section Start -->
    <section class="deal-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0">
                    <div class="discount-image-details-1">
                        <div class="discount-images">
                            <div class="theme-circle"></div>
                            <img src="{{theme_asset('images/furniture-images/deal/1.png')}}"
                                class="img-fluid shoes-images blur-up lazyload" alt="">
                        </div>

                        <div class="discunt-details mt-xl-0 mt-4">
                            <div>
                                <div class="heart-button">
                                    <i data-feather="heart"></i>
                                </div>

                                <div class="discount-shop">
                                    <h2 class="text-spacing">Shop Now</h2>
                                    <h6>BUY ONE GET ONE FREE</h6>
                                </div>

                                <h5 class="mt-3">Special Discount <span class="theme-color">70% OFF</span></h5>
                                <h2 class="my-2 deal-text">Deal Of The Day <br>from <span class="theme-color">$75</span>
                                </h2>
                                <div class="timer-style-2 my-2 justify-content-center d-flex">
                                    <ul>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="days1" class="theme-color"></h2>Days
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="hours1" class="theme-color"></h2>Hour
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="minutes1" class="theme-color"></h2>Min
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="seconds1" class="theme-color"></h2>Sec
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <button onclick="location.href = 'shop-left-sidebar.html';" type="button"
                                    class="btn default-light-theme default-theme mt-2">Shop
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Day Section end -->

    <!-- Product Slider Section Start -->
    <section class="product-slider overflow-hidden">
        <div>
            <div class="container">
                <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="title-3 pb-4 title-border">
                            <h2>Most Popular</h2>
                            <h5 class="theme-color">Our Collection</h5>
                        </div>

                        <div class="product-slider round-arrow">
                            <div>
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/1.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/2.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/3.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/4.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/5.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/6.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="javascript:void(0)">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/7.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/8.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="title-3 pb-4 title-border">
                            <h2>Recent Popular</h2>
                            <h5 class="theme-color">Our Collection</h5>
                        </div>

                        <div class="product-slider round-arrow">
                            <div>
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/1.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/2.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/3.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/4.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/5.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/6.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/7.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/8.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="title-3 pb-4 title-border">
                            <h2>Most Popular</h2>
                            <h5 class="theme-color">Our Collection</h5>
                        </div>

                        <div class="product-slider round-arrow">
                            <div>
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/1.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/2.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/3.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/4.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/5.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/6.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/7.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="product-image">
                                            <a href="product-left-sidebar.html">
                                                <img src="{{theme_asset('images/furniture-images/product/8.jpg')}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <a href="product-left-sidebar.html">
                                                    <h6 class="font-light">Fully Confirtable</h6>
                                                    <h3>Latest wood handle chair 7854</h3>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                    <div class="cart-wrap">
                                                        <ul>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Buy">
                                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                    <i data-feather="shopping-bag"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Quick View">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                            </li>


                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Compare">
                                                                <a href="compare.html">
                                                                    <i data-feather="refresh-cw"></i>
                                                                </a>
                                                            </li>

                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Wishlist">
                                                                <a href="wishlist.html" class="wishlist">
                                                                    <i data-feather="heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Slider Section End -->

    <!-- Our Product Section Start -->
    <section class="ratio_asos overflow-hidden">
        <div class="px-0 container-fluid p-sm-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="title-3 text-center">
                        <h2>Our Product</h2>
                        <h5 class="theme-color">Our Collection</h5>
                    </div>
                </div>

                <div class="our-product">
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product-left-sidebar.html">
                                    <img src="{{theme_asset('images/furniture-images/new-arrival/1.jpg')}}"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Furniture</span>
                                <div class="label-block">
                                    <span class="label label-theme">30% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Orange Arm Chair</h5>
                                    </a>
                                </div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
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
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <h3 class="theme-color">$32.87</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product-left-sidebar.html">
                                    <img src="{{theme_asset('images/furniture-images/new-arrival/2.jpg')}}"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Furniture</span>
                                <div class="label-block">
                                    <span class="label label-theme float-start">New</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Fancy Yellow Chair</h5>
                                    </a>
                                </div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
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
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <h3 class="theme-color">$32.87</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product-left-sidebar.html">
                                    <img src="{{theme_asset('images/furniture-images/new-arrival/3.jpg')}}"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Furniture</span>
                                <div class="label-block">
                                    <span class="label label-black">New</span>
                                    <span class="label label-theme">50% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Orange Arm Chair</h5>
                                    </a>
                                </div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
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
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <h3 class="theme-color">$32.87</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product-left-sidebar.html">
                                    <img src="{{theme_asset('images/furniture-images/new-arrival/4.jpg')}}"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Furniture</span>
                                <div class="label-block">
                                    <span class="label label-theme float-start">New</span>
                                    <span class="label label-black float-end">50% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Orange Arm Chair</h5>
                                    </a>
                                </div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
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
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <h3 class="theme-color">$32.87</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product-left-sidebar.html">
                                    <img src="{{theme_asset('images/furniture-images/new-arrival/5.jpg')}}"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Furniture</span>
                                <div class="label-block">
                                    <span class="label label-black">New</span>
                                    <span class="label label-theme">50% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Orange Arm Chair</h5>
                                    </a>
                                </div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
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
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <h3 class="theme-color">$32.87</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product-left-sidebar.html">
                                    <img src="{{theme_asset('images/furniture-images/new-arrival/7.jpg')}}"
                                        class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Furniture</span>
                                <div class="label-block">
                                    <span class="label label-theme float-start">New</span>
                                    <span class="label label-black float-end">50% Off</span>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                                data-bs-target="#addtocart">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <p class="font-light mb-sm-2 mb-0">Fully Confirtable</p>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Orange Arm Chair</h5>
                                    </a>
                                </div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
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
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <h3 class="theme-color">$32.87</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Product Section End -->

    <!-- tab banner section start -->
    <section class="tab-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-3 text-center">
                        <h2>Hurry up!</h2>
                        <h5 class="theme-color">Special Offer</h5>
                    </div>
                    <div class="tab-wrap">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="nav-item">
                                <button class="nav-link" id="camera-tab" data-bs-toggle="tab" data-bs-target="#Camera"
                                    type="button">Lamps</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="audio-tab" data-bs-toggle="tab" data-bs-target="#Audio"
                                    type="button">Sofa-set</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="navigation-tab" data-bs-toggle="tab"
                                    data-bs-target="#Navigation" type="button">Tables</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link active" id="other-tab" data-bs-toggle="tab"
                                    data-bs-target="#Others" type="button">Mixer</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="phones-tab" data-bs-toggle="tab" data-bs-target="#Phones"
                                    type="button">Chair</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="computer-tab" data-bs-toggle="tab"
                                    data-bs-target="#Computer" type="button">Beds</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="accesories-tab" data-bs-toggle="tab"
                                    data-bs-target="#Accesories" type="button">Window</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="Camera" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="circle-shape"></div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-2">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-2">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/3.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-2">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 order-lg-0 order-1">
                                            <div class="product-banner product-banner-circle">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <div class="label-block">
                                                            <span class="label label-black">New</span>
                                                            <span class="label label-theme">50% Off</span>
                                                        </div>
                                                        <a href="product-left-sidebar.html">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/a1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="offer-end offer-end-demo4">
                                                            <h3>Hurry Up !!!!! </h3>
                                                            <h6>Offer Expire in 02 hours</h6>
                                                        </div>
                                                    </div>
                                                    <div class="product-details text-center">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-2">$52.00</span></h3>
                                                        <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                            <h5 class="main-title">Latest Yellow Sofa Furniture Fully
                                                                Comfortable</h5>
                                                        </a>
                                                        <ul class="rating rating-2">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-2">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-2">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/5.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-2">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Audio" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="circle-shape"></div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-2">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-2">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/3.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-2">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 order-lg-0 order-1">
                                            <div class="product-banner product-banner-circle">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <div class="label-block">
                                                            <span class="label label-black">New</span>
                                                            <span class="label label-theme">50% Off</span>
                                                        </div>
                                                        <a href="product-left-sidebar.html">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/a1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="offer-end offer-end-demo4">
                                                            <h3>Hurry Up !!!!! </h3>
                                                            <h6>Offer Expire in 02 hours</h6>
                                                        </div>
                                                    </div>
                                                    <div class="product-details text-center">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-2">$52.00</span></h3>
                                                        <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                            <h5 class="main-title">Latest Yellow Sofa Furniture Fully
                                                                Comfortable</h5>
                                                        </a>
                                                        <ul class="rating rating-2">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/5.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Navigation" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="circle-shape"></div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/3.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 order-lg-0 order-1">
                                            <div class="product-banner product-banner-circle">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <div class="label-block">
                                                            <span class="label label-black">New</span>
                                                            <span class="label label-theme">50% Off</span>
                                                        </div>
                                                        <a href="product-left-sidebar.html">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/a1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="offer-end offer-end-demo4">
                                                            <h3>Hurry Up !!!!! </h3>
                                                            <h6>Offer Expire in 02 hours</h6>
                                                        </div>
                                                    </div>
                                                    <div class="product-details text-center">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                            <h5 class="main-title">Latest Yellow Sofa Furniture Fully
                                                                Comfortable</h5>
                                                        </a>
                                                        <ul class="rating rating-2">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/5.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="Others" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="circle-shape"></div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/3.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 order-lg-0 order-1">
                                            <div class="product-banner product-banner-circle">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <div class="label-block">
                                                            <span class="label label-black">New</span>
                                                            <span class="label label-theme">50% Off</span>
                                                        </div>
                                                        <a href="product-left-sidebar.html">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/a1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="offer-end offer-end-demo4">
                                                            <h3>Hurry Up !!!!! </h3>
                                                            <h6>Offer Expire in 02 hours</h6>
                                                        </div>
                                                    </div>
                                                    <div class="product-details text-center">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                            <h5 class="main-title">Latest Yellow Sofa Furniture Fully
                                                                Comfortable</h5>
                                                        </a>
                                                        <ul class="rating rating-2">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/5.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Phones" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="circle-shape"></div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/3.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 order-lg-0 order-1">
                                            <div class="product-banner product-banner-circle">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <div class="label-block">
                                                            <span class="label label-black">New</span>
                                                            <span class="label label-theme">50% Off</span>
                                                        </div>
                                                        <a href="product-left-sidebar.html">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/a1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="offer-end offer-end-demo4">
                                                            <h3>Hurry Up !!!!! </h3>
                                                            <h6>Offer Expire in 02 hours</h6>
                                                        </div>
                                                    </div>
                                                    <div class="product-details text-center">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                            <h5 class="main-title">Latest Yellow Sofa Furniture Fully
                                                                Comfortable</h5>
                                                        </a>
                                                        <ul class="rating rating-2">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/5.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Computer" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="circle-shape"></div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/3.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 order-lg-0 order-1">
                                            <div class="product-banner product-banner-circle">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <div class="label-block">
                                                            <span class="label label-black">New</span>
                                                            <span class="label label-theme">50% Off</span>
                                                        </div>
                                                        <a href="product-left-sidebar.html">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/a1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="offer-end offer-end-demo4">
                                                            <h3>Hurry Up !!!!! </h3>
                                                            <h6>Offer Expire in 02 hours</h6>
                                                        </div>
                                                    </div>
                                                    <div class="product-details text-center">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                            <h5 class="main-title">Latest Yellow Sofa Furniture Fully
                                                                Comfortable</h5>
                                                        </a>
                                                        <ul class="rating rating-2">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/5.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Accesories" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="circle-shape"></div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/3.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 order-lg-0 order-1">
                                            <div class="product-banner product-banner-circle">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <div class="label-block">
                                                            <span class="label label-black">New</span>
                                                            <span class="label label-theme">50% Off</span>
                                                        </div>
                                                        <a href="product-left-sidebar.html">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/a1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="offer-end offer-end-demo4">
                                                            <h3>Hurry Up !!!!! </h3>
                                                            <h6>Offer Expire in 02 hours</h6>
                                                        </div>
                                                    </div>
                                                    <div class="product-details text-center">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                            <h5 class="main-title">Latest Yellow Sofa Furniture Fully
                                                                Comfortable</h5>
                                                        </a>
                                                        <ul class="rating rating-2">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/1.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/2.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box product-box1">
                                                    <div class="img-wrapper">
                                                        <a href="product-left-sidebar.html" class="text-center">
                                                            <img src="{{theme_asset('images/furniture-images/special-offer/5.png')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">$49.00<span
                                                                class="font-light ms-1">$52.00</span></h3>
                                                        <a href="product-left-sidebar.html" class="font-default">
                                                            <h5>Latest Yellow Sofa Furniture Fully Comfortable</h5>
                                                        </a>
                                                        <ul class="rating">
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
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tab banner section end -->

    <!-- instagram shop section start -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="title-3 text-center">
                        <h2>Instagram Shop</h2>
                        <h5 class="theme-color">New Collection</h5>
                    </div>
                    <div class="product-style-1">
                        <div class="product-wrapper insta-slider instagram-wrap">
                            <div>
                                <div class="product-box product-box1">
                                    <div class="img-wrapper">
                                        <div class="top-wishlist">
                                            <a href="javascript:void(0)" class="heart-wishlist ms-auto">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0)" class="text-center">
                                            <img src="{{theme_asset('images/furniture-images/shop/1.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="insta-hover insta-hover-gradient text-center">
                                        <div>
                                            <h2>Women</h2>
                                            <h5>New Offer -56% Discount</h5>
                                            <h3 class="brand-name">Latest Night Lamp From $35</h3>
                                            <button onclick="location.href = 'shop-left-sidebar.html';" type="button"
                                                class="btn btn-light-white">Shop now <i
                                                    class="fas fa-chevron-right ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-box1">
                                    <div class="img-wrapper">
                                        <div class="top-wishlist">
                                            <a href="javascript:void(0)" class="heart-wishlist ms-auto">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="share">
                                            <span class="share-plus">+</span>
                                            <span class="text-dark">Share</span>
                                        </div>
                                        <a href="javascript:void(0)" class="text-center">
                                            <img src="{{theme_asset('images/furniture-images/shop/2.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="insta-hover insta-hover-gradient text-center">
                                        <div>
                                            <h2>Women</h2>
                                            <h5>New Offer -56% Discount</h5>
                                            <h3 class="brand-name">Latest Night Lamp From $35</h3>
                                            <button onclick="location.href = 'shop-left-sidebar.html';" type="button"
                                                class="btn btn-light-white">Shop now <i
                                                    class="fas fa-chevron-right ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-box1">
                                    <div class="img-wrapper">
                                        <div class="top-wishlist">
                                            <a href="javascript:void(0)" class="heart-wishlist ms-auto"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                        <a href="javascript:void(0)" class="text-center">
                                            <img src="{{theme_asset('images/furniture-images/shop/3.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="insta-hover insta-hover-gradient text-center">
                                        <div>
                                            <h2>Women</h2>
                                            <h5>New Offer -56% Discount</h5>
                                            <h3 class="brand-name">Latest Night Lamp From $35</h3>
                                            <button onclick="location.href = 'shop-left-sidebar.html';" type="button"
                                                class="btn btn-light-white">Shop now <i
                                                    class="fas fa-chevron-right ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-box1">
                                    <div class="img-wrapper">
                                        <div class="top-wishlist">
                                            <a href="javascript:void(0)" class="heart-wishlist ms-auto"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                        <div class="share">
                                            <span class="share-plus">+</span>
                                            <span class="text-dark">Share</span>
                                        </div>
                                        <a href="javascript:void(0)" class="text-center">
                                            <img src="{{theme_asset('images/furniture-images/shop/4.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="insta-hover insta-hover-gradient text-center">
                                        <div>
                                            <h2>Women</h2>
                                            <h5>New Offer -56% Discount</h5>
                                            <h3 class="brand-name">Latest Night Lamp From $35</h3>
                                            <button onclick="location.href = 'shop-left-sidebar.html';" type="button"
                                                class="btn btn-light-white">Shop now <i
                                                    class="fas fa-chevron-right ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-box1">
                                    <div class="img-wrapper">
                                        <div class="top-wishlist">
                                            <a href="javascript:void(0)" class="heart-wishlist ms-auto"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                        <a href="javascript:void(0)" class="text-center">
                                            <img src="{{theme_asset('images/furniture-images/shop/1.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="insta-hover insta-hover-gradient text-center">
                                        <div>
                                            <h2>Women</h2>
                                            <h5>New Offer -56% Discount</h5>
                                            <h3 class="brand-name">Latest Night Lamp From $35</h3>
                                            <button onclick="location.href = 'shop-left-sidebar.html';" type="button"
                                                class="btn btn-light-white">Shop now <i
                                                    class="fas fa-chevron-right ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-box1">
                                    <div class="img-wrapper">
                                        <div class="top-wishlist">
                                            <a href="javascript:void(0)" class="heart-wishlist ms-auto"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                        <a href="javascript:void(0)" class="text-center">
                                            <img src="{{theme_asset('images/furniture-images/shop/2.png')}}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="insta-hover insta-hover-gradient text-center">
                                        <div>
                                            <h2>Women</h2>
                                            <h5>New Offer -56% Discount</h5>
                                            <h3 class="brand-name">Latest Night Lamp From $35</h3>
                                            <button onclick="location.href = 'shop-left-sidebar.html';" type="button"
                                                class="btn btn-light-white">Shop now <i
                                                    class="fas fa-chevron-right ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram shop section end -->

    <!-- service section start -->
    <section class="service-section service-style-2 section-b-space">
        <div class="container">
            <div class="row g-4 g-sm-3">
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="svg/icons.svg#customer"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Customer Servcies</h3>
                            <span class="font-light">Top notch customer service.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="svg/icons.svg#shop"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Pickup At Any Store</h3>
                            <span class="font-light">Free shipping on orders over $65.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="svg/icons.svg#secure-payment"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Secured Payment</h3>
                            <span class="font-light">We accept all major credit cards.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="svg/icons.svg#return"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Free Returns</h3>
                            <span class="font-light">30-days free return policy.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->



    {{-- modals --}}

    
    <!-- Quick view modal start -->
    <div class="modal fade quick-view-modal" id="quick-view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="quick-view-image ">
                                <div class="quick-view-slider ratio_medium">
                                    <div>
                                        <img src="{{theme_asset('images/furniture-images/new-arrival/1.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="{{theme_asset('images/furniture-images/new-arrival/2.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="{{theme_asset('images/furniture-images/new-arrival/3.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="{{theme_asset('images/furniture-images/new-arrival/4.jpg')}}"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                </div>
                                <div class="quick-nav">
                                    <div>
                                        <img src="{{theme_asset('images/furniture-images/new-arrival/1.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="{{theme_asset('images/furniture-images/new-arrival/2.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="{{theme_asset('images/furniture-images/new-arrival/3.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="{{theme_asset('images/furniture-images/new-arrival/4.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-right">
                                <h2 class="mb-2">Orange Arm Chair2</h2>
                                <h6 class="font-light mb-1">Fully Confirtable</h6>
                                <ul class="rating">
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
                                </ul>
                                <div class="price mt-3">
                                    <h3>$49.68</h3>
                                </div>
                                <div class="color-types">
                                    <h4>colors</h4>
                                    <ul class="color-variant mb-0">
                                        <li class="bg-half-light selected">
                                        </li>
                                        <li class="bg-light1"></li>
                                        <li class="bg-blue1"></li>
                                        <li class="bg-black1"></li>
                                    </ul>
                                </div>
                                <div class="product-details">
                                    <h4>product details</h4>
                                    <ul>
                                        <li>
                                            <span class="font-light">Display type :</span> Chair
                                        </li>
                                        <li>
                                            <span class="font-light">Mechanism:</span> Tilt Angle
                                        </li>
                                        <li>
                                            <span class="font-light">Warranty:</span> 8 Months
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-btns">
                                    <a href="cart.html" class="btn btn-solid-default btn-sm">Add
                                        to cart</a>
                                    <a href="product-left-sidebar.html" class="btn btn-solid-default btn-sm">View
                                        details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Newsletter modal start -->
    <div class="modal fade newletter-modal" id="newsletter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <img src="{{theme_asset('images/newletter-icon.png')}}" class="img-fluid blur-up lazyload" alt="">
                    <div class="modal-title">
                        <h2 class="tt-title">Sign up for our Newsletter!</h2>
                        <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>
                        <p class="font-light">Oh, and it's free!</p>

                        <div class="input-group mb-3">
                            <input placeholder="Email" class="form-control" type="text">
                        </div>

                        <div class="cancel-button text-center">
                            <button class="btn default-theme w-100" data-bs-dismiss="modal"
                                type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter modal end -->

    <!-- Cart Successful Start -->
    <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-contain">
                        <div>
                            <div class="modal-messages">
                                <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                                you cart.
                            </div>
                            <div class="modal-product">
                                <div class="modal-contain-img">
                                    <img src="{{theme_asset('images/fashion/instagram/4.jpg')}}" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <div class="modal-contain-details">
                                    <h4>Premier Cropped Skinny Jean</h4>
                                    <p class="font-light my-2">Yellow, Qty : 3</p>
                                    <div class="product-total">
                                        <h5>TOTAL : <span>$1,140.00</span></h5>
                                    </div>
                                    <div class="shop-cart-button mt-3">
                                        <a href="shop-left-sidebar.html"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                            SHOPPING</a>
                                        <a href="cart.html"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_asos mt-4">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col-sm-12 p-0">
                                    <div
                                        class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="{{theme_asset('images/fashion/product/front/1.jpg')}}"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="{{theme_asset('images/fashion/product/front/2.jpg')}}"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="{{theme_asset('images/fashion/product/front/3.jpg')}}"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="{{theme_asset('images/fashion/product/front/4.jpg')}}"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Successful End -->

@endsection

{{-- thêm js mà layout chua co --}}

@section('js')
    
    <!-- Timer Js -->
    <script src="{{theme_asset('js/timer1.js')}}"></script>

    <!-- newsletter js -->
    <script src="{{theme_asset('js/newsletter.js')}}"></script>

    <!-- add to cart modal resize -->
    <script src="{{theme_asset('js/cart_modal_resize.js')}}"></script>

    
    <script>
        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
    </script>

@endsection

