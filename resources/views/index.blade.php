<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('customer/css/styletrangchu.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Trang chủ</title>
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
    
    <section class="main-home">
        <div class="main-text">
            <h5>Bộ sưu tập mùa đông</h5>
            <h1>Bộ sưu tập <br> Mới 2024</h1> 
            <p>Xu hướng thời trang</p>
            <a href="#" class="main-btn">Mua ngay <i class="bi bi-arrow-bar-right"></i></a>
        </div> 

        
        <div class="down-arrow">
            <a href="#trending" class="down"><i class="bi bi-arrow-down-short"></i></a>
        </div>
    </section>

    
    <section class="trending-product" id="trending"> 
        <div class="center-text">
            <h2>Our Trending <span>Products</span></h2>
        </div>
        <div class="products">
            <div class="row">
                <img src="{{ asset('customer/img/1.jpg') }}" alt=""> 
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <div class="ratting">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="price">
                    <h4>Half Running Set</h4>
                    <p>$99 - $129</p>
                </div>
            </div>
            
            <div class="row">
                <img src="{{ asset('customer/img/1.jpg') }}" alt=""> 
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <div class="ratting">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="price">
                    <h4>Half Running Set</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('customer/img/1.jpg') }}" alt=""> 
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <div class="ratting">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="price">
                    <h4>Half Running Set</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('customer/img/1.jpg') }}" alt=""> 
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <div class="ratting">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="price">
                    <h4>Half Running Set</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('customer/img/1.jpg') }}" alt=""> 
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <div class="ratting">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="price">
                    <h4>Half Running Set</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('customer/img/1.jpg') }}" alt=""> 
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <div class="ratting">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="price">
                    <h4>Half Running Set</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('customer/img/1.jpg') }}" alt=""> 
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <div class="ratting">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="price">
                    <h4>Half Running Set</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ asset('customer/img/1.jpg') }}" alt=""> 
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <div class="ratting">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="price">
                    <h4>Half Running Set</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

        </div>    

    </section>

    
<!-- Client-Review-section -->
    <section class="client-reviews"> 
        <div class="reviews">
            <h3>Client Reviews</h3>
            <img src="avt.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
            <h2> Mark Jevenue </h2>
            <p>CEO of Addle</p> 
        </div>
    </section>


<!-- update-news-section --> 
    <section class="Update-news"> 
        <div class="up-center-text">
            <h2>New Updates</h2>
        </div>
        <div class="update-cart">
            <div class="cart">
                <img src="{{ asset('customer/img/bl-1.png') }}" alt="">
                <h5>26 jan 2022</h5>
                <h4>Let's Start bring sale on this summer vacation.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                <h6>Continue Reading..</h6>
            </div>

            <div class="cart">
                <img src="{{ asset('customer/img/bl-1.png') }}" alt="">
                <h5>26 jan 2022</h5>
                <h4>Let's Start bring sale on this summer vacation.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                <h6>Continue Reading..</h6>
            </div>

            <div class="cart">
                <img src="{{ asset('customer/img/bl-1.png') }}" alt="">
                <h5>26 jan 2022</h5>
                <h4>Let's Start bring sale on this summer vacation.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                <h6>Continue Reading..</h6>
            </div>
        </div>
    </section>

    
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