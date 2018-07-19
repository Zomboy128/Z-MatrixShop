<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
    	return view('admin.categorias.index',compact('categories'));
    }

    public function create()
    {
    	return view('admin.categorias.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request,['name' => 'required|min:3']);

    	$categorias = new Category();
    	$categorias->name = $request->name;
    	$categorias->slug = str_slug($request->name);
    	$categorias->save();
        Toastr::success('Categoria Guardada Con Exito :)' ,'Success');
    	return redirect()->route('admin.categorias.index');

    }
}
