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
    <div class="row">
        <div class="col-md-7">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="form-group">
                        <h3 class="box-title">Lista de Gastos</h3>
                        <button class="btn btn-danger pull-right" data-toggle="modal" data-target="#modalAgregarGasto">
                            <i
                                    class=""> </i> Agregar Gasto
                        </button>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped dt-responsive table_clientes">
                            <thead>
                            <tr class="text-center">
                                <th>Id</th>
                                <th>Detalle</th>
                                <th>Valor</th>
                                <th>Fecha</th>
                            </tr>
                            </thead>


                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="box box-danger">
                <div class="box-header">
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL AGREGAR GASTOS -->
    <div class="modal fade" id="modalAgregarGasto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E1493F;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Agregar Gasto<i
                                class=""></i></h4>
                </div>
                <form class="form_agregar_gasto" method="POST" action="{{route ('gasto-creado')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group {{$errors->has('detalle')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Detalle Gasto</label>
                                <textarea class="form-control" name="detalle" rows="3"
                                          placeholder="Detalle ...">{{old('detalle')}}</textarea>
                                {!! $errors->first('detalle','<span class="help-block">*:message</span>')!!}
                            </div>
                            <div class="form-group {{$errors->has('valor_gasto')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Por valor de</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                    <input id="" type="text" name="valor_gasto" value="{{old('valor')}}"
                                           class="form-control valor_gasto" placeholder="Valor Gasto">
                                    {!! $errors->first('valor_gasto','<span class="help-block">*:message</span>')!!}
                                </div>
                                <input type="hidden" class="valor_gasto_db" name="valor">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger">Crear</button>
                    </div>
                </form>
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
            "columns": [
                {
                    data: 'id',
                    defaultContent: '<span class="label label-danger text-center">Ningún valor por defecto</span>'
                },
                {data: 'detalle'},
                {data: 'valor'},
                {data: 'created_at'},
            ],
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
        @if (count($errors) > 0)
        $('#modalAgregarCliente').modal('show');
        @endif
    </script>

@endsection