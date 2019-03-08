@extends('admin.layout')

@section('header')
    <h1>
        <strong>Tramites Pendientes</strong>
        <small>Tramites</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Administrar Tramites</li>
        <li class="active">Pendientes</li>
    </ol>
@stop
@section('contenido')
    <div class="box box-primary">

        <div class="box-header">
            <div class="form-group">
                <h3 class="box-title">Listado de Tramites Pendientes</h3>
            </div>
            <button type="button" class="btn btn-default pull-right" id="dpFecha">
                <span>
                    <i class="fa fa-calendar"></i> Rango fecha
                </span>
                <i class="fa fa-caret-down"></i>
            </button>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped dt-responsive tablas table_admiVentas">
                <thead>
                <tr>
                    <th>Código factura</th>
                    <th>Identificacion</th>
                    <th>Cliente</th>
                    <th>Vendedor</th>
                    <th>Tipo Tramite</th>
                    <th>Estado</th>
                    <th>Financiación</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>

                </thead>

            </table>

        </div>

    </div>



    <!-- TABLA DINAMICA Clientes-->
@section('dataTablesClientes')
    <script src="/adminlte/plugins/daterangepicker/moment_spa.js"></script>
    <script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="/adminlte/plugins/daterangepicker/daterangepicker.css" />
    <script src="/js/rango_fecha.js"></script>
    <script src="/js/administrar_ventas_admin.js"></script>
    <script>
        fechaInicio = getStorage("fechaInicio");
        fechaFin = getStorage("fechaFin");
        var table = null;
        function cargarTabla (){
            if (table !== null){
                table.destroy();
            }
            table = $('.table_admiVentas').DataTable({
                "processing": true,
                "serverSide": true,
                "stateSave": true,
                "data": null,
                "ajax": {
                    url: "/admin/api/tramites-pendientes",
                    data: {
                        fechaInicio: fechaInicio,
                        fechaFin: fechaFin
                    }
                },
                "columns":[
                    {data: 'id'},
                    {data: 'idcliente.identificacion'},
                    {data: 'idcliente.name', "width": "20%",
                        render:function (data,type, JsonResultRow,meta) {
                            return '<p>'+JsonResultRow.idcliente.name+' '+JsonResultRow.idcliente.apellidos+'</p>'
                        }
                    },
                    {data: 'id_vendedor.name', "width": "20%",
                        render:function (data,type, JsonResultRow,meta) {
                            return '<p>'+JsonResultRow.id_vendedor.name+' '+JsonResultRow.id_vendedor.apellidos+'</p>'
                        }
                    },
                    {data: 'tipo_tramite.nombre'},
                    {
                        data: 'estado',
                        render:function (data,type, JsonResultRow,meta) {
                            if (JsonResultRow.estado == 'En tramite'){
                                return '<span class="label label-warning"  style="font-size: 16px;">'+JsonResultRow.estado+'</span>\n'
                            }else{
                                return '<span class="label label-success"  style="font-size: 11px;">'+JsonResultRow.estado+'</span>\n'
                            }


                        }
                    },
                    {
                        data: "idcliente.apellidos",
                        render:function (data,type, JsonResultRow,meta) {
                            var datos = JsonResultRow.tramites_abono;
                            var ultimo = datos[datos.length-1].estado;

                            if (ultimo == 'Debe'){
                                return '<span class="label label-danger text-center" style="font-size: 16px;">'+ultimo+'</span>\n'
                            }else{
                                return '<span class="label label-success" style="font-size: 11px;">'+ultimo+'</span>\n'

                            }


                        }
                    },

                    { "width": "15%", data: 'created_at'},
                    {
                        data: "id_vendedor.apellidos",
                        render: function (data, type, JsonResultRow, meta) {
                            if (JsonResultRow.id_tipoTramite == 1){
                                return '<a href="/admin/factura/'+JsonResultRow.id+'" target="_blank" class="btn btn-xs btn-success btnEditarUsuario" ><i class="fa fa-print"></i></a>\n' +

                                    '<a href="/admin/info-venta/'+JsonResultRow.id+'" class="btn btn-xs btn-info btnInfoUsuario"><i class="fa fa-eye"></i></a>'
                            }else{
                                return '<a href="/admin/factura-licencia/'+JsonResultRow.id+'" target="_blank" class="btn btn-xs btn-success btnEditarUsuario" ><i class="fa fa-print"></i></a>\n' +
                                    '<a href="/admin/info-venta-licencia/'+JsonResultRow.id+'" class="btn btn-xs btn-info btnInfoUsuario"><i class="fa fa-eye"></i></a>'
                            }


                        }},

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
        }
        cargarTabla();


    </script>
    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
@endsection
@stop