@extends('layouts.backend.app')

@section('title','Categorias')


 @push('css')
 <link href="{{ asset('assets/backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
 @endpush

@section('content')

  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                    	<div class="block-header">
                          <a class="btn btn-primary waves-effect" href="{{ route('admin.categorias.create') }}">
                          <i class="fas fa-pencil-alt"></i>
                          <span>Agregar Nueva Categoria</span>
                          </a>
                        </div>
                        
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Todas Las Categorias</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Slug</th>
                                                <th>Creado el</th>
                                                <th>Actualizado el</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($categories as $key=>$categorias)
                                         <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $categorias->name }}</td>
                                            <td>{{ $categorias->slug }}</td>
                                            <td>{{ $categorias->created_at }}</td>
                                            <td>{{ $categorias->updated_at }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.categorias.edit',$categorias->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" data-original-title="Editar"><i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" data-original-title="Eliminar" onclick="deleteCategory({{ $categorias->id}})"><i class="fas fa-trash"></i>
                                                </button>
<form id="delete-form-{{ $categorias->id }}" action="{{ route('admin.categorias.destroy',$categorias->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                         </tr>   
                                         @endforeach   
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Slug</th>
                                                <th>Creado el</th>
                                                <th>Actualizado el</th>
                                                <th>Acción</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

@endsection


@push('js')    

    <!--El Js Que tiene Buscador en la tabla con su paginacion -->
    <script src="{{ asset('assets/backend/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
    <!--aqui termina la tabla con el buscador -->

    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteCategory(id) {
            swal({
                title: '¿Esta Seguro?',
                text: " !No Podras Revertir Esto!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'No, cancelar!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelado',
                        'Los Datos Estan Seguros :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush

    