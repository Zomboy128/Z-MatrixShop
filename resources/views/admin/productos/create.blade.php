@extends('layouts.backend.app')

@section('title','Marcas - Agregar Nueva Marca')


<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/libs/jquery-minicolors/jquery.minicolors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/libs/quill/dist/quill.snow.css') }}">
    <link href="{{ asset('assets/backend/css/style.min.css') }}" rel="stylesheet">


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
                            <form class="form-horizontal" action="{{ route('admin.productos.store') }}" method="POST">
                            	@csrf
                                <div class="card-body">
                                    <h4 class="card-title">Agregar Nuevo Producto</h4>
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
                                        <input type="text" class="form-control" id="fname" name="Fecha_fabricacion" placeholder="Fecha">
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
                                        <input type="number" class="form-control" id="fname" name="Cantidad_ingresar" placeholder="Ingresar Cantidad Aqui">
                                        </div>
                                    </div>
                                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Ingrese Las Caracteristicas Del Producto</h4>
                                <!-- Create the editor container -->
                                <div id="editor" style="height: 300px;" name="caracteristicas">
                                    <p>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
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