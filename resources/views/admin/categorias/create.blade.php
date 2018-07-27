@extends('layouts.backend.app')

@section('title','Categoria - Agregar Nueva Categoria')

@section('content')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <div class="block-header">
                    <h4 class="page-title">Agregar Nueva Categoria</h4>
                 </div>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.categorias.index') }}">Categorias</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a>Agregar Nueva Categoria</a></li>   
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
                            <form class="form-horizontal" action="{{ route('admin.categorias.store') }}" method="POST">
                            	@csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre De La Categoria</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="name" placeholder="Ingresar Nombre Aquí">
                                        </div>
                                    </div>
                                <div class="border-top">
                                    <div class="card-body">
                                    	<a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.categorias.index') }}">Regresar</a>
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