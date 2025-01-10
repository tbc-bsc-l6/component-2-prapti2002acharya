<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">

    .table_deg{
      border: 2px solid black;
      margin: auto;
      width: 100%;
      text-align: center;
      margin-top: 0px;
  
    }
  
    .th_deg{
      background-color: #2379f9;
      padding: 15px;
    }
  
    tr{
      border: 3px solid lightblue;
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
  
  
    </style>

</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">

  
  <!-- ! Sidebar -->
  @include('admin.sidebar')
  <!-- ! Sidebar -->
  
  <div class="main-wrapper">
    <!-- ! Main nav -->
    @include('admin.navigation_hader')
    <!-- ! Main nav -->

    <table class="table_deg">
        <tr>
          <th class="th_deg">Room ID</th>
          <th class="th_deg">Customer name</th>
          <th class="th_deg">Email</th>
          <th class="th_deg">Phone</th>
          <th class="th_deg">Arrival date</th>
          <th class="th_deg">Leaving date</th>
          <th class="th_deg">Status</th>
          <th class="th_deg">Room title</th>
          <th class="th_deg">Total Price</th>
          <th class="th_deg">Image</th>
          <th class="th_deg">Delete</th>
          <th class="th_deg">Status update</th>
        </tr>
  
       
        @foreach($data as $data)    
        <tr>
          <td>{{$data->room_id}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->phone}}</td>
          <td>{{$data->start_date}}</td>
          <td>{{$data->end_date}}</td>
          <td>
            @if($data->status == 'Approved')
            <span class="approved">Approved</span>
            @endif

            @if($data->status == 'Rejected')
            <span class="rejecte">Rejected</span>
            @endif

            @if($data->status == 'waiting')
            <span class="waiting">Waiting</span>
            @endif

          </td>
          <td>{{$data->room->room_title}}</td>
          <td>{{$data->total_price}}</td>
          <td>
           <img width="150" src="/room/{{$data->room->image}}"> 
        </td>
           <td>
            <a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger  btn-sm" href="{{url('delete_booking',$data->id)}}">Delete</a>
           </td>

           <td>

            <span>
            <a class="btn btn-success btn-sm"  style="margin-bottom: 10px;" href="{{url('approve_book',$data->id)}}">Approve</a>
          </span>
            <a class="btn btn-warning btn-sm" href="{{url('reject_book',$data->id)}}">Rejected</a>
           </td>
  
        </tr>
        @endforeach
  
       
  
      </table>
  

  </div>
</div>
<!-- Chart library -->
<script src="admin/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="admin/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="admin/js/script.js"></script>
</body>

</html>