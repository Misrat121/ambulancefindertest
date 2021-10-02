@extends('frontend.master')
@section('contents')

<!-- style starts here -->
<style type="text/css" >

body{
    background: #f6f9fc;
    margin-top:20px;}


.bg-light-blue {
    background-color: #e9f7fe !important;
    color: #3184ae;
    padding: 7px 18px;
    border-radius: 4px;
}

.bg-light-green {
    background-color: rgba(40, 167, 69, 0.2) !important;
    padding: 7px 18px;
    border-radius: 4px;
    color: #28a745 !important;
}

.buttons-to-right {
    position: absolute;
    right: 0;
    top: 40%;
}

.btn-gray {
    color: #666;
    background-color: #eee;
    padding: 7px 18px;
    border-radius: 4px;
}

.booking:hover .buttons-to-right .btn-gray {
    opacity: 1;
    transition: .3s;
}

.buttons-to-right .btn-gray {
    opacity: 0;
    transition: .3s;
}

.btn-gray:hover {
    background-color: #36a3f5;
    color: #fff;
}

.booking {
    margin-bottom: 30px;
    border-bottom: 1px solid #eee;
    padding-bottom: 30px;
}

.booking:last-child {
    margin-bottom: 0px;
    border-bottom: none;
    padding-bottom: 0px;
}

@media screen and (max-width: 575px) {
    .buttons-to-right {
        top: 10%;
    }
    .buttons-to-right a {
        display: block;
        margin-bottom: 20px;
    }
    .buttons-to-right a:last-child {
        margin-bottom: 0px;
    }
    .bg-light-blue,
    .bg-light-green,
    .btn-gray {
        padding: 7px;
    }
}

.card {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    border-radius: 4px;
    box-shadow: none;
    border: none;
    padding: 25px;
}
.mb-5, .my-5 {
    margin-bottom: 3rem!important;
}
.msg-img {
    margin-right: 20px;
}
.msg-img img {
    width: 60px;
    border-radius: 50%;
}
img {
    max-width: 100%;
    height: auto;
}
</style>
<!-- style end here -->

<br> <br>
<div class="container">
<div class="row">
    <div class="col-md-12">
    
        <div class="card card-white mb-5">
        <div class="card-heading clearfix border-bottom mb-4">
        <h4 class="card-title">Ambulance Requests</h4>
         </div>
     @foreach($ambulance as $data)
     
     <form  action="{{route('sendrequest')}}" method="get" >
     
    <div class="card-body">
            
        <ul class="list-unstyled">
         <li class="position-relative booking">
        <div class="media">
  <div class="msg-img">
          <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
            </div>
                            
         <div class="media-body">
  <div class="mb-3">
     <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">{{$data->owner_name}}</span>
     </div>

     <input type="hidden" value="{{$data->id}}" name="ambulance_id">
     <input type="hidden" value="{{$from_location}}" name="from_location">
     <input type="hidden" value="{{$to_location}}" name="to_location">
 <button Type="submit" class="btn btn-dark">Send Request</button>
         </div>
    </div>
    </form>
  @endforeach

   </div>
     </div>
      </div>
@endsection