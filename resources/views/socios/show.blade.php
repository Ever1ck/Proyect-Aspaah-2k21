@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<div class="row">
    <div class="col">
        <div class="row">
            <div class="col align-self-center">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user shadow">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="row">
                    <div class=" mx-auto col-4" style="height: 250px;">
                        <img class="mx-auto" src="/imagen/{{ $socios->imagen }}" alt="" style="height: 250px;">
                    </div>
                    <div class="col-8">
                        <label class="h2" for="">Nombre y Apellidos:</label>
                        <h3 class="">{{$socios->persona->nombre}}</h3>
                        <h5 class="">{{$socios->persona->ape_paterno}} {{$socios->persona->ape_materno}}
                        </h5>
                    </div>
                    </div>    
                    
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">DNI</h5>
                                    <span class="description-text">{{$socios->persona->dni}}</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">CELULAR</h5>
                                    <span class="description-text">{{$socios->persona->telefono}}</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">SEXO</h5>
                                    <span class="description-text">
                                        @if ($socios->persona->sexo == '1')
                                        Masculino
                                        @else
                                        Femenino
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Main content -->
                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            Dirección
                            <address>
                                <b>Comunidad:</b> <strong>{{$socios->comunidad}}</strong><br>
                                <b>Distrito:</b> {{$socios->distrito->name}}<br>
                                <b>Provincia:</b> {{$socios->provincia->name}}<br>
                                <b>Departamento:</b>
                                {{$socios->departamento->name}}<br>
                            </address>
                        </div>
                        <div class="col-sm-4 invoice-col">
                            Personal
                            <address>
                                <b>Nombres y apellidos:</b> <strong>{{$socios->persona->nombre}}
                                    {{$socios->persona->ape_paterno}} {{$socios->persona->ape_materno}}</strong><br>
                                <b>Número de celular:</b> {{$socios->persona->telefono}}<br>
                                <b>DNI:</b> {{$socios->persona->dni}}<br>
                                <b>Fecha de nacimiento:</b> {{$socios->persona->fe_nacimiento}}<br>
                            </address>
                        </div>
                        <div class="col-sm-4 invoice-col">
                            <b>Código
                                #{{$socios->persona->id}}{{$socios->id}}{{$socios->persona->fe_nacimiento}}</b><br>
                            <br>
                            
                            <b>Estado de la persona:</b> @if ($socios->es_socio == '1')
                            Afiliado
                            @else
                            Desafiliado
                            @endif
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col">
                            <p class="lead">Familiares:</p>
                            <div class="d-flex justify-content-between">
                                <div class="btn-group" role="group">
                                    <a type="button" class="btn btn-outline-warning px-4"
                                        href="{{route('socios.pdf')}}" target="_blank">
                                        Exportar <i class="far fa-file-pdf fa-lg ml-1"></i></a>
                                    <a type="button" class="btn btn-outline-success px-4"
                                        href="{{route('socios.excel')}}">
                                        Exportar <i class="far fa-file-excel fa-lg ml-1" target="_blank"></i></a>
                                </div>
                                <a class="btn btn-success" wire:click="createAll">
                                    <i class="fas fa-plus mr-1"></i> Registrar pariente
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Parentesco</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Fernando</td>
                                        <td>Puma</td>
                                        <td>Hermano/td>
                                        <td>
                                            <button>Editar</button>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <
                        <!-- /.col -->
                        
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-12">
                            <div class="btn-group" role="group">
                                <a type="button" class="btn btn-warning px-4"
                                    href="{{route('socios.pdfCarnet', $socios->id)}}" target="_blank">
                                    Exportar <i class="far fa-file-pdf fa-lg ml-1"></i></a>
                            </div>
                            <a type="button" href="/socios" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fas fa-back"></i> Regresar
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
        </div>
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

@stop

@section('js')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  (function () {
    'use strict'

    var forms = document.querySelectorAll('.formEliminar')
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          event.preventDefault()
          event.stopPropagation()
          Swal.fire({
              title: '¿Desea eliminar al socio?',
              icon: 'info',
              showCancelButton: true,
              confirmButtonColor: '#20c997',
              cancelButtonColor: '#6c757d',
              confirmButtonText: 'Confirmar',
          }).then((result) => {
            if (result.isConfirmed) {
              this.submit();
              Swal.fire('Eliminado', 'El socio se elimino corectamente.','success');
            }
          })
        }, false)            
      });
  })()
</script>

    <!-- DataTables  & Plugins -->
<!-- DataTables  & Plugins -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/plugins/jszip/jszip.min.js"></script>
<script src="/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@stop
