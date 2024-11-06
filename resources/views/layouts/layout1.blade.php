<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('customer/css/stylelayout1.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/styleregister.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/stylelogin.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/styleprofile.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
        
    <header>
        <a href="#" class="logo"><img src="{{ asset('customer/img/logof.png') }}" alt="logo"></a>
        <ul class="navmenu">
        <li><a href="{{ route('index') }}">Trang chủ</a></li>
        <li><a href="#">Sale khủng</a></li>
        <li><a href="{{ route('products') }}">Sản phẩm</a></li>
        <li><a href="#">Phụ kiện</a></li>
        <li><a href="#">Liên hệ</a></li>
        </ul>

        
        <div class="nav-icon">
            <a href="#"><i class="bi bi-search"></i></a>
            <a href="#"><i class="bi bi-cart"></i></a>
            @auth
                <!-- Hiển thị khi đã đăng nhập -->
                <a href="{{ route('profile') }}" class="user-logged-in"><i class="bi bi-person-check-fill"></i></a> 
                <!-- Có thể dùng route 'logout' để đăng xuất -->
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Đăng xuất
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth

            @guest
                <!-- Hiển thị khi chưa đăng nhập -->
                <a href="{{ route('login') }}"><i class="bi bi-person-circle"></i></a> 
            @endguest

            
            <div class="bi bi-list" id="menu-icon"></div> 
        </div>

    </header>

    <main>
        <!-- Đây là nơi các trang con sẽ được chèn vào -->
        @yield('content')
    </main>

    <div class="end-text">
        <p>Copyright @2024. All Rights Reserved. Designd By KingKong Group</p>
    </div>

    <script src="{{ asset('customer/js/java.js') }}"></script>
</body>
</html>