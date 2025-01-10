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

    <center>
      <h1 style="padding-top: 10px">Mail Send To {{$data->name}}</h1>
    </center>

    <div class="form-container">
      <form  action="{{url('mail', $data->id)}}" method="POST" enctype="">
  
        @csrf
          <div class="form-group">
              <label for="title">Greeting:</label>
              <input type="text" id="title" name="greeting" required>
          </div>
          <div class="form-group">
              <label for="description">Mail Body:</label>
              <textarea id="description" name="body" required></textarea>
          </div>
          <div class="form-group">
              <label for="price">Action Text:</label>
              <input type="text" id="price" name="action_text" required>
          </div>
  
          <div class="form-group">
            <label for="price">Action Url:</label>
            <input type="text" id="size" name="action_url" required>
        </div>
  
        <div class="form-group">
          <label for="price">End Line:</label>
          <input type="text" id="capacity" name="end" required>
      </div>
          
          <div class="btn">
          <button type="submit">Send Mail</button>
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