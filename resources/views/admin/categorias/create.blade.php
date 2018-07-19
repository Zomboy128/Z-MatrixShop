@extends('layouts.backend.app')

@section('title','Categoria - Agregar Nueva Categoria')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/libs/jquery-minicolors/jquery.minicolors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/libs/quill/dist/quill.snow.css') }}">
    <link href="{{ asset('assets/backend/css/style.min.css') }}" rel="stylesheet">
@endpush

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
                            <form class="form-horizontal" action="{{ route('admin.categorias.store') }}" method="POST">
                            	@csrf
                                <div class="card-body">
                                    <h4 class="card-title">Agregar Nueva Categoria</h4>
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