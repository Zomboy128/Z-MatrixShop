<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Brand;
use App\Category;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.productos.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.productos.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
            'category'=>'required',
            'name' => 'required|min:2|max:30|unique:products',
            'brands'=> 'required',
            'modelo'=> 'required',
            'Fecha_fabricacion'=>'required',
            'Num_serie' =>'required',
            'caracteristicas' =>'required',
            'Precio_venta' => 'required',
            'cantidad_ingresar' => 'numeric|required|min:1|',

        ]);

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
        $producto->category_id = $request->category;
        $producto->brand_id=$request->brands;
        $producto->name = $request->name;
        $producto->modelo =$request->modelo;
        $producto->Fecha_fabricacion=$request->Fecha_fabricacion;
        $producto->Num_serie=$request->Num_serie;
        $producto->caracteristicas=$request->caracteristicas;
        $producto->Precio_venta=$request->Precio_venta;
        $producto->cantidad_ingresar=$request->cantidad_ingresar;
        $producto->image = $imagename;
        $producto->save();
        Toastr::success('Producto Registrado Con Exito :)' ,'Success');
        return redirect()->route('admin.productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Product::find($id);
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.productos.edit',compact('products','categories','brands'));
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
        $this->validate($request,[
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
            'category'=>'required',
            'name' => 'required|min:2|max:30|unique:products',
            'brands'=> 'required',
            'modelo'=> 'required',
            'Fecha_fabricacion'=>'required',
            'Num_serie' =>'required',
            'caracteristicas' =>'required',
            'Precio_venta' => 'required',
            'cantidad_ingresar' => 'numeric|required|min:1|',

        ]);

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
        $producto->category_id = $request->category;
        $producto->brand_id=$request->brands;
        $producto->name = $request->name;
        $producto->modelo =$request->modelo;
        $producto->Fecha_fabricacion=$request->Fecha_fabricacion;
        $producto->Num_serie=$request->Num_serie;
        $producto->caracteristicas=$request->caracteristicas;
        $producto->Precio_venta=$request->Precio_venta;
        $producto->cantidad_ingresar=$request->cantidad_ingresar;
        $producto->image = $imagename;
        $producto->save();
        Toastr::success('Producto Actualizado Con Exito :)' ,'Success');
        return redirect()->route('admin.productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Product::find($id);
        if (file_exists('uploads/products/'.$producto->image))
        {
            unlink('uploads/products/'.$producto->image);
        }
        $producto->delete();
        Toastr::success('Producto Eliminado Con Exito :)' ,'Success');
        return redirect()->back();
    }
}
