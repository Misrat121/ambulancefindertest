@extends('frontend.master')
@section('contents')


<div class="hero" style="background-image: url('frontend/images/banner-image.png');">
        
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-10">

    <div class="row mb-5">
      <div class="col-lg-7 intro">
        <h1><strong>Book an ambulance</strong> is within your finger tips.</h1>
     </div>
   </div>
              
  <form class="trip-form" action="{{route('search')}}">
                
    <div class="row align-items-center">
                  
  <div class="mb-3 mb-md-0 col-md-3">
    <select name="" id="" class="custom-select form-control">
    <option value="">Select Type</option>
     <option value="">AC</option>
        <option value="">NON AC</option>
        <option value="">ICU</option>
    </select>
  </div>

   <div class="mb-3 mb-md-0 col-md-3">
    <div class="form-control-wrap">
       <select type="text" id="cf-3" name="from_location" placeholder="Pick up point" class="form-control px-3">
     @foreach($locations as $location)
         <option value="{{$location->id}}">
       {{$location->name}}
      </option>
    @endforeach
    </select>

   </div>
  </div>

    <div class="mb-3 mb-md-0 col-md-3">
      <div class="form-control-wrap">
     <select type="text" id="cf-4" name="to_location" placeholder="Destination" class="form-control px-3">
                      
   @foreach($locations as $location)
          <option value="{{$location->id}}">
       {{$location->name}}
     </option>
   @endforeach
      </select>
    </div>
     </div>
  <div class="mb-3 mb-md-0 col-md-3">
                   
<button Type="submit" class="btn btn-dark">Search Now</button>

   </div>
  </div>
                
 </form>

     </div>
    </div>
  </div>
 </div>
  


  <div class="site-section">
    <div class="container">
      <h2 class="section-heading"><strong>How it works?</strong></h2>
    <p class="mb-5">Easy steps to get you started</p>    

    <div class="row mb-5">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="step">
    <span>1</span>
       <div class="step-inner">
   <span class="number text-primary">01.</span>
  <h3>Select an ambulance</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
      </div>
     </div>
    </div>
  <div class="col-lg-4 mb-4 mb-lg-0">
    <div class="step">
      <span>2</span>
   <div class="step-inner">
  <span class="number text-primary">02.</span>
    <h3>Log in</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
    </div>
  </div>
</div>

<div class="col-lg-4 mb-4 mb-lg-0">
  <div class="step">
    <span>3</span>
      <div class="step-inner">
  <span class="number text-primary">03.</span>
   <h3>Payment</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
      </div>
    </div>
  </div>
</div>
         
  </div>
</div>
</div>
      
<div class="site-section">
  <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-7 text-center order-lg-2">
  <div class="img-wrap-1 mb-5">
<img src="frontend/images/unnamed.jpg" alt="Image" class="img-fluid">
  </div>
</div>
<div class="col-lg-4 ml-auto order-lg-1">
<h3 class="mb-4 section-heading"><strong>You can easily avail our promo for renting an ambulance.</strong></h3>
<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, explicabo iste a labore id est quas, doloremque veritatis! Provident odit pariatur dolorem quisquam, voluptatibus voluptates optio accusamus, vel quasi quidem!</p>
              
              
    </div>
     </div>
   </div>
  </div>

      

<div class="site-section bg-light">
 
   
        

      
          </div>


        </div>
      </div>
    </div>

    

    <div class="site-section bg-primary py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-4 mb-md-0">
            <h2 class="mb-0 text-white">What are you waiting for?</h2>
            <p class="mb-0 opa-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
          </div>
          <div class="col-lg-5 text-md-right">
            <a href="#" class="btn btn-primary btn-white">Rent an ambulance now</a>
          </div>
        </div>
      </div>
    </div>


@endsection