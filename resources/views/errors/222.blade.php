<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome!</title>
    <link rel="stylesheet" href="{{asset('static/system/errors/222/style.css')}}">
</head>
<body class="bg-purple">
        
    <div class="stars">
        <div class="custom-navbar">
            <div class="brand-logo">
                <img src="{{asset('static/images/logos/admin_page_logo.png')}}" height="40px">
            </div>
            <div class="navbar-links">
                <ul>
                  <li><a href="https://vcc.vn" target="_blank">Home</a></li>
                  <li><a href="https://vcc.vn" target="_blank">About</a></li>
                  <li><a href="https://vcc.vn" target="_blank">Features</a></li>
                  <li><a href="https://vcc.vn" class="btn-request" target="_blank">Request A Demo</a></li>
                </ul>
            </div>
        </div>
        <div class="central-body">
            <img class="image-404" src="http://salehriaz.com/404Page/img/404.svg" width="300px">
            <a href="{{route('setup.install')}}" class="btn-go-home" target="_blank">Đến trang thiết lập</a>
        </div>
        <div class="objects">
            <img class="object_rocket" src="http://salehriaz.com/404Page/img/rocket.svg" width="40px">
            <div class="earth-moon">
                <img class="object_earth" src="http://salehriaz.com/404Page/img/earth.svg" width="100px">
                <img class="object_moon" src="http://salehriaz.com/404Page/img/moon.svg" width="80px">
            </div>
            <div class="box_astronaut">
                <img class="object_astronaut" src="http://salehriaz.com/404Page/img/astronaut.svg" width="140px">
            </div>
        </div>
        <div class="glowing_stars">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>

        </div>

    </div>

</body>
</html>
