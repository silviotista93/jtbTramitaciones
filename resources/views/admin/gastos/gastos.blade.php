@extends('admin.layout')

@section('header')
    <h1>
       <strong>Gastos</strong>
        <small>Gastos</small>
    </h1>
    <ol class="breadcrumb">
        {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
        {{--<li class="active">Ini</li>--}}
    </ol>
@stop

@section('contenido')
    <div class="box box-danger">
        <div class="box-header">
            <div class="form-group">
                <h3 class="box-title">Lista de Gastos</h3>
                <button class="btn btn-danger pull-right" data-toggle="modal" data-target="#modalAgregarCliente"><i
                            class=""> </i> Agregar Gasto
                </button>
            </div>
            <div class="box-body table-responsive">
                <table  class="table table-bordered table-striped dt-responsive table_clientes">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Detalle</th>
                        <th>Valor</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>


                </table>
            </div>
        </div>
    </div>

@stop
@section('dataTablesGastos')
    <script>
        $('.table_clientes').DataTable({
            "processing": true,
            "serverSide": true,
            "data": null,
            "ajax": "{{route('tabla_gastos')}}",
            "columns":[
                {data: 'id',defaultContent:'<span class="label label-danger text-center">Ningún valor por defecto</span>'},
                {data: 'detalle'},
                {data: 'valor'},
                {data: 'created_at'},
                {
                    render:function (data,type, JsonResultRow,meta) {
                        return '<button href="" idcliente="'+JsonResultRow.id+'" class="btn btn-sm btn-info btnEditarCliente"><i class="fa fa-pencil"></i></button>'

                    }
                },
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
        @if (count($errors) > 0)
        $('#modalAgregarCliente').modal('show');
        @endif
    </script>

@endsection