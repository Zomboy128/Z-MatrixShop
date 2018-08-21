<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Slider;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller insta
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        $products = Product::all();
        return view('layouts.app',compact('sliders','categories','products','slider'));
    }
}
