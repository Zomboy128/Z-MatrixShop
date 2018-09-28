<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Slider;
use App\Category;
use App\Product;
use App\Brand;

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
        $brands = Brand::all();
        return view('layouts.app',compact('sliders','categories','products','slider','brands'));
    }

    public function productos($slug=null)
    {
      $sliders = Slider::all();
      $brands = Brand::all();
      $categories = Category::all();
      $categoryDetails = Category::where(['slug' => $slug])->first();
      $products= Product::where(['category_id' => $categoryDetails->id])->get();
      return view('layouts.frontend.productos.listening')->with(compact('categoryDetails','sliders','categories','products','slider','brands'));
    }

    public function marca($slug=null)
    {
      $sliders = Slider::all();
      $brands = Brand::all();
      $categories = Category::all();
      $brandsDetails = Brand::where(['slug' => $slug])->first();
      $products= Product::where(['brand_id' => $brandsDetails->id])->get();
      return view('layouts.frontend.productos.listeningBrands')->with(compact('brandsDetails','sliders','categories','products','slider','brands'));
    }
}
