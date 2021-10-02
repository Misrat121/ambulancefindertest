<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request as SendRequest;

class RequestsController extends Controller
{
    public function manage()
    {
        $request=SendRequest::with('ambulance','user')->orderBy('ambulance_id','desc')->get();

        return view('backend.layouts.requests.manage',compact('request'));
    }
}
