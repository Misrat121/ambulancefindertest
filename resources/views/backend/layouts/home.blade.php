@extends('backend.master')

@section('content')

<div class="row" style="margin-top: 30px;">
        <div class="col-md-3" style="background-color: darkcyan; padding: 10px; margin-right: 20px">
            <h1>Total Ambulance</h1>
            <p><h4>{{$ambulance_count}}</h4></p>
        </div>
        <div class="col-md-3" style="background-color: cornflowerblue; padding: 10px; margin-right: 20px">
            <h1>Total User</h1>
            <p><h4>{{$user_count}}</h4></p>
        </div>
        

    </div>

@endsection