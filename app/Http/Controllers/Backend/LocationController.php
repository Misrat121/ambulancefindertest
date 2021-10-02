<?php

namespace App\Http\Controllers\Backend;
use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function list()
    {
        $locations=Location::all();
        return view('backend.layouts.location.list',compact('locations'));
    }

    public function store(Request $request)
    {
    $locations= Location::create([

        'name'=>$request->location_name,
    ]); 
    return redirect()->back();

   }

}
    
