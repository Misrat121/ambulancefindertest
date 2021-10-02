@extends('backend.master')
@section('content')
<h1>Location List</h1>



<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    <i class="bi bi-alarm"></i>
    Create New Location
</button>

<table class="table">
  <thead>
    <tr class="table-danger">
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>   
    </tr>
  </thead>
  <tbody>
       
        {{--@dd($locations)--}}
        @foreach($locations as $location)
        <tr>
            <td  class="table-success">{{$loop->iteration}}</td>
            <td  class="table-success">{{$location->name}}</td>
            </tr>
        @endforeach

</table>

<!-- modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

    
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{route('location.store')}}" method="POST"> 
        @csrf
            
                <form>
                    <div class="form-group">
                        <label for="location_name">Name</label>
                        <input name="location_name" type="text" class="form-control" id="location_name"  placeholder="Enter Location Name">
                   
                    </div> 
                    
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
           
        </div>
    </div>
</div>

@endsection