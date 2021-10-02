@extends('backend.master')
@section('content')
<h1>Ambulances</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    <i class="bi bi-alarm"></i>
    Add New Ambulance
</button>

@if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif
<table class="table">
    <thead>
        <tr  class="table-success">
        
            <th scope="col">ID</th>
            <th scope="col">Owner Name</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Owner Address</th>
            <th scope="col">Vehicle Number</th>
            <th scope="col">Type</th>
            <th scope="col">Oxygen</th>
            <th scope="col">ICU</th>
            <th scope="col">Location</th>
            <th scope="col">Driver Name</th>
            <th scope="col">Driver Email</th>
            <th scope="col">Driving License</th>
            <th scope="col">Phone Number</th>
            <th scope="col">NID Number</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
       
        {{--@dd($ambulances)--}}
        @foreach($ambulances as $ambulance)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$ambulance->owner_name}}</td>
            <td>{{$ambulance->contact_number}}</td>
            <td>{{$ambulance->owner_address}}</td>
            <td>{{$ambulance->vehicle_number}}</td>
            <td>{{$ambulance->type}}</td>
            <td>{{$ambulance->oxygen}}</td>
            <td>{{$ambulance->icu}}</td>
            <td>{{$ambulance->location->name}}</td>
            <td>{{$ambulance->driver_name}}</td>
            <td>{{$ambulance->driver_email}}</td>
            <td>{{$ambulance->driving_license}}</td>
            <td>{{$ambulance->phone_number}}</td>
            <td>{{$ambulance->nid_number}}</td>
            <td>{{$ambulance->address}}</td>
            <td>
                <a onclick="return confirm('Are you sure you want to delete this service?');"href="{{route('ambulances.delete',$ambulance->id)}}" class="btn btn-danger">Delete</a>
                <a href="#" class="btn btn-info">Edit</a>
              
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Name</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
         </button>
    </div>

        <div class="modal-body">
    <form action="{{route('ambulances.store')}}" method="POST">
     @csrf

     <!-- test -->

     <div class="modal-header">
      <h6 class="modal-title" id="Owner">Name</h6>
        </div>

    <div class="mb-3">
         <label for="owner_name" class="form-label">Owner Name</label>
    <input name="owner_name" type="text" class="form-control" id="Oowner_name" placeholder="Owner_Name">
        </div>

    <div class="mb-3">
         <label for="contact_number" class="form-label">Contact Number</label>
     <input name="contact_number" type="text" class="form-control" id="contact_number" placeholder="Contact_Number">
        </div>

    <div class="mb-3">
        <label for="owner_address" class="form-label">Owner Address</label>
    <input name="owner_address" type="text" class="form-control" id="Owner" placeholder="Owner_Address">
        </div>
         <!-- test end-->

     <!-- test2 -->

     <div class="modal-header">
 <h6 class="modal-title" id="Owner">Name</h6>
    </div>

     <p>Type</p>
    <input type="radio" id="AC" name="type" value="AC">
    <label for="ac">AC</label><br>
    <input type="radio" id="Non_ac" name="type" value="Non AC">
    <label for="Non_ac">Non Ac</label><br>

    <br>  

    <p>Oxygen</p>
    <input type="radio" id="yes" name="oxygen" value="Yes">
    <label for="yes">Yes</label><br>
    <input type="radio" id="no" name="oxygen" value="No">
    <label for="no">NO</label><br>  

    <br>

                        
     <p>ICU</p>
    <input type="radio" id="test1" name="icu" value="Yes">
    <label for="test1">Yes</label><br>
    <input type="radio" id="test2" name="icu" value="No">
    <label for="test2">NO</label><br> 

                      

    <div class="mb-3">
    <label for="vehicle_number" class="form-label">Vehicle Number</label>
    <input name="vehicle_number" type="text" class="form-control" id="vehicle_number" placeholder="Vehicle_Number">
    </div>

    <div class="mb-3">
    <label for="location" class="form-label">Location</label>
                           
    <select type="text" id="cf-3" placeholder="Location" class="form-control px-3" name="location_id">
                               
    @foreach($locations as $location)
        <option value="{{$location->id}}">
             {{$location->name}}
        </option>

     @endforeach
    </select>
    </div>
    <!-- test2 end -->

     <!-- test3-->

     <div class="modal-header">
    <h6 class="modal-title" id="Owner">Driver Information</h6>
    </div>

     <div class="mb-3">
     <label for="driver_name" class="form-label">Driver Name</label>
     <input name="driver_name" type="text" class="form-control" id="driver_name" placeholder="Driver_Name">
        </div>

    <div class="mb-3">
     <label for="driver_email" class="form-label">Driver Email</label>
    <input name="driver_email" type="text" class="form-control" id="driver_email" placeholder="Driver_Email">
     </div>

      <div class="mb-3">
    <label for="driving_license" class="form-label">Driving Licencse</label>
     <input name="driving_license" type="text" class="form-control" id="driving_license" placeholder="Driving_License">
        </div>
        <div class="mb-3">
    <label for="phone_number" class="form-label">Phone Number</label>
     <input name="phone_number" type="text" class="form-control" id="phone_number" placeholder="Phone_Number">
        </div>

     <div class="mb-3">
 <label for="nid_number" class="form-label">NID Number</label>
    <input name="nid_number" type="text" class="form-control" id="nid_number" placeholder="NID_Number">
     </div>

     <div class="mb-3">
        <label for="address" class="form-label">Address</label>
    <input name="address" type="text" class="form-control" id="address" placeholder="Address">
  </div>
         <!-- test3 end-->

     <button type="submit" class="btn btn-primary">Submit</button>

 </form>
     </div>
     </div>
      </div>
       </div>
@endsection
