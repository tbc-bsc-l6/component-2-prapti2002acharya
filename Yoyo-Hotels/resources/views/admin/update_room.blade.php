<!DOCTYPE html>
<html lang="en">

<head>

<base href="/public">

  @include('admin.css')

  <style type="text/css">

  label{
    display: inline-block;
    width: 200px;
    margin-bottom: 5px;
    
  }

  .form-group{
    padding-top: 30px;
  }

  form {
  display: flex;
  flex-wrap: wrap;
  margin: 2rem auto;
  width: 500px; 
  padding: 1rem;
}

input[type="file"] {
  display: inline-block;
    width: 200px;
    margin-bottom: 5px;
}



.btn{
  background-color: #14a7fd; /* green background */
  color: white; /* white text */
  padding: 12px 23px; /* some padding */
  border: none; /* remove default border */
  border-radius: 5px; /* rounded corners */
  cursor: pointer; /* make it look like a clickable button */
  margin-top: 1rem; /* some space after the form fields */
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
      
    <div class="form-container">
    <form  action="{{url('edit_room',$data->id)}}" method="POST" enctype="multipart/form-data">

      @csrf
        <div class="form-group">
            <label for="title">Room Title:</label>
            <input type="text" id="title" name="title" value="{{$data->room_title}}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description"  required>{{$data->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="{{$data->price}}" required>
        </div>

        <div class="form-group">
          <label for="price">Size:</label>
          <input type="text" id="size" name="size" value="{{$data->size}}" required>
      </div>

      <div class="form-group">
        <label for="price">Capacity:</label>
        <input type="text" id="capacity" name="capacity" value="{{$data->capacity}}" required>
    </div>

    <div class="form-group">
      <label for="price">Services:</label>
      <input type="text" id="services" name="services" value="{{$data->services}}" required>
  </div>

        <div class="form-group">
            <label for="roomType">Room Type:</label>
            <select id="roomType" name="roomType" required>

                <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>

                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Suite">Suite</option>
            </select>
        </div>

        <div class="form-group">
            <label for="image">Current Image:</label>
            <img style="width:100; " src="/room/{{$data->image}}" alt="">
        </div>

        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <div class="btn">
        <button type="submit">Update Room</button>
        </div>
    </form>
  </div>
    
   

    
 
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