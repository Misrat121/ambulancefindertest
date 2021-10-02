<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ambulance;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    public function ambulance()
    {
        $ambulanes=Ambulance::all();
        
        $ambulances=Ambulance::get()->take(6);
        return view('frontend.layouts.ambulance',compact('ambulances','ambulanes'));
    }
}
