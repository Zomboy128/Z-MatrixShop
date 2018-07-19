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
    	$this->validate($request,['name' => 'required|min:3|max:20|unique:categories']);

    	$categorias = new Category();
    	$categorias->name = $request->name;
    	$categorias->slug = str_slug($request->name);
    	$categorias->save();
        Toastr::success('Categoria Guardada Con Exito :)' ,'Success');
    	return redirect()->route('admin.categorias.index');

    }

    public function edit($id)
    {
       $categorias = Category::find($id);
       return view('admin.categorias.edit',compact('categorias'));
    }

    public function update(Request $request, $id)
    {
       $this->validate($request,['name' => 'required|min:3|max:20|unique:categories']);

        $categorias = Category::find($id);
        $categorias->name = $request->name;
        $categorias->slug = str_slug($request->name);
        $categorias->save();
        Toastr::success('Categoria Actualizada Con Exito :)' ,'Success');
        return redirect()->route('admin.categorias.index');
    }

    public function destroy($id)
    {
        $categorias = Category::find($id);
        $categorias->delete();
        Toastr::success('Categoria Eliminada Con Exito :)' ,'Success');
        return redirect()->route('admin.categorias.dashboard');
    }
}
