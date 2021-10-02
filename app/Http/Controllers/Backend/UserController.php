<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('backend.layouts.login');
    }


    public function loginPost(Request $request)
    {
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        {
            if(auth()->user()->role=='admin')
            {
                return redirect()->route('dashboard');
            }
           else
            {
                Auth::logout();
                return redirect()->route('user.signup');
            }
 
            //user logged in
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('message','invalid user info.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function list()
    {


        $user=User::all();
        return view('backend.layouts.user.list',compact('user'));
    }
   
    public function patientlist()
    {
        $user=User::where('role','=','patient')->get();
        return view('backend.layouts.patient',compact('user'));
    }
}
