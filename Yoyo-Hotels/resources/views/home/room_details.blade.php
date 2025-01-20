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
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN">

    <style type="text/css">
.book{
background-color: #dfa974;
color:white;
}

    </style>

</head>

<body>
    
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    @include('home.header')
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Room Details</h2>
                        <div class="bt-option">
                            <a href="{{url('index')}}">Home</a>
                            <span>Room details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8">
                    <div class="room-details-item">
                       
                        <img src="/room/{{$room->image}}" style="width: 780px; height:570px" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3 style="font-size: 28px;">{{$room->room_title}}</h3>
                              
                            </div>
                            <h2 style="font-size: 22px;">Rs.{{$room->price}}<span style="font-size: 22px;">/Pernight</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>{{$room->size}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>{{$room->capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>{{$room->room_type}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>{{$room->services}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="f-para">{{$room->description}}
                            </p>
                        </div>
                        
                    </div>
                    <div class="rd-reviews">
                        <h4 style="font-size: 22px;">Reviews</h4>
                        
                        <div class="review-item">
                            
                           @if($reviews->isEmpty())
                           <p class="no-bookings-message">No Reviews.</p>

                           @else
                            <div class="ri-text">
                                @foreach($reviews as $review)

                                <span>{{ $review->created_at}}</span>
                               

                                 <div> 
                                <h5>{{ $review->name }}</h5>
                               
                               
                                 <p>{{ $review->review }}</p>
                                </div> 
                                 @endforeach
                                 
                            </div>
                            @endif
                        </div>
                       
                    </div>
                    <div class="review-add">
                        <h4 style="font-size: 22px;">Add Review</h4>
                        <form action="{{url('add_review',$room->id)}}" method="POST" class="ra-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input style="color: black;" type="text" class="name" id="name" name="name" placeholder="Name*"  
                                    @if(Auth::id())
                                    value="{{Auth::user()->name}}">
                                    @endif
                                   
                                </div>
                                <div class="col-lg-6">
                                    <input style="color: black;" type="text" class="email" id="email" name="email" placeholder="Email*"
                                    @if(Auth::id())
                                    value="{{Auth::user()->email}}">
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    
                                    <textarea style="color: black;" class="review" id="review" name="review" placeholder="Your Review"></textarea>
                                    <button type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3 style="font-size: 22px;">Your Reservation</h3>

                        {{-- show the success message --}}
                        <div>
                        @if(@session()->has('message'))

                        <div class="alert alert-success">
                        
                        <button type="button" class="close" data-bs-dismiss="alert">x</button>
                            
                        {{session()->get('message')}}
                        </div>

                        @endif

                        </div>

                        {{-- show the error message --}}
                        <div>
                            @if(@session()->has('messages'))
    
                            <div class="alert alert-danger">
                            
                            <button type="button" class="close" data-bs-dismiss="alert">x</button>
                                
                            {{session()->get('messages')}}
                            </div>
    
                            @endif
    
                            </div>

                            
                                <form action="{{url('add_booking',$room->id)}}" method="POST">

                            @csrf

                            {{-- check out date validate  --}}
                            <div>
                            {{-- @if (session('message'))
                                <div class="alert alert-warning"></div>
                            @endif --}}

                                 @if ($errors->any())
                                    <div class="alert alert-warning">
            
                                 <ul>
                                         @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                         @endforeach
                                </ul>
                                </div>
                            @endif
                        </div>

                            <div class="check-date">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" 
                                @if(Auth::id())
                                value="{{Auth::user()->name}}">
                                @endif
                                
                            </div>

                            <div class="check-date">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email"  
                                @if(Auth::id())
                                value="{{Auth::user()->email}}">
                                @endif
                                
                            </div>

                            <div class="check-date">
                                <label for="email">Phone:</label>
                                <input type="text" name="phone" id="email"  
                                @if(Auth::id())
                                value="{{Auth::user()->phone}}">
                                @endif
                                
                            </div>

                            {{-- <div class="check-date">
                                <label for="date-in">Current city:</label>
                                <input type="text" name="start_date" id="start_date">
                                
                            </div> --}}
                            

                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="date" name="start_date" id="start_date" onchange="calculateTotalPrice()">
                                
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="date" name="end_date" id="end_date" onchange="calculateTotalPrice()">                     
                            
                            </div>

                           
                            <div class="check-date">
                            <label for="date-out">Price Per Night:</label>
                            <input type="text" name="Price_per_day" id="Price_per_day" value="{{$room->price}}"  readonly><br>
                            </div>
                            

                            <div class="check-date">
                                <label for="date-out">Total Price:</label>
                                <input type="text" name="total_price" id="total_price" readonly>
                            </div>
                                
                            
                            

                            <div class="book">
                            <button  type="submit" style="color: white;" >Book Room</button>
                           </div>
                        </form>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                        <script>
                            function calculateTotalPrice() {
                                var startDate = document.getElementById('start_date').value;
                                var endDate = document.getElementById('end_date').value;
                                var pricePerDay = parseFloat(document.getElementById('Price_per_day').value);
                                
                                if (startDate && endDate && !isNaN(pricePerDay)) {
                                    var start = new Date(startDate);
                                    var end = new Date(endDate);
                                    var timeDifference = end - start;
                                    var daysDifference = timeDifference / (1000 * 3600 * 24);
                                    
                                    if (daysDifference > 0) {
                                        var totalPrice = daysDifference * pricePerDay;
                                        document.getElementById('total_price').value = totalPrice.toFixed(2);
                                    } else {
                                        document.getElementById('total_price').value = "0.00";
                                    }
                                } else {
                                    document.getElementById('total_price').value = "0.00";
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->

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
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

 
</body>

</html>