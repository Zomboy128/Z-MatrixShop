<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class WScategory extends Controller
{
    public function index()
    {
       $categoria = Category::all();
       return response()->json($categoria,200)->header('Content-Type','application/json');
    }

    public function store(Request $request)
    {
        $categoria = new Category();
        $categoria->name = $request->name;
    	$categoria->slug = str_slug($request->name);
    	$categoria->save();

         return response(($result === true ? 'succed':'failed'),200)->header('Content-Type','application/json');
    }

    public function show($id)
    {
        return Category::where('id',$id)->get();
    }

    public function update(Request $request, $id)
    {
        $categoria = Category::find($id);
        $categoria->name = $request->name;
        $categoria->slug = str_slug($request->name);
        $categoria->save();

        return response(($result === true ? 'succed':'failed'),200)->header('Content-Type','application/json');
    }

    public function destroy($id)
    {
    	Category::find($id)->delete();
    }
}
