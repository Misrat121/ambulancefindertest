<header class="site-navbar site-navbar-target" role="banner">
<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light" id="ftco-navbar">
<div class="container">
  <div class="row align-items-center position-relative">

    <div class="col-3">
      <div class="site-logo">
        <a href="index.html"><strong>AmbulanceFinder</strong></a>
      </div>
    </div>

    <div class="col-9  text-right">
      
      <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

      <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
        <ul class="site-menu main-menu js-clone-nav ml-auto ">
          <li class="active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
          <li><a href="{{route('about')}}" class="nav-link">About</a></li>
          
          @if(auth()->user())
                        <a class="nav-item nav-link" href="{{route('user.logout')}}">Logout</a>
                        <a class="nav-item nav-link" href="{{route('passenger')}}">{{auth()->user()->name}}</a>
                       
          
          
          @else
          <li class="has-children">
                        <a href="job-listings.html">Signup</a>
                        <ul class="dropdown">
                            <li><a href="{{route('user.signup')}}">Patient</a></li>
                            <li><a href="{{route('driver.signup')}}">Driver</a></li>
                        </ul>
                    </li>
                    
          <li><a href="{{route('user.login')}}" class="nav-link">Log in</a></li>
          @endif
          
          <li><a href="contact.html" class="nav-link">Contact Us</a></li>
        </ul>
      </nav>
    </div>
    
  </div>
</div>

</header>
