<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Request;
use App\Models\Ambulance;
use App\Models\User;
// use Illuminate\Http\Request;

class HomeController extends Controller
{ 
        public function home()
    {
        $title='Dashboard';
        $link= 'Admin/dashboard';
        $ambulance_count=Ambulance::all()->count();
        $user_count=User::all()->count();
        return view('backend.layouts.home',compact('title', 'link','ambulance_count','user_count') );
    }

    public function contact()
    {
        return view('backend.layouts.contact');
    }
   
    public function report()
    {
        $ambulance=Request::with(['user','ambulance'])->get();
//        dd($ambulance);

        return view('backend.layouts.report-data',compact('ambulance'));

    }

   
}
