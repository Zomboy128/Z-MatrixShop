@extends('layouts.backend.app')

@section('title','Slider - Agregar Nuevo Slider')

@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <div class="block-header">
                    <h4 class="page-title">Agregar Nuevo Slider</h4>
                 </div>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.slider.index') }}">slider</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a>Agregar Nuevo Slider</a></li>   
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
                            <form class="form-horizontal" action="{{ route('admin.slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese El Titulo Del Slider</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="title" placeholder="Ingresar El Titilo Del Slider Aquí" value="{{ $slider->title }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ingrese El Sub Titulo Del Slider</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="sub_title" placeholder="Ingresar El subtitulo Aquí" value="{{ $slider->sub_title }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Seleccione La Imagen Para El slider</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" id="fname" class="form-control">
                                        </div>
                                    </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.slider.index') }}">Regresar</a>
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
