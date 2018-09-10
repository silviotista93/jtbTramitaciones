@extends('admin.layout')

@section('header')
    <h1>
       <strong>Todos los Clientes</strong>
        <small>Inicio</small>
    </h1>
    <ol class="breadcrumb">
        {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
        {{--<li class="active">Ini</li>--}}
    </ol>
@stop

@section('contenido')

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Lista de Clientes</h3>
            {{--<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i--}}
                        {{--class="fa fa-plus"> </i> Agregar Cliente--}}
            {{--</button>--}}
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table  class="table table-bordered table-striped dt-responsive table_clientes">
                <thead>
                <tr class="text-center">
                    <th>Identificación</th>
                    <th>Nombre</th>
                    <th>Tipo Tramite</th>
                    <th>Tramitador</th>
                    <th>Estado</th>
                </tr>
                </thead>


            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- TABLA DINAMICA Clientes-->
@section('dataTablesClientes')
    <script>
            $('.table_clientes').DataTable({
                "processing": true,
                "serverSide": true,
                "data": null,
                "ajax": "/admin/api/clientes",
                "columns":[
                    {data: 'identificacion'},
                    {data: 'name'},
                    {data: 'apellidos'},
                    {data: 'email'},
                    {data: 'created_at'},
                ],
                "language":{
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });

    </script>

@endsection

@stop