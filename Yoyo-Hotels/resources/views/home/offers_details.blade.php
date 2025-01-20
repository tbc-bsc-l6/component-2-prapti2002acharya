<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The YoYo Hotels</title>

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


    <style type="text/css">


    nav {
    width: 120%;
    display: flex;
    justify-content: flex-end;
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
        
        <nav class="mainmenu mobile-menu" style="background-color: #6e83fa;">
            <ul>
                <li class="active"><a href="{{url('index')}}">Home</a></li>
                <li><a href="{{url('rooms')}}">Rooms</a></li>
                <li><a href="{{url('about_us')}}">About Us</a></li>
                
                
                <li><a href="{{url('contact')}}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i>+977 9824305625</li>
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
                            <li><i class="fa fa-phone"></i>+977 9824305625</li>
                            <li><i class="fa fa-envelope"></i>theyoyohotels@gmail.com</li>
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
                            <nav class="mainmenu" style="background-color: #6e83fa;">
                                <ul>
                                    <li><a href="{{url('index')}}">Home</a></li>
                                    <li class="active"><a href="{{url('rooms')}}">Rooms</a></li>
                                    <li><a href="{{url('view_offers')}}">Offers</a></li>
                                    <li><a href="{{url('about_us')}}">About Us</a></li> 
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
                        <h2>Our Offers</h2>
                        <div class="bt-option">
                            <a href="{{url('index')}}">Home</a>
                            <span>Offers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    @foreach($data as $data)
    <div class="col-md-4">
        <div class="image-container">
            <figure><img style="height: 600px;" width="1000px;" src="/offers/{{$data->image}}" alt=""></figure><br><br><br>
        </div>

    </div>
    @endforeach
    </div>
    <!-- Breadcrumb Section End -->

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