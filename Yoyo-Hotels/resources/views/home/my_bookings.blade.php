<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('home.css')

    <style type="text/css">

        .table_deg{
          border: 2px solid black;
          margin: auto;
          width: 70%;
          text-align: center;
          margin-top: 0px;
      
        }
      
        .th_deg{
          background-color: #dfa974;
          padding: 15px;
        }
      
        tr{
          border: 3px solid #dfa974;
        }
      
        td{
          padding: 10px;
        }
    
        .rejecte{
          color: black;
          background-color:yellow;
        }
    
        .approved{
          color: white;
          background-color:green;
        
        }
    
        
        .waiting{
          color: black;
          
        }
        
        .no-bookings-message {
            color: red;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
      
        </style>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Offcanvas Menu Section Begin -->
    @include('home.menu')
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    @include('home.header')
    <!-- Header End -->

    @if($book->isEmpty())
        <p class="no-bookings-message">No bookings available.</p>
    @else
    <table class="table_deg">
        <tr>
            <th class="th_deg">User ID</th>
            <th class="th_deg">Room ID</th>
            <th class="th_deg">Email</th>
            <th class="th_deg">Phone</th>
            <th class="th_deg">Arrival date</th>
            <th class="th_deg">Leaving date</th>
            <th class="th_deg">Status</th>
            <th class="th_deg">Room title</th>
            <th class="th_deg">Total Price</th>
            <th class="th_deg">Cancel Booking</th>
          
        </tr>

      
        @foreach($book as $booking)
        <tr>
          
          <td>{{$booking->user_id}}</td>
          <td>{{$booking->room_id}}</td>
          <td>{{$booking->email}}</td>
          <td>{{$booking->phone}}</td>
          <td>{{$booking->start_date}}</td>
          <td>{{$booking->end_date}}</td>
          <td>{{$booking->status}}</td>
          <td>{{$booking->room_title}}</td>
          <td>{{$booking->total_price}}</td>
          <td>
            <a class="btn btn-danger" href="{{url('cancel_booking',$booking->id)}}">Cancel</a>
          </td>
          

        </tr>
  
      @endforeach
  
      </table>
      @endif
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