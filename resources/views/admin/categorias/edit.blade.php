@extends('layouts.backend.app')

@section('title','Editar')

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
                          <form class="form-horizontal" action="{{ route('admin.categorias.update',$categorias->id) }}" method="POST">
                            	@csrf
                            	@method('PUT')
                                <div class="card-body">
                                    <h4 class="card-title">Agregar Nueva Categoria</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre De La Categoria</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="name" value="{{ $categorias->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">URL De La Categoria</label>
                                        <div class="col-sm-9">
                                            <input type="url" class="form-control" id="fname" name="url" value="{{ $categorias->url }}">
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