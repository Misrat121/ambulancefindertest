
<!doctype html>
<html lang="en">

  <head>
    <title>AmbulanceFinder &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

  </head>

  <body>

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      @include('frontend.partials.header')

    @yield('contents')

    @include('frontend.partials.footer')
     
    </div>

    <script src="{{url('/frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('/frontend/js/popper.min.js')}}"></script>
    <script src="{{url('/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('/frontend/js/jquery.sticky.js')}}"></script>
    <script src="{{url('/frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('/frontend/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{url('/frontend/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{url('/frontend/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{url('/frontend/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('/frontend/js/aos.js')}}"></script>

    <script src="{{url('/frontend/js/main.js')}}"></script>

  </body>

</html>

