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
                          <form class="form-horizontal" action="{{ route('admin.marcas.update',$marcas->id) }}" method="POST">
                            	@csrf
                            	@method('PUT')
                                <div class="card-body">
                                    <h4 class="card-title">Editar Marca</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre De La Marca</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="name" value="{{ $marcas->name }}">
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