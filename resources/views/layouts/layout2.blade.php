<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('customer/css/stylelayout2.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/styleproducts.css') }}">


    <title>@yield('title', 'Default Title')</title>
</head>
<body>

    <header>
        <a href="#" class="logo"><img src="{{ asset('customer/img/logof.png') }}" alt="logo"></a>
        <ul class="navmenu">
        <li><a href="{{ route('index') }}" style="text-decoration: none;">Trang chủ</a></li>
        <li><a href="#" style="text-decoration: none;">Sale khủng</a></li>
        <li><a href="{{ route('products') }}" style="text-decoration: none;">Sản phẩm</a></li>
        <li><a href="#" style="text-decoration: none;">Phụ kiện</a></li>
        <li><a href="#" style="text-decoration: none;">Liên hệ</a></li>
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

    {{-- <section class="slide_layout2">
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators / Các điểm chấm chỉ số -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Slideshow / Các ảnh trượt -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('customer/img/sl1.jpg') }}" class="d-block w-100" alt="Product Image 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Giày Nam</h5>

      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('customer/img/sl2.jpg') }}" class="d-block w-100" alt="Product Image 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Giày Nữ</h5>

      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('customer/img/sl3.jpg') }}" class="d-block w-100" alt="Product Image 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Giày Trẻ Em</h5>

      </div>
    </div>
  </div>

  <!-- Controls / Các nút điều khiển -->

  <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> --}}

    </section>

    <main>
        <!-- Đây là nơi các trang con sẽ được chèn vào -->
        @yield('content')
    </main>

    <!-- contact-section -->
    <section class="contact">
        <div class="contact-info">
            <div class="first-info">
                <img src="{{ asset('customer/img/logof.png') }}" alt="">
                <p> 101 Nguyễn thị Thập, Liên Chiểu <br> Đà Nẵng</p>
                <p>0888 688 886</p>
                <p>cuocsongkhokhan@gmail.com</p>
                <div class="social-icon">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="second-info">
                <h4>Support</h4>
                <p>Contact us</p>
                <p>About page</p>
                <p>Size Guide</p>
                <p>Shopping & Returns</p>
                <p>Privacy</p>
            </div>

            <div class="third-info">
                <h4>Shop</h4>
                <p>Men's Shopping</p>
                <p>Women's Shopping</p>
                <p>Kids's Shopping</p>
                <p>Furniture</p>
                <p>Discount</p>
            </div>

            <div class="fourth-info">
                <h4>Company</h4>
                <p>About</p>
                <p>Blog</p>
                <p>Affiliate</p>
                <p>Login</p>
            </div>

            <div class="five">
                <h4>Subscribe</h4>
                <p>Receive Updates, Hot Deals, Discounts Sent Straight In Your Inbox Daily</p>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Eum, Debitis.</p>
                <p>Receive Updates, Hot Deals, Discounts Sent Straight In Your Inbox Daily</p>
            </div>

        </div>
    </section>

    <div class="end-text">
        <p>Copyright @2024. All Rights Reserved. Designd By KingKong Group</p>
    </div>

    <script src="{{ asset('customer/js/java.js') }}"></script>
</body>
</html>
