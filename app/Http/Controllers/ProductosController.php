<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Slider;
use App\Category;
use App\Product;
use App\Brand;

class ProductosController extends Controller
{
    public function productos($id = null)
    {

    	$ProductoDetalle = Product::where('id',$id)->first();
    	return view('layouts.frontend.productos.index')->with(compact('ProductoDetalle'));

    }
}
