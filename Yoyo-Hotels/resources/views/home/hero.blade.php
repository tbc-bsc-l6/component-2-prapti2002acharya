
<style>
    .button-link {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        color: white;
        background-color: #dfa974;
        border: none;
        border-radius: 4px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
    }

    .button-link:hover {
        background-color: #dfa974;
    }
    #hero_image{
        filter: brightness(90%);
    }
</style>

<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-text">
                    <h1>The YoYo Hotels</h1>
                    <p>Here are the best hotel booking sites, including recommendations for international
                        travel and for finding low-priced hotel rooms.</p>
                    <a href="{{url('about_us')}}" class="primary-btn">Discover Now</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                <div class="booking-form">
                    <h3 style="font-size: 22px;">Booking Your Hotel</h3>
                    <form action="{{ route('search') }}" method="GET">
                        @csrf
                        <div class="check-date">
                            <label for="date-in">Check In:</label>
                            <input type="date" class="check_in" id="date-in">
                           
                        </div>
                        <div class="check-date">
                            <label for="date-out">Check Out:</label>
                            <input type="date" class="check_out" id="date-out">
                            
                        </div>
                        <div class="select-option">
                            <label for="guest">Guests:</label>
                            <select id="guest">
                                <option value="1">1 Adults</option>
                                <option value="2">2 Adults</option>
                                <option value="3">3 Adults</option>
                                <option value="4">4 Adults</option>
                                <option value="5">5 Adults</option>
                            </select>
                        </div>
                       
                        <div class="select-option">
                            <label for="room">Room:</label>
                            <select id="room">
                                @foreach($room as $rooms)
                                <option value="">{{$rooms->room_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <a class="button-link" href="{{url('available_room')}}">Check Availability</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div id="hero_image" class="hs-item set-bg" data-setbg="img/hero/banner3.jpg"></div>
        <div id="hero_image" class="hs-item set-bg" data-setbg="img/hero/banner1.jpg"></div>
        <div id="hero_image" class="hs-item set-bg" data-setbg="img/hero/banner2.jpg"></div>
    </div>
</section>