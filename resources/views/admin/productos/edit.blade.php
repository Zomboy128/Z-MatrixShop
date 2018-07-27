@extends('layouts.backend.app')

@section('title','Productos - Editar Producto')


@section('content')

<div class="page-wrapper">
     <!-- Container fluid  -->
            <!-- ============================================================== -->
        <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" action="{{ route('admin.productos.update',$producto->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <h4 class="card-title">Editar Producto</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre Del Porducto</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="name" value="{{ $producto->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Marca Del Producto</label>
                                        <div class="col-sm-9">
                                        <select class="form-control" name="brands">
                                                @foreach($brands as $marca)
<option {{ $marca->id == $producto->brands->id ? 'selected' : '' }} value="{{ $marca->id }}">{{ $marca->name }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Seleccione La Categoria Del Producto</label>
                                        <div class="col-sm-9">
                                        <select class="form-control" name="category">
                                                @foreach($categories as $category)
                                                 <option {{ $category->id == $producto->category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese El Modelo Del Producto</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="modelo" value="{{ $producto->modelo }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese La Fecha De Fabricación Del Producto</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="Fecha_fabricacion" value="{{ $producto->Fecha_fabricacion }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese El Numero De Serie Del Producto</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="Num_serie" value="{{ $producto->Num_serie }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese El Precio De Venta Del Producto</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="Precio_venta" value="{{ $producto->Precio_venta}}">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese La Cantidad Del Producto a Ingresar</label>
                                        <div class="col-sm-9">
                                        <input type="number" class="form-control" id="fname" name="cantidad_ingresar" value="{{ $producto->cantidad_ingresar }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese Las Caracteristicas Del Producto</label>
                                        <div class="col-sm-9">
                                        <textarea class="form-control" name="caracteristicas" id="fname" >{{ $producto->caracteristicas }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Seleccione La Imagen Del Producto</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" id="fname" class="form-control">
                                        </div>
                                    </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.productos.index') }}">Regresar</a>
                                        <button type="submit" class="btn btn-primary">Editar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                 </div>
            </div>   
        </div> 
</div>



@endsection