@extends('admin.layout')

@section('header')
    <h1>
        Información del Tramite
        <small>Tramite</small>
        @if($abono->estado == 'Debe')
        <div class="alert alert-danger">{{$abono->estado}}</div>
        @endif
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Administrar Ventas</li>
        <li class="active">Info Venta</li>
    </ol>
@stop

@section('contenido')

    <!-- Main content -->
    @if($abono->estado == 'Debe')
    <section class="invoice" style="border-color: red">
    @else
        <section class="invoice">
        @endif   <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <img src="/adminlte/img/logo.png" width="7%" alt=""> Tramitaciones John Bolaños

                    <h3 class="pull-right"><strong>Codigo Venta</strong> <span
                                style="color: red !important;"><strong>TR-{{$infoVentaDatos->id}}
                                <div
                                        id="infoVentaClienteCodigoFactura"
                                        style="display: inline-block;"></div></strong></span>
                    </h3>
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <address>
                    <h4><strong>Tramitaciones John Bolaños</strong></h4>
                    OFI.Carrera 20 # 5-52 B/La Esmeralda<br>
                    <b>Tel:</b> 8396673<br>
                    <b>Cel 1:</b> 315 531-0563<br>
                    <b>Cel 2:</b> 323 447-0569<br>
                    <b>Email:</b> johnbtramitaciones@hotmail.com
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <address>
                    <h4><strong>Cliente</strong></h4>
                    <b>Nombre:</b>
                    {{$infoVentaDatos->idcliente->name}} {{$infoVentaDatos->idcliente->apellidos}}
                    <br>
                    <b>Identificación: </b>
                    {{$infoVentaDatos->idcliente->identificacion}}
                    <br>
                    <b>Tipo
                        Documento:</b> {{$infoVentaDatos->tipoIdentificacion($infoVentaDatos->idcliente->id_tipoIdentificacion)->documento}}

                    <br>
                    <b>Teléfono: </b>
                    {{$infoVentaDatos->idcliente->telefono}}
                    <br>
                    <b>Teléfono 2: </b>
                    @if($infoVentaDatos->idcliente->telefono_2 == null)
                        Numero no registrado
                    @endif
                    {{$infoVentaDatos->idcliente->telefono_2}}
                    <br>
                    <b>Email: </b>
                    {{$infoVentaDatos->idcliente->email}}
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <h4><strong>Tipo Tramite</strong></h4>
                <div style="padding-bottom: 5px">
                    <b>Estado: </b>
                    <span class="label label-success" style="font-size: 12px">{{$infoVentaDatos->estado}}</span>
                    <br>
                </div>
                <b>Tramite: </b>
                {{$infoVentaDatos->tipoTramite->nombre}}
                <br>
                <b>Fecha: </b>
                {{$infoVentaDatos->created_at}}
                <br>
                <b>Atendido Por: </b>
                {{$infoVentaDatos->idvendedor->name}}  {{$infoVentaDatos->idvendedor->apellidos}}
                <br>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped" id="table_info_venta">
                    <thead>
                    <tr>
                        <th>Cantidad</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($infoVentaDatos->segurosTramite as $infoVentaDato)
                        <tr id="info">
                            <td class="text-center">{{$infoVentaDatos->cantidad($infoVentaDato->id)[0]->cantidad}}</td>
                            <td>{{$infoVentaDatos->tipoVehiculoSeguro($infoVentaDato->idTipoVehiculo)->nombre}}</td>
                            <td>{{$infoVentaDato->cilindraje}}</td>
                            <td>$ <input disabled type="text" class="infoVentaPrecio" id="" value="{{$infoVentaDato->precio}}"
                                         style="width: 125px; border: 0; background: border-box;"></td>
                            <td>$ <input disabled type="text" class="infoVentaPrecioTotal" id=""
                                         value="{{$infoVentaDatos->cantidad($infoVentaDato->id)[0]->precio_cantidad}}"
                                         style="width: 125px; border: 0; background: border-box;"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <h5 class="lead">Nota:</h5>

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    @if($abono->nota == null)
                        Ninguna Observación...
                    @endif
                    {{$abono->nota}}
                </p>

            </div>
            <!-- /.col -->
            <div class="col-xs-6">
                <p class="lead">Ultima Actualizacion {{$abono->created_at->toFormattedDateString()}}</p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Ultimo Abono:</th>
                            <td>$<input disabled type="text" class="infoVentaAbono" id="" value="{{$abono->valor_abono}}"
                                        style="width: 125px; border: 0; background: border-box;"></td>
                            </td>
                        </tr>
                        <tr>
                            <th>Saldo:</th>
                            <td>$<input disabled type="text" class="infoVentaSaldo" id="" value="{{$abono->saldo}}"
                                        style="width: 125px; border: 0; background: border-box;"></td>
                                </td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>$ <input disabled type="text" class="infoVentaTotal" id="" value="{{$infoVentaDatos->total}}"
                                         style="width: 125px; border: 0; background: border-box;"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="/admin/recibo/{{$infoVentaDatos->id}}" target="_blank" class="btn btn-default pull-right "><i
                            class="fa fa-print"></i> Recibo</a>
                <a href="/admin/factura/{{$infoVentaDatos->id}}" target="_blank"
                   class="btn btn-default pull-right margin-r-5"><i class=" fa fa-file"></i> Factura</a>

                <button id="mostrar_historial" class="btn btn-danger pull-left margin-r-5"><i class=" fa fa-file"></i>
                    Financiación
                </button>

            </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <form class="form-pagar-abono"  method="post" action="{{route('agregarAbono')}}">
            @csrf
            <div id="historial_abonos" style="display: none;">
                <div class="box-header">
                    <hr>
                    <h1 class="box-title">Financiación</h1>
                    <div style="font-size: 50px;color: red" class="text-center">$ <input class="valorDeuda" disabled
                                                                                         type="text" value="{{$abono->saldo}}"
                                                                                         style="font-size: 50px; width: 310px;border: 0; background: border-box;color: red">
                        <input type="hidden" name="saldo" class="valorDeudaDB" value="{{$abono->saldo}}">
                        <input type="hidden" name="estadoSaldo" class="estadoSaldo" value="">
                        <input type="hidden" name="id_resumen_tramite" value="{{$infoVentaDatos->id}}">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <table id="table_clientes" class="table table-bordered table-striped">
                                    <thead>
                                    <tr class="text-center">
                                        <th class="text-center">Financiación</th>
                                        <th class="text-center">Saldo a la Fecha</th>
                                        <th class="text-center">Valor a Pagar</th>
                                        <th class="text-center">Método de Pago</th>
                                        <th class="text-center">Observación</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">$<input disabled type="text"
                                                                        class="valorFinanciacion text-center"
                                                                        value="{{$infoVentaDatos->total}}"
                                                                        style="width: 125px; border: 0; background: border-box;">
                                        </td>
                                        <td class="text-center">$<input disabled type="text"
                                                                        class="valorSaldo_a_la_fecha text-center"
                                                                        value="{{$abono->saldo}}"
                                                                        style="width: 125px; border: 0; background: border-box;">
                                        </td>
                                        <td class="text-center"><input type="text"
                                                                       class="form-control valor_a_pagar_financiacion"
                                                                       placeholder="$" ></td>
                                        <input type="hidden" name="abono" class="valorPagar" value="" id="valor_a_pagar_financiacion">
                                        <td class="text-center">
                                            <select class="form-control" id="nuevoMetodoPagoAbono" name="metodo_pago"
                                                    required>
                                                <option value="">Seleccione método de pago</option>
                                                <option value="efectivo">Efectivo</option>
                                                <option value="TC">Tarjeta Crédito</option>
                                                <option value="TD">Tarjeta Débito</option>
                                            </select>
                                        </td>
                                        <td class="text-center"><textarea name="nota" id="" cols="30"
                                                                          rows="2"></textarea></td>
                                        <input type="hidden" name="id_resumen_tramite" value="{{$infoVentaDatos->id}}">

                                    </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-block btn-success btn-pagar-abono">Pagar</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- Historial de Abonos -->
                <div id="" style="display: block;">
                    <div class="box-header">
                        <h1 class="box-title">Historial de Abonos</h1>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table id="table_clientes" class="table table-bordered table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th class="text-center">Couta</th>
                                            <th class="text-center">Pago</th>
                                            <th class="text-center">Saldo</th>
                                            <th class="text-center">Fecha Abono</th>
                                            <th class="text-center">Recibos</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php($numero = 1)
                                        @foreach($historialAbonos as $abono)

                                        <tr>
                                            <td class="text-center">{{$numero++}}</td>
                                            <td class="text-center">$<input disabled type="text"
                                                                            class="valorPagoHistorialAbonos text-center"
                                                                            value="{{$abono->valor_abono}}"
                                                                            style="width: 125px; border: 0; background: border-box;">
                                            </td>
                                            <td class="text-center">$<input disabled type="text"
                                                                            class="valorPagoHistorialSaldo text-center"
                                                                            value="{{$abono->saldo}}"
                                                                            style="width: 125px; border: 0; background: border-box;">

                                            <td class="text-center">{{$abono->created_at}}</td>
                                            <td class="text-center">
                                                <a href="/admin/factura-abono/{{$abono->id}}"  target="-_blank" class="btn btn-success"><i class="fa fa-file"></i></a>
                                                <a href="/admin/recibo-abono/{{$abono->id}}" target="-_blank" class="btn btn-danger"><i class="fa fa-print"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button id="ocultar_historial" type="button"
                                    class="btn btn-danger btn-block pull-right margin">Ocultar
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </section>


@stop