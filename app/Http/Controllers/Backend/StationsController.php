<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StationsController extends Controller
{
    public function list()
    {
        return view('backend.layouts.stations.list');
    }
}
