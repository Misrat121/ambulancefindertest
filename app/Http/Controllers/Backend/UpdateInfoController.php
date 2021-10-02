<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateInfoController extends Controller
{
public function update()

{
    return view('backend.layouts.updateinfo.update');
}
}
