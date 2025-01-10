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
  
   
  
    .btn-warning{
      color: rgb(255, 255, 255);
      background-color:green;
      size: 50;
      
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
          <th class="th_deg">Room id</th>
          <th class="th_deg">Name</th>
          <th class="th_deg">Email</th>
          <th class="th_deg">Review</th>
          <th class="th_deg">Delete Review</th>
          
        </tr>

      
        @foreach ($data as $data)  
        <tr>
          
          <td>{{$data->room_id}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->review}}</td>
          <td>
            <a class="btn btn-danger" href="{{url('review_delete', $data->id)}}">Delete</a>
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