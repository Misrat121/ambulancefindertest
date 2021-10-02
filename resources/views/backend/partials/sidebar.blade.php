<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">

   <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">
      <span data-feather="home"></span>
      {{auth()->user()->name}}
    </a>
    </li>

    <li class="nav-item">
  <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
    <span data-feather="home"></span>
     Dashboard
      </a>
    </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('ambulances.list')}}">
    <i class="fa fa-ambulance" aria-hidden="true"></i>
  
      Ambulances
      </a>
    </li>
         
 

    <li class="nav-item">
      <a class="nav-link" href="{{route('location.list')}}">
      <i class="fa fa-location-arrow"></i>
      Location
      </a>
    </li>

   <li class="nav-item">
   <a class="nav-link" href="{{route('users.list')}}">
   <i class='fas fa-user-alt'></i>
      Users
      </a>
      </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('patient.list')}}">
    <i class='fas fa-user-alt'></i>
      Patient
      </a>
    </li>
     
     <li class="nav-item">
      <a class="nav-link" href="{{route('requests.manage')}}">
       <span data-feather="bar-chart-2"></span>
        Requests
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('payment')}}">
       <span data-feather="bar-chart-2"></span>
       Payment
        </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('report')}}">
      <i class="material-icons"></i>
        Reports
        </a>
    </li>
  </ul>
      </div>
</nav>