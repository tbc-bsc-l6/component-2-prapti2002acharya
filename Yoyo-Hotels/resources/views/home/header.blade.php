<style>
.btn-success{
    background-color: #dfa974;
    border: none;
}

.btn-primary{
    background-color: #dfa974;
    border: none;
}

.btn-success:hover{
    background-color: rgb(233, 223, 223);
}

.btn-primary:hover{
    background-color: rgb(233, 223, 223);
    
}

.btn-success:active{
    background-color: rgb(255, 190, 50);
}


</style>


<header class="header-section" style="background-color: #6e83fa;">
    
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tn-left">
                        <li><i class="fa fa-phone"></i> +977 9824305625</li>
                        <li><i class="fa fa-envelope"></i>thegyoyohotels@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tn-right">
                        <div class="top-social">
                        </div>
                        <a href="{{url('rooms')}}" class="bk-btn" style="background-color: blue;">Booking Now</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href=".home/index.html">
                            <img src="" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-10">
                    <div class="nav-menu" style="background-color: #6e83fa;">
                        <nav class="mainmenu">
                            <ul>
                                <li class="active"><a href="{{url('index')}}">Home</a></li>
                                <li><a href="{{url('rooms')}}">Rooms</a></li>
                                <li><a href="{{url('view_offers')}}">Offers</a></li>
                                <li><a href="{{url('about_us')}}">About Us</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>

                                
                                @if (Route::has('login'))
                                

                                
                                    @auth

                                    <li><a href="{{url('my_bookings')}}">My Bookings</a></li>

                                    <li>
                                    <x-app-layout>
                                        
                                    </x-app-layout>
                                    </li>
                                
                                    @else

                                   
                                       
                                <li><a class="btn btn-success" href="{{url('login')}}" style="padding:10px 24px;" style="background-color: #f9d55e;" >Login</a></li>
    
                                        @if (Route::has('register'))

                                        <li><a class="btn btn-primary" href="{{url('register')}}"  style="padding:10px 24px;" >Resgister</a></li>
                                        
                                        @endif
                                    @endauth
                                
                                
                            @endif
                        

                            </ul>
                        </nav>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</header>