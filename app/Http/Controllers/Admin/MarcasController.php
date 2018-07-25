<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.marcas.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name' => 'required|min:2|max:20|unique:brands']);

        $marcas = new Brand();
        $marcas->name = $request->name;
        $marcas->slug = str_slug($request->name);
        $marcas->save();
        Toastr::success('Marca Guardada Con Exito :)' ,'Success');
        return redirect()->route('admin.marcas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $marcas = Brand::find($id);
       return view('admin.marcas.edit',compact('marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['name' => 'required|min:2|max:20|unique:brands']);

        $marcas = Brand::find($id);
        $marcas->name = $request->name;
        $marcas->slug = str_slug($request->name);
        $marcas->save();
        Toastr::success('Marca Actualizada Con Exito :)' ,'Success');
        return redirect()->route('admin.marcas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::find($id)->delete();
        Toastr::success('Marca Eliminada Con Exito :)' ,'Success');
        return redirect()->back();
    }
}
