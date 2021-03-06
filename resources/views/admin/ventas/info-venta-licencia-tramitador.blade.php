@extends('admin.layout')

@section('header')
    <h1>
        <strong>Información del Trámite</strong>
        <small>Trámite</small>
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
@php
    $totalMedico = $infoVentaDatos->descuento_medico*$precioMedico->valor;
    $totalRecibo = $infoVentaDatos->descuento_recibos*$recibo->valor;
    $valorEscuela = $infoVentaDatos->descuento_escuela*$precioEscuela->valor;
@endphp
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
                                <h4 class="inline"><strong>Estado: </strong></h4>
                                @if($infoVentaDatos->estado == 'En tramite')
                                    <span class="label label-warning inline"
                                          style="font-size: 14px">{{$infoVentaDatos->estado}}</span>
                                @else
                                    <span class="label label-success inline"
                                          style="font-size: 14px">{{$infoVentaDatos->estado}}</span>
                                @endif
                                <br>
                            </div>
                            <b>Metodo Pago: </b>
                            {{$infoVentaDatos->metodo_pago}}
                            <br>
                            <b>Tramite: </b>
                            {{$infoVentaDatos->tipoTramite->nombre}}
                            <br>
                            <b>Fecha: </b>
                            {{$infoVentaDatos->created_at->format('l jS \\of F Y h:i:s A')}}
                            <br>
                            @if(isset($infoVentaDatos->idtramitador->name) & isset($infoVentaDatos->idtramitador->apellidos))
                                <b>Tramidor: </b>
                                {{$infoVentaDatos->idtramitador->name}}  {{$infoVentaDatos->idtramitador->apellidos}}
                                <br>
                            @else
                                <b>Tramidor: </b>
                                Ningún Tramitador
                                <br>
                            @endif
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
                                    <th>Categoria</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($totalLicencia = 0)
                                @foreach($infoVentaDatos->licenciaTramite as $infoVentaDato)
                                    @php($tramite = $infoVentaDatos->sinEscuelaResumen($infoVentaDato->id)[0])
                                    <tr id="info">
                                        <td class="text-center">{{$tramite->cantidad}}</td>
                                        <td>{{$infoVentaDato->tipo_licencia}}</td>
                                        <td>{{$infoVentaDato->categoria}}
                                        </td>
                                        <td>$ <input disabled type="text" class="infoVentaPrecio" id=""
                                                     value="{{ $infoVentaDato->precio }}"
                                                     style="width: 125px; border: 0; background: border-box;"></td>
                                        <td>$ <input disabled type="text" class="infoVentaPrecioTotal" id=""
                                                     value="{{$tramite->precio_venta}}"
                                                     style="width: 125px; border: 0; background: border-box;">
                                            @if($tramite->validar_curso !== 0)
                                                <span class="label label-danger" style="font-size: 10px">
                                                <i class="fa fa-car"></i> con Curso
                                             </span>
                                            @endif

                                        </td>
                                    </tr>
                                    @php($totalLicencia += $tramite->precio_venta)
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


                            <div class="estados-tramite form-group">
                                <h5 class="lead">Procesos:</h5>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div><br/>
                                @endif
                            <!-- ACTUALIZAR SI HA REALIZADO EL EXAMEN MEDICO -->
                                <form id="frmUpdateMedico" method="post" class="actualizarMedico inline">
                                    @csrf {{method_field('PUT')}}
                                    <label>
                                        <input id="checkProcesosMedico" class="checkLicenciaMedico checkProcesosMedico"
                                               type="checkbox"
                                               name="examen_medico" idResumen="{{ $infoVentaDatos->id }}"
                                                {{ $infoVentaDatos->examen_medico === 'Realizado' ? 'checked':''}}>&nbsp
                                        <span
                                                class="label label-info" style="font-size: 12px"><i
                                                    class="fa fa-medkit"></i> Examen Médico</span>
                                    </label>

                                    <!-- MODAL CAPTCHA -->
                                    <div class="modal fade" data-backdrop="static" data-keyboard="false"
                                         id="modalCaptchaMedico" tabindex="-1" role="dialog"
                                         aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #FFFFFF;">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="box-body">
                                                        <label for="ReCaptcha">Por favor valide si el Usuario ha hecho
                                                            el examen médico:</label>
                                                        {!! NoCaptcha::renderJs() !!}
                                                        {!! NoCaptcha::display() !!}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="/admin/info-venta-licencia/{{$infoVentaDatos->id}}"
                                                           class="btn btn-default">
                                                            Cerrar
                                                        </a>
                                                        <button type="submit"
                                                                class="btn btn-info btn-actualizarExamenMedico"><i
                                                                    class="fa fa-medkit"></i> Validar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @if( isset($infoVentaDatos->sinEscuela($infoVentaDatos->id)[1]->validar_curso))
                                @php($totalEscuela = ($infoVentaDatos->sinEscuela($infoVentaDatos->id)[0]->validar_curso) + $infoVentaDatos->sinEscuela($infoVentaDatos->id)[1]->validar_curso)
                                    @if($totalEscuela == 1  or $totalEscuela == 0 )
                                        <form id="frmUpdateConducción" method="post" action="" class="inline">
                                            @csrf {{method_field('PUT')}}
                                            <label>
                                                <input id="checkProcesosConduccion" idResumen="{{ $infoVentaDatos->id }}"
                                                       class="checkLicencia checkProcesosConduccion" type="checkbox"
                                                       name="escuela_conduccion"
                                                        {{ $infoVentaDatos->escuela_conduccion === 'Realizado' ? 'checked':''}}>&nbsp
                                                <span class="label label-danger" style="font-size: 12px"><i
                                                            class="fa fa-car"></i> Escuela de Conducción</span>
                                            </label>


                                            <!-- MODAL CAPTCHA -->
                                            <div class="modal fade" data-backdrop="static" data-keyboard="false"
                                                 id="modalCaptchaConduccion" tabindex="-1" role="dialog"
                                                 aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background-color: #FFFFFF;">

                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="box-body">
                                                                <label for="ReCaptcha">Por favor valide si el Usuario ha
                                                                    realizado Escuela de Conduccion:</label>
                                                                {!! NoCaptcha::renderJs() !!}
                                                                {!! NoCaptcha::display() !!}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="/admin/info-venta-licencia/{{$infoVentaDatos->id}}"
                                                                   class="btn btn-default">
                                                                    Cerrar
                                                                </a>
                                                                <button type="submit" class="btn btn-danger "><i
                                                                            class="fa fa-car"></i> Validar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                @else
                                    @php($totalEscuela = ($infoVentaDatos->sinEscuela($infoVentaDatos->id)[0]->validar_curso))
                                    @if($totalEscuela == 0)
                                        <form id="frmUpdateConducción" method="post" action="" class="inline">
                                            @csrf {{method_field('PUT')}}
                                            <label>
                                                <input id="checkProcesosConduccion" idResumen="{{ $infoVentaDatos->id }}"
                                                       class="checkLicencia checkProcesosConduccion" type="checkbox"
                                                       name="escuela_conduccion"
                                                        {{ $infoVentaDatos->escuela_conduccion === 'Realizado' ? 'checked':''}}>&nbsp
                                                <span class="label label-danger" style="font-size: 12px"><i
                                                            class="fa fa-car"></i> Escuela de Conducción</span>
                                            </label>


                                            <!-- MODAL CAPTCHA -->
                                            <div class="modal fade" data-backdrop="static" data-keyboard="false"
                                                 id="modalCaptchaConduccion" tabindex="-1" role="dialog"
                                                 aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background-color: #FFFFFF;">

                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="box-body">
                                                                <label for="ReCaptcha">Por favor valide si el Usuario ha
                                                                    realizado Escuela de Conduccion:</label>
                                                                {!! NoCaptcha::renderJs() !!}
                                                                {!! NoCaptcha::display() !!}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="/admin/info-venta-licencia/{{$infoVentaDatos->id}}"
                                                                   class="btn btn-default">
                                                                    Cerrar
                                                                </a>
                                                                <button type="submit" class="btn btn-danger "><i
                                                                            class="fa fa-car"></i> Validar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                @endif

                                <form id="frmUpdateDerechos" action="" class="inline" method="post">
                                    @csrf {{method_field('PUT')}}
                                    <label>
                                        <input id="checkProcesosRecibos" idResumen="{{ $infoVentaDatos->id }}"
                                               class="checkLicencia checkProcesosRecibos" type="checkbox"
                                               name="derechos_transito"
                                                {{ $infoVentaDatos->derechos_transito === 'Realizado' ? 'checked':''}}>&nbsp
                                        <span class="label label-warning" style="font-size: 12px"><i
                                                    class="fa fa-newspaper-o"></i> Derechos Transito</span>
                                    </label>


                                    <!-- MODAL CAPTCHA -->
                                    <div class="modal fade" data-backdrop="static" data-keyboard="false"
                                         id="modalCaptchaDerechos" tabindex="-1" role="dialog"
                                         aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #FFFFFF;">

                                                </div>
                                                <div class="modal-body">
                                                    <div class="box-body">
                                                        <label for="ReCaptcha">Por favor valide si el Usuario ha
                                                            recibido los Recibos de Transito:</label>
                                                        {!! NoCaptcha::renderJs() !!}
                                                        {!! NoCaptcha::display() !!}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="/admin/info-venta-licencia/{{$infoVentaDatos->id}}"
                                                           class="btn btn-default">
                                                            Cerrar
                                                        </a>
                                                        <button type="submit" class="btn btn-warning "><i
                                                                    class="fa fa-newspaper-o"></i> Validar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>


                        </div>

                        <!-- /.col -->
                        <div class="col-xs-6">
                            <p class="lead">Ultima Actualizacion {{$abono->created_at->toFormattedDateString()}}</p>

                            <div class="table-responsive">
                                <table class="table">
                                    @if($abono->valor_abono > 0)
                                        <tr>
                                            <th style="width:50%">Ultimo Abono:</th>
                                            <td>$ <input disabled type="text" class="infoVentaAbono" id=""
                                                         value="{{$abono->valor_abono}}"
                                                         style="width: 125px; border: 0; background: border-box;"></td>
                                            </td>
                                        </tr>
                                    @endif
                                    @if($abono->saldo > 0)
                                        <tr>
                                            <th>Saldo:</th>
                                            <td>$ <input disabled type="text" class="infoVentaSaldo" id=""
                                                         value="{{$abono->saldo}}"
                                                         style="width: 125px; border: 0; background: border-box;"></td>
                                            </td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <th>Costo:</th>
                                        <td>$ <input disabled type="text" class="infoVentaSaldo" id=""
                                                     value="{{$totalLicencia}}"
                                                     style="width: 125px; border: 0; background: border-box;"></td>
                                        </td>
                                    </tr>
                                    @if($infoVentaDatos->descuento_medico !== 0)
                                        <tr>
                                            <th><span class="label label-info"
                                                      style="font-size: 12px">Examén Medico:</span></th>
                                            <td>$ <input disabled type="text" class="infoVentaSaldo" id=""
                                                         value="{{$totalMedico}}"
                                                         style="width: 125px; border: 0; background: border-box;"></td>
                                            </td>
                                        </tr>
                                    @endif
                                    @if($infoVentaDatos->descuento !== 0)
                                        @php($totalDescuento=$totalLicencia-$totalMedico-$totalRecibo-$valorEscuela-$infoVentaDatos->total)
                                        <tr>
                                            <th><span class="label label-success" style="font-size: 12px">Descuento Especial:</span>
                                            </th>
                                            <td>$ <input disabled type="text" class="infoVentaSaldo" id=""
                                                         value="{{ $totalDescuento }}"
                                                         style="width: 125px; border: 0; background: border-box;"></td>
                                            </td>
                                        </tr>
                                    @endif

                                    @if($infoVentaDatos->descuento_escuela !== 0)
                                        <tr>
                                            <th><span class="label label-danger" style="font-size: 12px">Escuela:</span>
                                            </th>
                                            <td>
                                                $ <input disabled type="text" class="infoVentaSaldo" id=""
                                                            value="{{$valorEscuela}}"
                                                            style="width: 125px; border: 0; background: border-box;">
                                            </td>
                                        </tr>
                                    @endif
                                    @if($infoVentaDatos->descuento_recibos !== 0)
                                        <tr>
                                            <th><span class="label label-warning" style="font-size: 12px">Derechos Transito</span>
                                            </th>
                                            <td>
                                                $ <input disabled type="text" class="infoVentaSaldo" id=""
                                                            value="{{$totalRecibo}}"
                                                            style="width: 125px; border: 0; background: border-box;">
                                            </td>
                                        </tr>
                                    @endif

                                    <tr>
                                        <th>Total Tramite:</th>
                                        <td>$ <input disabled type="text" class="infoVentaTotal" id=""
                                                     value="{{$infoVentaDatos->total}}"
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
                            <a href="/admin/recibo-licencia/{{$infoVentaDatos->id}}" target="_blank"
                               class="btn btn-default pull-right "><i
                                        class="fa fa-print"></i> Recibo</a>
                            <a href="/admin/factura-licencia/{{$infoVentaDatos->id}}" target="_blank"
                               class="btn btn-default pull-right margin-r-5"><i class=" fa fa-file"></i> Factura</a>

                            <button id="mostrar_historial" class="btn btn-danger pull-left margin-r-5"><i
                                        class=" fa fa-file"></i>
                                Financiación
                            </button>

                        </div>
                    </div>
                    <!-- /.content -->
                    <div class="clearfix"></div>
                    <form class="form-pagar-abono" method="post" action="{{route('agregarAbono')}}">
                        @csrf
                        <div id="historial_abonos" style="display: none;">
                            <div class="box-header">
                                <hr>
                                <h1 class="box-title">Financiación</h1>
                                <div style="font-size: 50px;color: red" class="text-center">$ <input
                                            class="valorDeuda" disabled
                                            type="text" value="{{$abono->saldo}}"
                                            style="font-size: 50px; width: 310px;border: 0; background: border-box;color: red">
                                    <input type="hidden" name="saldo" class="valorDeudaDB"
                                           value="{{$abono->saldo}}">
                                    <input type="hidden" name="estadoSaldo" class="estadoSaldo" value="">
                                    <input type="hidden" name="id_resumen_tramite" value="{{$infoVentaDatos->id}}">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 table-responsive">
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
                                                                                   id="valor_a_pagar_financiacion"
                                                                                   class="form-control valor_a_pagar_financiacion"
                                                                                   placeholder="$"></td>
                                                    <input type="hidden" name="abono" class="valorPagar" value=""
                                                           id="valor_a_pagar_financiacion">
                                                    <td class="text-center">
                                                        <select class="form-control" id="nuevoMetodoPagoAbono"
                                                                name="metodo_pago"
                                                                required>
                                                            <option value="">Seleccione método de pago</option>
                                                            <option value="Efectivo">Efectivo</option>
                                                            <option value="TC">Tarjeta Crédito</option>
                                                            <option value="TD">Tarjeta Débito</option>
                                                        </select>
                                                        <input type="number" id=""
                                                               class="form-control inputMetodoPagoAbono"
                                                               placeholder="Código de transacción"
                                                               style="margin-top: 9px; display: none">
                                                        <input type="hidden" id="listaMetodoPagoLicenciaAbono"
                                                               name="listaMetodoPagoAbono">
                                                    </td>
                                                    <td class="text-center"><textarea name="nota" id="" cols="30"
                                                                                      rows="2"></textarea></td>
                                                    <input type="hidden" name="id_resumen_tramite"
                                                           value="{{$infoVentaDatos->id}}">

                                                </tr>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-block btn-success btn-pagar-abono">
                                                Pagar
                                            </button>
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
                                            <div class="col-lg-12 table-responsive">
                                                <table id="table_clientes"
                                                       class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th class="text-center">Couta</th>
                                                        <th class="text-center">Pago</th>
                                                        <th class="text-center">Saldo</th>
                                                        <th class="text-center">Fecha Abono</th>
                                                        <th class="text-center">Acciones</th>


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
                                                                <a href="/admin/factura-abono-licencia/{{$abono->id}}"
                                                                   class="btn btn-success" target="_blank"><i
                                                                            class="fa fa-file"></i></a>
                                                                <a href="/admin/recibo-abono-licencia/{{$abono->id}}"
                                                                   target="-_blank" class="btn btn-danger"><i
                                                                            class="fa fa-print"></i></a>
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