@extends('backend.master')
@section('content')
<h1>Category</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    <i class="bi bi-alarm"></i>
    Create Category
</button>


<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        
    </tr>
    </thead>
   
</table>

@endsection