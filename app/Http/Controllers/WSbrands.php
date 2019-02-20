<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class WSbrands extends Controller
{
    public function index()
    {
    	$marcas = Brand::all();
    	return response()->json($marcas,200);
    }

    public function store(Request $request)
    {
    	$marcas = new Brand();
    	$marcas->name = $request->name;
    	$marcas->slug = str_slug($request->name);
    	$marcas->save();
    }

    public function show($id)
    {
       return Brand::where('id',$id)->get();
    }

    public function update(Request $request, $id)
    {
    	$marcas = Brand::find($id);
    	$marcas->name = $request->name;
    	$marcas->slug = str_slug($request->name);
    	$marcas->save();
    }

    public function destroy($id)
    {
    	Brand::find($id)->delete();
    }
}
