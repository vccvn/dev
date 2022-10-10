@php
    $header = $options->theme->header;
@endphp
        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <header class="edu-header header-style-1 header-fullwidth">
            @if ($header->show_topbar)
                
            <div class="header-top-bar">
                <div class="container-fluid">
                    <div class="header-top">
                        <div class="header-top-left">
                            <div class="header-notify">
                                {!! $header->topbar_notify_html !!}
                            </div>
                        </div>
                        <div class="header-top-right">
                            {!!
                                $helper->getCustomMenu(['id' => $header->topbar_right_menu_id], 2, [
                                    'class' => 'header-info'
                                ],[
                                    'active_name' => 'topbar'
                                ])->addAction(function($item){
                                    if($item->hasSubMenu()){
                                        $item->link->style="display:none";
                                        $item->sub->tagName = null;
                                        $item->addClass('social-icon');
                                    }
                                    if($item->level > 0){
                                        $item->tagName = null;
                                    }
                                })
                            !!}
                        </div>
                    </div>
                </div>
            </div>

            
            @endif

            <div id="edu-sticky-placeholder"></div>
            <div class="header-mainmenu">
                <div class="container-fluid">
                    <div class="header-navbar">
                        <div class="header-brand">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img class="logo-light" src="{{$logo = $header->logo??($siteinfo->logo??theme_asset('images/logo/logo-dark.png'))}}" alt="Corporate Logo">
                                </a>
                            </div>
                            <div class="header-category">
                                <nav class="mainmenu-nav">
                                    <ul class="mainmenu">
                                        <li class="has-droupdown">
                                            <a href="#"><i class="icon-1"></i>{{$header->category_menu_text('Danh mục')}}</a>
                                            {!!
                                                $helper->getCustomMenu(['id' => $header->category_menu_id], 1, [
                                                    'class' => 'submenu'
                                                ])
                                            !!}
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-mainnav">
                            <nav class="mainmenu-nav">
                                {!! 
                                    $menu = $helper->getCustomMenu('primary', 3, [
                                        'class' => 'mainmenu'
                                    ])
                                    // thêm một action khi lặp qua từng menu item
                                    ->addAction(function($item, $link, $sub){
                                        $level = $item->getSonLevel();
                                        $SubItems = ($hasSub = $item->hasSubMenu()) ? $item->sub->count() : 0;
                                        if(!$item->level){
                                            if($item->isActive()){

                                            }
                                            if($hasSub){
                                                $item->addClass('has-droupdown');
                                                $sub->addClass('submenu');
                                                if($level>=2 && $SubItems > 0){
                                                    $sub->removeClass()->addClass('mega-menu');

                                                }
                                            }
                                        }
                                        else{
                                            if ($item->level == 1 && $item->parent->sub->count() > 0 && $item->parent->getSonLevel() > 1) {
                                                
                                                $link->before('<h6 class="menu-title">')->after('</h6>');
                                                    
                                                
                                            }
                                                    
                                        }    
                                        
                                    })->render()
                                !!}
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul class="header-action">
                                @if ($header->show_search_form)
                                    
                                <li class="search-bar">
                                    <form action="{{route('client.search')}}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="tim" placeholder="Nhập từ khóa" value="{{$request->tim}}">
                                            <button class="search-btn" type="button"><i class="icon-2"></i></button>
                                        </div>
                                    </form>
                                </li>
                                <li class="icon search-icon">
                                    <a href="javascript:void(0)" class="search-trigger">
                                        <i class="icon-2"></i>
                                    </a>
                                </li>
                                
                                @endif
                                {{-- <li class="icon cart-icon">
                                    <a href="cart.html">
                                        <i class="icon-3"></i>
                                        <span class="count">0</span>
                                    </a>
                                </li> --}}
                                @if ($header->show_extra_button)
                                    
                                <li class="header-btn">
                                    <a href="{{$header->extra_button_url}}" class="edu-btn btn-medium">{{$header->extra_button_text}} @if ($header->extra_button_icon)
                                        <i class="{{$header->extra_button_icon}}"></i>
                                    @endif</a>
                                </li>

                                
                                @endif
                                <li class="mobile-menu-bar d-block d-xl-none">
                                    <button class="hamberger-button">
                                        <i class="icon-54"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-mobile-menu">
                <div class="inner">
                    <div class="header-top">
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img src="{{$logo}}" alt="{{$siteinfo->site_name}}">
                            </a>
                        </div>
                        <div class="close-menu">
                            <button class="close-button">
                                <i class="icon-73"></i>
                            </button>
                        </div>
                    </div>
                    {!! $menu !!}
                </div>
            </div>
            <!-- Start Search Popup  -->
            <div class="edu-search-popup">
                <div class="content-wrap">
                    <div class="site-logo">
                        <img src="{{$logo}}" alt="Logo">
                    </div>
                    <div class="close-button">
                        <button class="close-trigger"><i class="icon-73"></i></button>
                    </div>
                    <div class="inner">
                        <form class="search-form" action="{{route('client.search')}}">
                            <input type="text" class="edublink-search-popup-field" name="tim" placeholder="Nhập từ khóa" value="{{$request->tim}}">
                            <button class="submit-button"><i class="icon-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Search Popup  -->
        </header>