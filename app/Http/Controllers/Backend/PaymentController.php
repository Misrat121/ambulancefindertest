<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request as SendRequest;

class paymentcontroller extends Controller
{
    public function payment()
    {
        $request=SendRequest::with('ambulance','user')->orderBy('ambulance_id','desc')->get();

        return view('backend.layouts.requests.payment',compact('request'));
    }
}
