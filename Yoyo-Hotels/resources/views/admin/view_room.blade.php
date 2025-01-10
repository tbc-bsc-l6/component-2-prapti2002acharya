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
        <th class="th_deg">Room Title</th>
        <th class="th_deg">Description</th>
        <th class="th_deg">Price</th>
        <th class="th_deg">Room Type</th>
        <th class="th_deg">Size</th>
        <th class="th_deg">Capacity</th>
        <th class="th_deg">Services</th>
        <th class="th_deg">Image</th>
        <th class="th_deg">Delete</th>
        <th class="th_deg">Update</th>
      </tr>

      @foreach ($data as $data)
          
      <tr>
        <td>{{$data->room_title}}</td>
        <td>{!! Str::limit($data->description,250) !!}</td>
        <td>{{$data->price}}</td>
        <td>{{$data->room_type}}</td>
        <td>{{$data->size}}</td>
        <td>{{$data->capacity}}</td>
        <td>{{$data->services}}</td>
        

        <td>
          <img width="200" src="room/{{$data->image}}">
        </td>

        <td>
          <a onclick="return confirm('Are you sure to delete this?');"  href="{{url('room_delete', $data->id)}}" class="btn btn-danger btn-sm">Delete</a>
        </td>

        <td>
          <a href="{{url('room_update', $data->id)}}" class="btn btn-warning btn-sm">Update</a>
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