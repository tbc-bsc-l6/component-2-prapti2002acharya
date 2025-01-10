<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('home.css')

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

    <!-- Hero Section Begin -->
    @include('home.hero')
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    @include('home.homeabout')
    <!-- About Us Section End -->

    <!-- Services Section End -->
    @include('home.services')
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    @include('home.homeroom')
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    @include('home.Testimonial')
    <!-- Testimonial Section End -->

    <!-- Blog Section Begin -->
    @include('home.homecontact')
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
   @include('home.footer')
    <!-- Footer Section End -->

    {{-- <script type="text/javascript">
        $(window).scroll(function() {
  sessionStorage.scrolltop = $(this).scrolltop();
});

$(document).ready(function(){
   if(sessionStorage.scrolltop != "undefined"){
      $(window).scrolltop(sessionStorage.scrolltop);
   }
});
    </script> --}}

    
</body>

</html>