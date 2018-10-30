@extends('admin.layout')

@section('header')
    @if(!isset($infoCliente->idcliente->id))
        <h3>No exiten tramites asociados</h3>
    @else
        <h1>
            <strong>Todos los tramites de:</strong>
          
        </h1>
    <h3>{{$infoCliente->idcliente->name}} {{$infoCliente->idcliente->apellidos}}</h3>
    @endif
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Administrar</li>
    </ol>
@stop

@section('contenido')
    @if(isset($infoCliente->idcliente->id))
    <div class="box box-primary">

        <div class="box-header">
            <div class="form-group">
                <h3 class="box-title">Listado de Tramites</h3>
            </div>
        </div>

        <div class="box-body table-responsive ">
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
@endif


    <!-- TABLA DINAMICA Clientes-->
@section('dataTablesTramitesTramitador')
    @if(isset($infoCliente->idcliente->id))
    <script>

        var table = $('.table_admiVentas').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [[ 0, "desc" ]],
            "data": null,
            "ajax": "{{route('tablaTramitesCliente',$infoCliente->idcliente->id)}}",
            "columns":[
                {data: 'id',defaultContent:'<span class="label label-danger text-center">Ningún valor por defecto</span>'},
                {data: 'idcliente.identificacion',defaultContent:'<span class="label label-danger text-center">Ningún valor por defecto</span>'},
                {"width": "20%",
                    render:function (data,type, JsonResultRow,meta) {
                        return '<p>'+JsonResultRow.idcliente.name+' '+JsonResultRow.idcliente.apellidos+'</p>'
                    }
                },
                {"width": "20%",
                    render:function (data,type, JsonResultRow,meta) {
                        return '<p>'+JsonResultRow.id_vendedor.name+' '+JsonResultRow.id_vendedor.apellidos+'</p>'
                    }
                },
                {data: 'tipo_tramite.nombre',defaultContent:'<span class="label label-danger text-center">Ningún valor por defecto</span>'},

                {
                    render:function (data,type, JsonResultRow,meta) {
                        if (JsonResultRow.estado == 'En tramite'){
                            return '<span class="label label-warning"  style="font-size: 16px;">'+JsonResultRow.estado+'</span>\n'
                        }else{
                            return '<span class="label label-success"  style="font-size: 11px;">'+JsonResultRow.estado+'</span>\n'
                        }


                    }
                },
                {
                    render:function (data,type, JsonResultRow,meta) {
                        var datos = JsonResultRow.tramites_abono;
                        console.log(datos);
                        var ultimo = datos[datos.length-1].estado;

                        if (ultimo == 'Debe'){
                            return '<span class="label label-danger text-center" style="font-size: 16px;">'+ultimo+'</span>\n'
                        }else{
                            return '<span class="label label-success" style="font-size: 11px;">'+ultimo+'</span>\n'

                        }


                    }
                },

                { "width": "15%", data: 'created_at',defaultContent:'<span class="label label-danger text-center">Ningún valor por defecto</span>'},
                {render: function (data, type, JsonResultRow, meta) {
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

        //INFORMACION DE LA VENTA
        $('.table_admiVentas tbody').on('click','.btnInfoUsuario',function () {
            var data = table.row($(this).parents('tr')).data();
            console.log(data);
            $('#infoVentaClienteCodigoFactura').html(data.id);

            $('#infoVentaClienteNombre').html(data.idcliente.name);
            $('#infoVentaClienteApellidos').html(data.idcliente.apellidos);
            $('#infoVentaClienteIdentificacion').html(data.idcliente.identificacion);
            $('#infoVentaClienteTelefono').html(data.idcliente.telefono);
            $('#infoVentaClienteEmail').html(data.idcliente.email);

            $('#infoVentaClienteTramite').html(data.tipo_tramite.nombre);
            $('#infoVentaClienteFecha').html(data.created_at);
            $('#infoVentaClienteVendedorNombre').html(data.id_vendedor.name);
            $('#infoVentaClienteVendedorApellidos').html(data.id_vendedor.apellidos);

        });

    </script>
    @endif

@endsection

@stop