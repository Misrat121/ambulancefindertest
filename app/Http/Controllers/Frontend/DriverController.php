<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request as SendRequest;

class DriverController extends Controller
{
    public function driver()
    {
      if(auth()->user()->role == 'driver'){

        $request=SendRequest::with('ambulance','user','fromLocation')->orderBy('ambulance_id','desc')->get();
      

        return view('frontend.layouts.driver',compact('request'));
      }
      
    }
}
