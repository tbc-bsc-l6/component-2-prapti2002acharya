

<section class="hp-room-section">


        
    
    <div class="container-fluid">
        <div class="hp-room-items">
            
            <div class="row">
                @foreach ($room as $rooms)
                <div class="col-lg-3">
                    <div class="hp-room-item set-bg" data-setbg="room/{{$rooms->image}}">
                        <div class="hr-text">
                            <h3>{{$rooms->room_title}}</h3>
                            <h2>Rs.{{$rooms->price}}<span>/Pernight</span></h2>
                            <table>
                                <tbody>
                                    
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>{{$rooms->room_type}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>{{$rooms->size}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>{{$rooms->capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>{{$rooms->services}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <a href="{{url('room_details',$rooms->id)}}" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
                
                @endforeach
                
            </div>
        </div>
    </div>
 
    
</section>
