<?php

namespace App\Http\Controllers\Backend;
use App\Models\Ambulance;
use App\Models\User;
use App\Models\Location;
use App\Models\RegisteredDriver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    public function list()
    {
        $ambulances=Ambulance::all();
        //dd($ambulances->all());
        $locations=Location::orderBy('id','desc')->toBase()->get();
        return view('backend.layouts.ambulances.list',compact('ambulances','locations'));
    }
    public function delete($id)
    {
//        Product::destroy($id);
        $ambulances=Ambulance::find($id);
        if( $ambulances)
        {
            $ambulances->delete();
            return redirect()->back()->with('message','Ambulance Deleted successfully.');
        }
        return redirect()->back()->with('message','No ambulance found to delete.');
    }

    public function store(Request $request)
    {

        // dd($request->all());

     //create user

    $user= User::create([
        'name'=>$request->driver_name,
        'mobile'=>$request->phone_number,
        'email'=>$request->driver_email,
        'role'=>"driver",
        'password'=>bcrypt("123456"),
     ]);
     
//create ambulance
     Ambulance::create([
        'owner_name'=>$request->owner_name,
        'contact_number'=>$request->contact_number,
         'owner_address'=>$request->owner_address,
         'vehicle_number'=>$request->vehicle_number,
         'type'=>$request->type,
         'oxygen'=>$request->oxygen,
         'icu'=>$request->icu,
         'location_id'=>$request->location_id,
         'driver_name'=>$request->driver_name,
         'driver_email'=>$request->driver_email,
         'driving_license'=>$request->driving_license,
         'phone_number'=>$request->phone_number,
         'nid_number'=>$request->nid_number,
         'address'=>$request->address,
         'user_id'=>$user->id,

  ]);
 
//   create registereddriver

    $registereddrivers= RegisteredDriver::create([
    'name'=>$request->driver_name,
    'driving_license'=>$request->driving_license,
    'contact_number'=>$request->contact_number,
    'email'=>$request->driver_email,
    'address'=>$request->address,
    
 
]); 
    return redirect()->back();
}
    

}