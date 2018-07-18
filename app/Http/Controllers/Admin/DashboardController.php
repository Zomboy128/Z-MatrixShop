<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Brian2694\Toastr\Facades\Toastr;

class DashboardController extends Controller
{
     public function index()
    {
        return view('admin.dashboard');
    }
}
