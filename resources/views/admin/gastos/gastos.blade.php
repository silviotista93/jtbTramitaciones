@extends('admin.layout')
@section('header')
<h1>
    <strong>Gastos</strong>
    <small>Gastos</small>
</h1>
<ol class="breadcrumb">
    <li>
        <a href="#" data-toggle="modal" data-target="#modalConfigurarGasto" id="openConfiguracion">
            <i class="fa fa-gears"></i>
            Configuración
        </a>
    </li>
</ol>



@stop
@section('contenido')
<style>
    #form_agregar_gasto:not(.update) #btnActualizar,
    #form_agregar_gasto:not(.update) #btnCancelar,
    #form_agregar_gasto.update #btnCrear,
    #form_agregar_gasto.update .container--table,
    #form_agregar_gasto.update #btnCerrar,
    #modal_ver_gasto:not(.edit) .itemEdit,
    #modal_ver_gasto.edit .itemNormal
    {
        display: none !important;
    }

    .toggle--container {
        text-align: center;
    }

    .toggle--container .toggle {
        width: 7rem !important;
    }
</style>
<div class="row">
    
    <div class="col-md-12" style="padding: 2rem;">
        <label for="select_tipo_opciones">Mostrar gastos de:</label>
        <select name="opciones" id="select_tipo_opciones" class="form-control" style="display: inline-block; width: auto;">
            <option value="0">Todos</option>
            @foreach ($tipo_gastos as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->tipo_gasto}}</option>
            @endforeach
        </select>
        <button type="button" class="btn btn-default pull-right" id="daterange-gastos-btn">
            <span><i class="fa fa-calendar"></i> Rango de Fecha</span>
            <i class="fa fa-caret-down"></i>
        </button>
    </div>
    <div class="col-md-12">
        <div class="box box-danger">
            <div class="box-header">
                <div class="form-group">
                    <h3 class="box-title">Lista de Gastos</h3>
                    <button class="btn btn-danger pull-right" id="btnAgregarGasto" data-toggle="modal" data-target="#modalAgregarGasto">
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
                                <th>Responsable</th>
                                <th>Factura</th>
                                <th>Fecha</th>
                                <th>Valor</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot style="display: none;">
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total:</th>
                                <th class="totalGastos">$0</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-header">
                <div class="form-group" style="display: flex; justify-content: space-between; margin-bottom: 0;">
                    <h3 class="box-title" style="display: flex; align-items: center;">Costos <span style="color: red; font-weight: bold; margin-left: .5rem;" id="txtTipoGasto">Comisiones</span></h3>
                    <div class="row pull-right" style="display: flex;">
                        <div>
                            <h1 style="font-weight: bold; padding-right: .5rem;">TOTAL</h1>
                        </div>
                        <div style="padding: 0 1rem;">
                            <h1 style="font-weight: bold"><span class="totalGastos">$0</span></h1>
                        </div>
                        <div style="margin-right: 1rem;">
                            <button class="btn btn-success " id="exportarExcel" style="margin-top: 20px;">
                                <i class=""></i> Excel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Gráfico de Gastos</h3>
                {{--            <button type="button" class="btn btn-default pull-right" id="daterange-gastos-btn">
                                    <span><i class="fa fa-calendar"></i> Rango de Fecha</span>
                                    <i class="fa fa-caret-down"></i>
                                </button> --}}
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
</div>

<!-- MODAL AGREGAR GASTOS -->
<div class="modal fade" id="modalAgregarGasto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #E1493F;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
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
                                placeholder="detalle ...">{{old('detalle')}}</textarea>
                            {!! $errors->first('detalle','<span class="help-block">*:message</span>')!!}
                        </div>
                        <div class="form-group {{$errors->has('persona')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Persona</label>
                            <input type="text" class="form-control" name="persona" placeholder="persona que recibe"
                                value="{{old('persona')}}">
                            {!! $errors->first('persona','<span class="help-block">*:message</span>')!!}
                        </div>
                        <div class="form-group {{$errors->has('codigo')? 'has-error':''}}">
                            <label for=""><span class="text-danger"></span> Codigo o número factura</label>
                            <input type="number" class="form-control" name="codigo" placeholder="opcional"
                                value="{{old('codigo')}}">
                            {!! $errors->first('codigo','<span class="help-block">*:message</span>')!!}
                        </div>
                        <div class="form-group {{$errors->has('tipo_gasto')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Tipo de gasto</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <select name="tipo_gasto" id="tipo_gasto" class="form-control">
                                    <option value="">Seleccione</option>
                                    @foreach($tipo_gastos as $tipo_gasto)
                                    <option class="text-uppercase"
                                        {{old('tipo_gasto')==$tipo_gasto->id ? 'selected':''}}
                                        value="{{$tipo_gasto->id}}">{{$tipo_gasto->tipo_gasto}}</option>

                                    @endforeach

                                </select>
                            </div>
                            {!! $errors->first('tipo_gasto','<span class="help-block">Seleccione Tipo</span>')!!}
                        </div>
                        <div class="form-group {{$errors->has('valor_gasto')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Por valor de</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                <input id="" type="text" name="valor_gasto" value="{{old('valor')}}"
                                    class="form-control valor_gasto" placeholder="Valor Gasto">
                            </div>
                            {!! $errors->first('valor_gasto','<span class="help-block">*:message</span>')!!}
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
                        style="color: #FFFFFF;">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Detalle del gasto<i class=""></i>
                </h4>
            </div>
            <form class="form_agregar_gasto" method="POST" action="{{route("actualizar_gasto")}}">
                @csrf
                <div class="modal-body">
                    <div class="box-body">
                        <input type="hidden" name="id" id="id_update">
                        <div class="form-group {{$errors->has('detalle')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Detalle Gasto</label>
                            <textarea disabled id="detalle_gasto" class="form-control" name="detalle" rows="3"
                                placeholder="detalle ...">{{old('detalle')}}</textarea>
                            {!! $errors->first('detalle','<span class="help-block">*:message</span>')!!}
                        </div>
                        <div class="form-group {{$errors->has('persona')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Persona</label>
                            <input disabled id="persona_gasto" type="text" class="form-control" name="persona"
                                placeholder="persona que recibe" value="{{old('persona')}}">
                            {!! $errors->first('persona','<span class="help-block">*:message</span>')!!}
                        </div>
                        <div class="form-group {{$errors->has('codigo')? 'has-error':''}}">
                            <label for=""><span class="text-danger"></span> Codigo o número factura</label>
                            <input disabled id="codigo_gasto" type="number" class="form-control" name="codigo"
                                placeholder="no registrado" value="{{old('codigo')}}">
                            {!! $errors->first('codigo','<span class="help-block">*:message</span>')!!}
                        </div>
                        <div class="form-group {{$errors->has('tipo_gasto')? 'has-error':''}}">
                            <label for=""><span class="text-danger"></span> Tipo de gasto</label>
                            <select name="tipo_gasto" disabled id="tipo_gasto_gasto" class="form-control">
                                <option value="">Seleccione</option>
                                @foreach($tipo_gastos as $tipo_gasto)
                                <option class="text-uppercase"
                                    {{old('tipo_gasto')==$tipo_gasto->id ? 'selected':''}}
                                    value="{{$tipo_gasto->id}}">{{$tipo_gasto->tipo_gasto}}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('tipo_gasto','<span class="help-block">Seleccione Tipo</span>')!!}
                        </div>
                        <div class="form-group {{$errors->has('valor_gasto')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Por valor de</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                <input disabled id="valor_gasto" type="text" name="valor_gasto" value="{{old('valor')}}"
                                    class="form-control valor_gasto" placeholder="Valor Gasto">
                            </div>
                            {!! $errors->first('valor_gasto','<span class="help-block">*:message</span>')!!}
                            <input type="hidden" class="valor_gasto_db" name="valor">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger itemEdit" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning itemEdit" id="btnActualizarGasto">Actualizar Gasto</button>
                    <button type="button" class="btn btn-default itemNormal" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger itemNormal" id="btnEditarGasto">Editar Gasto</button>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
                        style="color: #FFFFFF;">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Configurar Gastos<i class=""></i>
                </h4>
            </div>
            <form class="form_agregar_gasto" id="form_agregar_gasto" method="post"
                data-crear="{{route ('agregar_tipo_gasto')}}" data-actualizar="{{route ('actualizar_tipo_gasto')}}"
                action="{{route ('agregar_tipo_gasto')}}">
                @csrf
                <div class="modal-body">
                    <div class="box-body">
                        <input id="txtId" type="hidden" name="id">
                        <div class="form-group {{$errors->has('tipo_gasto')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Nombre tipo gasto</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input id="txtNombre" type="text" name="tipo_gasto" value="{{old('tipo_gasto')}}"
                                    class="form-control" placeholder="tipo gasto">
                            </div>

                            {!! $errors->first('tipo_gasto','<span class="help-block">*:message</span>')!!}
                        </div>
                        <div class="container--table">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="btnCerrar">Cerrar</button>
                    <button type="submit" class="btn btn-danger" id="btnCrear">Crear tipo gasto</button>
                    <button type="button" class="btn btn-danger" id="btnCancelar">Cancelar</button>
                    <button type="submit" class="btn btn-warning" id="btnActualizar">Actualizar tipo gasto</button>
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
<link rel="stylesheet" type="text/css" href="/adminlte/plugins/daterangepicker/daterangepicker.css" />
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
    const fechaAc = new Date().toISOString().slice(0,10);
    var table = null;
        
        function cargarTabla() {
            if (table !== null) {
                table.destroy();
            }
            totalGastos = 0;
            table = $('.table_clientes').DataTable({
                "processing": true,
                "serverSide": true,
                "data": null,
                "ajax": {
                    url: "{{route('tabla_gastos')}}",
                    data: {
                        fechaInicio: fechaInicio,
                        fechaFin: fechaFin,
                        tipoGasto: tipoGasto
                    }
                },
                "columns": [
                    {
                        data: 'id',
                        defaultContent: '<span class="label label-danger text-center">Ningún valor por defecto</span>'
                    },
                    {data: 'detalle'},
                    {data: 'tipo_gasto.tipo_gasto'},
                    {data: 'persona'},
                    {data: 'codigo'},
                    {data: 'created_at'},
                    {data: 'valor'},
                    {
                        render: function (data, type, JsonResultRow, meta) {
                            return '<button class="btn btn-sm center-block btn-danger btn_ver_gasto" id_ver_gasto="' + JsonResultRow.id + '" data-toggle="modal" data-target="#modal_ver_gasto"><i class="fa fa-eye"></i></button>';
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
                },
                buttons: [
                    {
                        extend: 'excelHtml5',
                        className: 'excel',
                        sheetName: 'Gastos_'+fechaAc,
                        footer: true,
                        filename: "Gastos_"+fechaAc,
                        exportOptions: {
                            columns: [ 1, 2, 3, 4, 5, 6 ]
                        }
                    }
                ]
            });
        }

        $("#exportarExcel").click(function () {
            table.buttons(".excel").trigger();
        });

        cargarTabla();
        @if (count($errors) > 0)
        $('#modalAgregarCliente').modal('show');
        @endif
        /*=============================================
        DATATABLES TIPOS DE GASTOS
        =============================================*/

        table1 = $('#table_tipo_gastos').DataTable({
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
                    className: "toggle--container",
                    data: 'estado',
                    render: function (data, type, JsonResultRow,) {
                        return `<input class="estadoGasto" type="checkbox"
                                       ${ data == {{ \App\TipoGasto::ACTIVE }} ? 'checked':''} data-toggle="toggle"
                                       data-size="small" data-id="${JsonResultRow.id}">`;
                    },
                    defaultContent: '<span class="label label-danger text-center">Ningún valor por defecto</span>'
                },
                {
                    render: function (data, type, JsonResultRow, meta) {
                        return '<button class="btn btn-sm center-block btn-danger editarTipoGasto" data-id_tipo_gasto="' + JsonResultRow.id + '" data-toggle="modal" data-acc=\''+JSON.stringify(JsonResultRow)+'\'><i class="fa fa-pencil"></i></button>'

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
        

        table1.on( 'draw', function () {
            funcionClickCheckbox = () => {};
            $('.estadoGasto').bootstrapToggle();
            funcionClickCheckbox = function (element, status) {
                $.post("{{route("actualizar_estado_tipo_gasto")}}", {estado: status, id: element.attr('data-id')}, res => {
                    graficar();
                    cargarTabla();
                });
            };
        });
</script>
@endsection
@push('js')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.js"></script>
@endpush