@extends('admin.layout')
@section('header')
    <h1>
        <strong>Gastos</strong>
        <small>Gastos</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#" data-toggle="modal" data-target="#modalConfigurarGasto"><i class="fa fa-gears"></i>
                Configuración</a></li>
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
                            <i class=""></i> Agregar Gasto
                        </button>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped dt-responsive table_clientes">
                            <thead>
                            <tr class="text-center">
                                <th>Id</th>
                                <th>Detalle</th>
                                <th>Tipo Gasto</th>
                                <th>Valor</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
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
                    <h3 class="box-title">Gráfico de Gastos</h3>
                    <button type="button" class="btn btn-default pull-right" id="daterange-gastos-btn">
                        <span><i class="fa fa-calendar"></i> Rango de Fecha</span>
                        <i class="fa fa-caret-down"></i>
                    </button>
                </div>
                <div class="box-body">
                    <div class="box box-solid bg-red-gradient">
                        <div class="box-body border-radius-none">
                            <div class="chart" id="line-chart-gastos" style="height: 250px;display:none;"></div>
                            <div id="txtGraficaGastos" style="text-align: center;font-weight: bold;font-size: 1.4rem;">
                                No hay registros...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="form-group">
                        <h3 class="box-title">Costos <span style="color: red; font-weight: bold">Comisiones</span></h3>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 style="font-weight: bold">TOTAL</h1>
                        </div>
                        <div class="col-md-4">
                            <h1 style="font-weight: bold">$ 100.000</h1>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success pull-right"
                                    data-target="" style="margin-top: 20px;">
                                <i class=""></i> Excel
                            </button>
                        </div>
                    </div>
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
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Agregar Gasto<i class=""></i></h4>
                </div>
                <form class="form_agregar_gasto" method="POST" action="{{route ('gasto-creado')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group {{$errors->has('detalle')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Detalle Gasto</label>
                                <textarea class="form-control" name="detalle" rows="3"
                                          placeholder="detalle ...">{{old('detalle')}}</textarea>{!! $errors->first('detalle','<span class="help-block">*:message</span>')!!}
                            </div>
                            <div class="form-group {{$errors->has('persona')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Persona</label>
                                <input type="text" class="form-control" name="persona" placeholder="persona que recibe"
                                       value="{{old('persona')}}">{!! $errors->first('persona','<span class="help-block">*:message</span>')!!}
                            </div>
                            <div class="form-group {{$errors->has('codigo')? 'has-error':''}}">
                                <label for=""><span class="text-danger"></span> Codigo o número factura</label>
                                <input type="number" class="form-control" name="codigo" placeholder="opcional"
                                       value="{{old('codigo')}}">{!! $errors->first('codigo','<span class="help-block">*:message</span>')!!}
                            </div>
                            <div class="form-group {{$errors->has('tipo_gasto')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Tipo de gasto</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                    <select name="tipo_gasto" id="tipo_gasto" class="form-control">
                                        <option value="">Seleccione</option>
                                        @foreach($tipo_gastos as $tipo_gasto)
                                            <option class="text-uppercase"
                                                    {{old('tipo_gasto')==$tipo_gasto->id ? 'selected':''}} value="{{$tipo_gasto->id}}">{{$tipo_gasto->tipo_gasto}}</option>

                                        @endforeach

                                    </select> {!! $errors->first('tipo_gasto','<span class="help-block">Seleccione Tipo</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('valor_gasto')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Por valor de</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                    <input id="" type="text" name="valor_gasto" value="{{old('valor')}}"
                                           class="form-control valor_gasto"
                                           placeholder="Valor Gasto"> {!! $errors->first('valor_gasto','<span class="help-block">*:message</span>')!!}
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

    <!-- MODAL VER GASTOS -->
    <div class="modal fade" id="modal_ver_gasto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E1493F;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Detalle del gasto<i class=""></i>
                    </h4>
                </div>
                <form class="form_agregar_gasto" method="POST" action="">
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group {{$errors->has('detalle')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Detalle Gasto</label>
                                <textarea disabled id="detalle_gasto" class="form-control" name="detalle" rows="3"
                                          placeholder="detalle ...">{{old('detalle')}}</textarea>{!! $errors->first('detalle','<span class="help-block">*:message</span>')!!}
                            </div>
                            <div class="form-group {{$errors->has('persona')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Persona</label>
                                <input disabled id="persona_gasto" type="text" class="form-control" name="persona"
                                       placeholder="persona que recibe"
                                       value="{{old('persona')}}">{!! $errors->first('persona','<span class="help-block">*:message</span>')!!}
                            </div>
                            <div class="form-group {{$errors->has('codigo')? 'has-error':''}}">
                                <label for=""><span class="text-danger"></span> Codigo o número factura</label>
                                <input disabled id="codigo_gasto" type="number" class="form-control" name="codigo"
                                       placeholder="no registrado"
                                       value="{{old('codigo')}}">{!! $errors->first('codigo','<span class="help-block">*:message</span>')!!}
                            </div>
                            <div class="form-group {{$errors->has('codigo')? 'has-error':''}}">
                                <label for=""><span class="text-danger"></span> Tipo de gasto</label>
                                <input disabled id="tipo_gasto_gasto" type="text" class="form-control" name="codigo"
                                       placeholder="opcional"
                                       value="{{old('codigo')}}">{!! $errors->first('codigo','<span class="help-block">*:message</span>')!!}
                            </div>
                            <div class="form-group {{$errors->has('valor_gasto')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Por valor de</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                    <input disabled id="valor_gasto" type="text" name="valor_gasto"
                                           value="{{old('valor')}}" class="form-control valor_gasto"
                                           placeholder="Valor Gasto"> {!! $errors->first('valor_gasto','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL CONFIGURAR GASTOS -->
    <div class="modal fade" id="modalConfigurarGasto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E1493F;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Configurar Gastos<i class=""></i>
                    </h4>
                </div>
                <form class="form_agregar_gasto" method="POST" action="{{route ('agregar_tipo_gasto')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="box-body">

                            <div class="form-group {{$errors->has('tipo_gasto')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Nombre tipo gasto</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    <input id="" type="text" name="tipo_gasto" value="{{old('tipo_gasto')}}"
                                           class="form-control"
                                           placeholder="tipo gasto">{!! $errors->first('tipo_gasto','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""><span class="text-danger"></span> Lista de tipos de gastos</label>
                            </div>
                            <div class="box-body table-responsive">
                                <table class="table table-bordered table-striped dt-responsive" id="table_tipo_gastos">
                                    <thead>
                                    <tr class="text-center">
                                        <th>Id</th>
                                        <th>Tipo de gasto</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>


                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger">Crear tipo gasto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('dataTablesGastos')
    <script>
        const urlGastos = "{{route("reporteGastos")}}";

    </script>
    <script src="/adminlte/plugins/daterangepicker/moment_spa.js"></script>
    <script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="/adminlte/plugins/daterangepicker/daterangepicker.css"/>
    <script src="/js/rango_fecha.js"></script>
    <script>
        var grafico = new Morris.Line({
            element: 'line-chart-gastos',
            resize: true,
            xkey: 'fecha',
            ykeys: ['gasto'],
            labels: ['Gastos'],
            lineColors: ['#efefef'],
            lineWidth: 2,
            hideHover: 'auto',
            gridTextColor: '#fff',
            gridStrokeWidth: 0.4,
            pointSize: 4,
            pointStrokeColors: ['#efefef'],
            gridLineColor: '#efefef',
            gridTextFamily: 'Open Sans',
            preUnits: '$',
            gridTextSize: 10,
            xLabelFormat: function (x) {
                date = moment(x);
                return date.format("MMMM D, YYYY");
            },
        });

    </script>
    <script src="/adminlte/js/administrar_gastos.js"></script>


    <script>
        var table = null;

        function cargarTabla() {
            if (table !== null) {
                table.destroy();
            }
            table = $('.table_clientes').DataTable({
                "processing": true,
                "serverSide": true,
                "data": null,
                "ajax": {
                    url: "{{route('tabla_gastos')}}",
                    data: {
                        fechaInicio: fechaInicio,
                        fechaFin: fechaFin
                    }
                },
                "columns": [
                    {
                        data: 'id',
                        defaultContent: '<span class="label label-danger text-center">Ningún valor por defecto</span>'
                    },
                    {data: 'detalle'},
                    {data: 'tipo_gasto.tipo_gasto'},
                    {data: 'valor'},
                    {data: 'created_at'},
                    {
                        render: function (data, type, JsonResultRow, meta) {
                            return '<button class="btn btn-sm center-block btn-danger btn_ver_gasto" id_ver_gasto="' + JsonResultRow.id + '" data-toggle="modal" data-target="#modal_ver_gasto"><i class="fa fa-eye"></i></button>'

                        }
                        , defaultContent: '<span class="label label-danger text-center">Ningún valor por defecto</span>'
                    },
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
        }

        cargarTabla();
        @if (count($errors) > 0)
        $('#modalAgregarCliente').modal('show');
        @endif
        /*=============================================
        DATATABLES TIPOS DE GASTOS
        =============================================*/

        $('#table_tipo_gastos').DataTable({
            "processing": true,
            "serverSide": true,
            "data": null,
            "ajax": "{{ route('tipos_gastos_table') }}",
            "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "Todos"]],
            "columns": [
                {
                    data: 'id',
                    defaultContent: '<span class="label label-danger text-center">Ningún valor por defecto</span>'
                },
                {
                    data: 'tipo_gasto',
                    defaultContent: '<span class="label label-danger text-center">Ningún valor por defecto</span>'
                },
                {
                    data: 'estado',
                    defaultContent: '<span class="label label-danger text-center">Ningún valor por defecto</span>'
                },
                {
                    render: function (data, type, JsonResultRow, meta) {
                        return '<button class="btn btn-sm center-block btn-danger" id_tipo_gasto="' + JsonResultRow.id + '" data-toggle="modal" data-target="#modal_editar_tipo_gasto"><i class="fa fa-pencil"></i></button>'

                    }
                    , defaultContent: '<span class="label label-danger text-center">Ningún valor por defecto</span>'
                },
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
    </script>
@endsection