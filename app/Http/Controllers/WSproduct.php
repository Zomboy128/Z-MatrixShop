<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class WSproduct extends Controller
{
    public function index()
    {
        $producto = Product::all();
        return response()->json($producto,200)200)->header('Content-Type','application/json');
    }

    public function store(Request $request)
    {
        $image=$request->file('image');
        $slug=str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/products'))
            {
                mkdir('uploads/products',0777,true);
            }
            $image->move('uploads/products',$imagename);
        }else{
            $imagename = "default.png";
        }
        $producto = new Product();
        $producto->slug=str_slug($request->name);
        $producto->category_id=$request->category_id;
        $producto->brand_id=$request->brand_id;
        $producto->name = $request->name;
        $producto->modelo =$request->modelo;
        $producto->Fecha_fabricacion=$request->Fecha_fabricacion;
        $producto->Num_serie=$request->Num_serie;
        $producto->caracteristicas=$request->caracteristicas;
        $producto->Precio_venta=$request->Precio_venta;
        $producto->cantidad_ingresar=$request->cantidad_ingresar;
        $producto->image = $imagename;
        $producto->save();

        return response(($result === true ? 'succed':'failed'),200)->header('Content-Type','application/json');
    }

    public function show($id)
    {
        return Product::where('id',$id)->get();
    }

    public function update(Request $request, $id)
    {
        $producto = Product::find($id);
        $image=$request->file('image');
        $slug=str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/products'))
            {
                mkdir('uploads/products',0777,true);
            }
            unlink('uploads/products/'.$producto->image);
            $image->move('uploads/products',$imagename);
        }else{
            $imagename = $producto->image;
        }

        $producto->category_id = $request->category_id;
        $producto->brand_id=$request->brand_id;
        $producto->name = $request->name;
        $producto->modelo =$request->modelo;
        $producto->Fecha_fabricacion=$request->Fecha_fabricacion;
        $producto->Num_serie=$request->Num_serie;
        $producto->caracteristicas=$request->caracteristicas;
        $producto->Precio_venta=$request->Precio_venta;
        $producto->cantidad_ingresar=$request->cantidad_ingresar;
        $producto->image = $imagename;
        $producto->save();

        return response(($result === true ? 'succed':'failed'),200)->header('Content-Type','application/json');
    }

    public function destroy($id)
    {
        $producto = Product::find($id);
        if (file_exists('uploads/products/'.$producto->image))
        {
            unlink('uploads/products/'.$producto->image);
        }
        $producto->delete();
    }
}
