<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YoYo Hotels</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <style>
        nav {
    width: 120%;
    display: flex;
    justify-content: flex-end;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 50px; /* Adjust gap as needed */
}

    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area" style="background-color: #6e83fa;">
            <div class="language-option">
                <img src="img/flag.jpg" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu" style="background-color: #6e83fa;">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
           
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> +977 9824305625</li>
            <li><i class="fa fa-envelope"></i> info.yoyohotels@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal" style="background-color: #6e83fa;">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> +977 9824305625</li>
                            <li><i class="fa fa-envelope"></i> theyoyohotels@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <a href="#" class="bk-btn" style="background-color: blue;">Booking Now</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="{{url('index')}}">Home</a></li>
                                    <li><a href="{{url('rooms')}}">Rooms</a></li>
                                    <li><a href="{{url('view_offers')}}">Offers</a></li>
                                    <li class="active"><a href="{{url('about_us')}}">About Us</a></li>
                                  
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                    <li><a href="{{url('my_bookings')}}">My Bookings</a></li>

                                    <li>
                                    <x-app-layout>
                                        
                                    </x-app-layout>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>About Us</h2>
                        <div class="bt-option">
                            <a href="{{url('index')}}">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Us Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ap-title">
                            <h2>Welcome To The YoYo Hotels.</h2>
                            <p>The YoYo Hotel, is a 3-star property, tucked away in illam only 24 km from Biratamode. It welcomes guests with a spacious outdoor pool and complimentary WiFi access. Rooms feature large windows and fully carpeted flooring.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">
                            <li><i class="icon_check"></i> 5% Off On Accommodation.</li>
                            <li><i class="icon_check"></i> Complimentary Daily Breakfast</li>
                            <li><i class="icon_check"></i> 3 Pcs Laundry Per Day</li>
                            <li><i class="icon_check"></i> Free Wifi.</li>
                            <li><i class="icon_check"></i> Discount 10% On F&B</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about-page-services">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p1.jpg">
                            <div class="api-text">
                                <h3>Restaurants Services</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p2.jpg">
                            <div class="api-text">
                                <h3>Travel & Camping</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p3.jpg">
                            <div class="api-text">
                                <h3>Event & Party</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->

    <!-- Video Section Begin -->
    <section class="video-section set-bg" data-setbg="img/video-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Discover Our Hotel & Services.</h2>
                        {{-- <p>It S Hurricane Season But We Are Visiting Hilton Head Island</p> --}}
                        <a href="https://www.youtube.com/watch?v=9ba5JThUeVg" class="play-btn video-popup"><img
                                src="img/play.png" alt="play button"></a>

                               
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Gallery</span>
                        <h2>Discover Our Work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-item set-bg" data-setbg="img/gallery/gallery-1.jpg">
                        <div class="gi-text">
                            <h3>Room Luxury</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                                <div class="gi-text">
                                    <h3>Room Luxury</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
                                <div class="gi-text">
                                    <h3>Room Luxury</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-item large-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                        <div class="gi-text">
                            <h3>Room Luxury</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Footer Section Begin -->
    @include('home.footer')
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>