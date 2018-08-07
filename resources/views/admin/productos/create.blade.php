@extends('layouts.backend.app')

@section('title','Productos - Agregar Nuevo Producto')

@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <div class="block-header">
                    <h4 class="page-title">Agregar Nuevo Producto</h4>
                 </div>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.productos.index') }}">Productos</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a>Agregar Nuevo Producto</a></li>   
                        </ol>
                    </nav>
                </div>
            </div>
        </div> 
    </div>                  
     <!-- Container fluid  -->
            <!-- ============================================================== -->
        <div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" action="{{ route('admin.productos.store') }}" method="POST" enctype="multipart/form-data">
                            	@csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre Del Porducto</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="name" placeholder="Ingresar El Nombre Aquí">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Seleccione La Marca Del Producto</label>
                                        <div class="col-sm-9">
                                        <select class="form-control" name="brands">
                                            <option value="">Seleccione Una Marca...</option>
                                                @foreach($brands as $marca)
                                                    <option value="{{ $marca->id }}">{{ $marca->name }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Seleccione La Categoria Del Producto</label>
                                        <div class="col-sm-9">
                                        <select class="form-control" name="category">
                                            <option value="">Selecciona Una Categoria...</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese El Modelo Del Producto</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="modelo" placeholder="Ingresar El Modelo Aquí">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese La Fecha De Fabricación Del Producto</label>
                                        <div class="col-sm-9">
                                        <input type="date" class="form-control" id="fname" name="Fecha_fabricacion" placeholder="Fecha">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese El Numero De Serie Del Producto</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="Num_serie" placeholder="Ingresar Serie Aquí">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese El Precio De Venta Del Producto</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="Precio_venta" placeholder="Ingresar Precio Aquí">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese La Cantidad Del Producto a Ingresar</label>
                                        <div class="col-sm-9">
                                        <input type="number" class="form-control" id="fname" name="cantidad_ingresar" placeholder="Ingresar Cantidad Aqui">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese Las Caracteristicas Del Producto</label>
                                        <div class="col-sm-9">
                                        <textarea class="form-control" name="caracteristicas" id="fname"></textarea>
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
                                    	<a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.marcas.index') }}">Regresar</a>
                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                 </div>
            </div>   
        </div> 
</div>



@endsection