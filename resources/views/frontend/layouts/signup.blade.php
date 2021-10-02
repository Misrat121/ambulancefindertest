@extends('frontend.master')

@section('contents')


<h2>Please Signup Here..</h2>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

        @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


            
            <form action="{{route('user.signup.store')}}" type="form" method="Post">
                @csrf
           
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input required type="text" class="form-control" id="name" name="user_name" placeholder="Enter your name">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input required name="user_email" placeholder="Enter your email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input required name="user_password" placeholder="Enter your password" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input required name="user_mobile" placeholder="Enter your mobile number" type="text" class="form-control" id="mobile" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

@endsection