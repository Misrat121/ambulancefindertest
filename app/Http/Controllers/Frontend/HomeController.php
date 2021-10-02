<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Ambulance;
use App\Models\Request as SendRequest;

class HomeController extends Controller
{
    public function home()
    {

        $locations=Location::orderBy('id','desc')->toBase()->get();

       
        return view('frontend.layouts.home',compact('locations'));
    }


    public function search(Request $request)
    {
        $from_location = $request->from_location;
        $to_location = $request->to_location;
    
        $ambulance = Ambulance::whereIn('location_id',[$from_location,$to_location])->get();

        return view('frontend.layouts.ambulanceList',compact('ambulance','from_location','to_location'));
    }

    public function sendrequest(Request $request)
    {
        $sendRequest = SendRequest::where('ambulance_id',$request->ambulance_id)->first();
        if($sendRequest){
            return redirect()->back()->with('message','This ride is booked.');
        }else{
            SendRequest::create([
                'user_id' => auth()->user()->id,
                'from_location' => $request->from_location,
                'to_location' => $request->to_location,
                'ambulance_id' => $request->ambulance_id,
                'status' => 'pending'
            ]);
            
            return redirect()->back();
        }
        // dd($request->all());
        

        
    }

    public function acceptRequest($id)
    {
        $request=SendRequest::find($id);
        $request->update([
            'status'=>'accepted'
        ]);

        return redirect()->back();

    }

    public function passenger()
    {
        if(auth()->user()->role=='driver')
        {
            $request = SendRequest::all();
        }else
        {
            $request = SendRequest::where('user_id',auth()->user()->id)->get();
        }
      
        return view('frontend.layouts.passenger',compact('request'));
    }
public function costUpdate(Request $request, $id)
{
    $ambulances=Ambulance::find($id);
    $ambulances->update([
        'cost'=>$request->cost
    ]);
    return redirect()->back();
}

public function completeRide($id)

{
    
    $request=SendRequest::find($id);
    // dd($request);
    $request->update([
        'is_complete'=>'completed'
    ]);

    return redirect()->back()->with('message','Ride is completed.');

}


}
