<div class="menu-right">
    <ul>
        <li>
            <div class="search-box d-xl-none primary-color mobile-btn">
                <img src="{{theme_asset('images/header/search.png')}}" alt="">
            </div>
            <div class="search-group d-none d-xl-block">
                <form action="{{route('client.products')}}" method="get">
                    <div class="input-group">
                        <i class="icon fa fa-search  primary-color"></i>
                        <input type="text" name="keyword" value="{{$request->keyword}}" class="form-control search-input" placeholder="Tìm kiếm">
    
                    </div>
                </form>
            </div>
        </li>
        <li class="onhover-dropdown cart-dropdown">

            <a href="{{route('client.orders.cart')}}" class="btn btn-outline-default btn-spacing btn-cart d-none d-xl-flex">
                
                <img src="{{theme_asset('images/header/cart.png')}}" alt="">
                
            </a>
            <a href="{{route('client.orders.cart')}}" class="btn-cart cart-icon d-xl-none primary-color mobile-btn">
                
                <img src="{{theme_asset('images/header/cart.png')}}" alt="">
                
            </a>
        </li>
        <li class="onhover-dropdown df-lg-none" id="account-menu-block">
            @php
                $user = $request->user();
            @endphp
            <a class="btn btn-colored-default d-none d-lg-flex btn-spacing btn-account" href="{{route('client.account')}}">
                <span class="name-span">@if ($user)
                    {{$user->first_name??($user->name??$user->username)}}
                    @else
                    Tài khoản
                @endif</span>
            </a>
            <div class="onhover-div profile-dropdown">
                <ul id="account-menu-links">
                    @if ($user)
                    <li>
                        <a href="{{route('client.account')}}" class="d-block">Thông tin tài khoản</a>
                    </li>
                    <li>
                        <a href="{{route('client.account.logout')}}" class="d-block">Đăng xuất</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('client.account.login')}}" class="d-block">Đăng nhập</a>
                    </li>
                    <li>
                        <a href="{{route('client.account.register')}}" class="d-block">Đăng ký</a>
                    </li>
                    @endif
                </ul>
            </div>
        </li>
        <li class="d-xl-none">
            <div class="toggle-nav mobile-btn">
                <img src="{{theme_asset('images/header/menu.png')}}" alt="">
            </div>
        </li>
        
    </ul>
</div>
