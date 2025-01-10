<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

    <center>
      <div class="row">
      @foreach($offer as $offer)

      <div class="col-md-4">
      <img style="height: 450px; width=500px;" src="/offers/{{$offer->image}}">
      <a class="btn btn-danger" href="{{url('delete_image',$offer->id)}}">Delete Offer</a>
      </div>

      @endforeach
     </div>


        <form action="{{url('add_offers')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="padding: 50px;">
            <label style="font-weight: bold;">Upload Image: </label>
            <input type="file" name="image">
           
                <input class="btn btn-primary" type="submit" value="Add Image">
            </div>
        </form>
    </center>
 
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