@extends('admin.layout')

@section('header')
    <h1>

        <strong>Trámites de Transito</strong>
        <small>Transito</small>
    </h1>
    <ol class="breadcrumb">
        {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
        {{--<li class="active">Ini</li>--}}
    </ol>
@stop

@section('contenido')

    <div class="row">

        <!--=====================================
        EL FORMULARIO
        ======================================-->
        <form role="form" method="post" class="formularioVentaTramTrans" action="{{route( 'ventaTramiTransito') }}">
            @csrf
            <div class="col-lg-6 col-xs-12">

                <div class="box box-success">

                    <div class="box-header">
                        <div class="form-group">
                            <h3 class="box-title">Venta</h3>
                        </div>
                        <a href="{{route('adminVentas')}}" class="btn btn-primary pull-right" data-toggle="modal">
                            <i class="fa fa-dollar"></i> Administrar Tramites
                        </a>
                    </div>
                    <div class="box-body">

                        <div class="box">

                            <!--=====================================
                            ENTRADA DEL VENDEDOR
                            ======================================-->

                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                    <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor"
                                           value="{{auth()->user()->name}} {{auth()->user()->apellidos}}" readonly>
                                    <input type="hidden" name="idVendedor" value="{{auth()->user()->id}}">

                                </div>

                            </div>

                            <!--=====================================
                            ENTRADA DEL VENDEDOR
                            ======================================-->

                            <div class="form-group">
                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    @if(empty($codigoFactura->id) )
                                        <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta"
                                               value="TR-1" readonly>
                                        <input type="hidden" name="id_resumen_tramite" value="1">
                                    @else
                                        @php($factura = $codigoFactura->id + 1)
                                        <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta"
                                               value="TR-{{$factura}}" readonly>
                                        <input type="hidden" name="id_resumen_tramite" value="{{$factura}}">
                                    @endif
                                </div>
                            </div>

                            <!--=====================================
                            ENTRADA DEL CLIENTE
                            ======================================-->
                            <div class="form-group" id="ingresarClienteVenta">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                    <input type="number" class="form-control inputBuscarCliente" value=""
                                           placeholder="digite numero de cedula">

                                    {{--<select class="form-control" id="seleccionarClienteSeguro" name="seleccionarClienteSeguro"
                                            required>

                                        <option value="">Seleccionar cliente</option>
                                        @foreach($clientes as $cliente)
                                            <option class="text-uppercase"
                                                    {{old('seleccionarCliente')==$cliente->id ? 'selected':''}} value="{{$cliente->id}}">{{$cliente->name}} {{$cliente->apellidos}}</option>

                                        @endforeach

                                    </select>--}}

                                    <button style="display: none;" type="button" class="btn btn-default btn-xs"

                                            data-target="#modalAgregarCliente"
                                            data-dismiss="modal" id="btnAgregarCliente">Agregar cliente
                                    </button>
                                    </span>

                                </div>

                            </div>
                            <div>
                                <div class="box" id="tablaMostrarCliente">
                                    <div class="box-header">
                                        <h3 class="box-title">Cliente</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <table class="table table-striped">
                                            <tr>
                                                <th style="width: 70px">Nombre</th>
                                                <th style="width: 30px">Identificacion</th>
                                                <th style="width: 50px">Más Info</th>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <input disabled id="nombreCliente" class=""
                                                           style="width: 190px; border: 0; background: border-box;">
                                                </td>

                                                </td>
                                                <td>
                                                    <input disabled id="identificacionCliente" class=""
                                                           style="width: 125px; border: 0; background: border-box;">
                                                </td>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-xs btn-info btnEditarCliente"
                                                            data-target="#modalEditarCliente" data-toggle="modal"><i
                                                                class="fa fa-eye"></i></button>
                                                </td>
                                            </tr>
                                            <input type="hidden" id="idCliente" name="idCliente" value="">
                                            <input type="hidden" name="id_tipoTramite" value="3">


                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>

                            <!--=====================================
                            ENTRADA PARA AGREGAR PRODUCTO
                            ======================================-->

                            <div class="form-group row nuevoSeguro" id="contenedorSeguro">


                            </div>

                            <!--=====================================
                            BOTÓN PARA AGREGAR PRODUCTO
                            ======================================-->

                            <button type="button" class="btn btn-default hidden-lg btnAgregarProducto"> Agregar
                                producto
                            </button>

                            <hr>
                            <!-- TABLA PARA MOSTRAR LA VENTA -->

                            {{--   <div class="box" id="tablamostrarVentaAlerta">
                                   <!-- /.box-header -->
                                   <div class="box-body no-padding">
                                       <table class="table table-striped">
                                           <tr>
                                               <th style="width: 50px" >Cantidad</th>
                                               <th style="width: 30px">tipo</th>
                                               <th style="width: 50px">Descripcion</th>
                                               <th style="width: 50px">Precio</th>
                                               <th style="width: 50px">Total</th>
                                           </tr>


                                           <tr>
                                               <td >


                                               </td>

                                           </tr>
                                           <input type="hidden" id="idCliente" name="idCliente" value="">
                                           <input type="hidden" name="id_tipoTramite" value="1">


                                       </table>
                                   </div>
                                   <!-- /.box-body -->
                               </div>--}}


                            <div class="row">
                                <div class="col-xs-12">
                                    <button id="btn-mostrarAbono" class="btn btn-block btn-success">Abono</button>
                                    <button id="btn-cancelarAbono" class="btn btn-block btn-danger"
                                            style="display: none">Cancelar Abono
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <!--=====================================
                                ENTRADA IMPUESTOS Y TOTAL
                                ======================================-->

                                <div class="col-xs-8 pull-right">

                                    <table class="table">

                                        <thead>

                                        <tr>
                                            <th id="titulo-tabla-abono" style="display: none">Abono</th>
                                            <th>Total</th>

                                        </tr>

                                        </thead>

                                        <tbody>

                                        <tr>
                                            <!-- Input Abono -->
                                            <td id="campo-ingresar-abono" style="width: 50%; display: none">

                                                <div class="input-group">

                                                    <input type="number" class="form-control input-lg inputAbono"
                                                           min="0"
                                                           id="" name="abono" value="0"
                                                           placeholder="Abono" required>
                                                    <span class="input-group-addon"><i
                                                                class="ion ion-social-usd"></i></span>

                                                </div>

                                            </td>

                                            <td style="width: 50%">

                                                <div class="input-group">

                                                    <span class="input-group-addon"><i
                                                                class="ion ion-social-usd"></i></span>

                                                    <input type="text"
                                                           class="form-control nuevoTotalVentaTramiTra input-lg"
                                                           id="nuevoTotalVentaTramiTra" name=""
                                                           placeholder="" required>

                                                    <input type="hidden" class="totalVentaDBTransi" name="total"
                                                           id="totalVentaDBTransi">
                                                    <input type="hidden" name="estado" value="Entregado">
                                                    <div id="camposSaldosSeguro">
                                                        <input type="hidden" name="saldo" id="saldoVentaPrincipalSeguro"
                                                               value="0">
                                                        <input type="hidden" id="estadoSaldoSeguro" name="estadoSaldo"
                                                               value="Cancelado">

                                                    </div>


                                                </div>

                                            </td>

                                        </tr>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                            <hr>

                            <!--=====================================
                            ENTRADA MÉTODO DE PAGO
                            ======================================-->

                            <div class="form-group row">

                                <div class="col-xs-6" style="padding-right:0px">

                                    <div class="input-group">

                                        <select class="form-control" id="nuevoMetodoPago" name="metodo_pago"
                                                required>
                                            <option value="">Seleccione método de pago</option>
                                            <option value="Efectivo">Efectivo</option>
                                            <option value="TC">Tarjeta Crédito</option>
                                            <option value="TD">Tarjeta Débito</option>
                                        </select>

                                    </div>

                                </div>
                                <input type="hidden" id="listaMetodoPago" name="listaMetodoPago">
                                <div class="cajasMetodoPago">

                                </div>


                            </div>


                        </div>

                    </div>

                    <div class="box-footer">

                        <button type="submit" class="btn btn-primary pull-right crearVentaTrans">Crear Venta</button>

                    </div>


                </div>

            </div>

            <!--=====================================
            LA TABLA DE PRODUCTOS
            ======================================-->

            <div class="col-lg-6 hidden-md hidden-sm hidden-xs">

                <div class="box box-warning">

                    <div class="box-header">
                        <div class="form-group">
                            <h3 class="box-title">Información del Tramite</h3>
                        </div>
                    </div>


                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group {{$errors->has('id_vehiculo')? 'has-error':''}}">
                                    <label for=""><span class="text-danger">*</span> Tipo de Vehiculo</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                        <select name="id_vehiculo" id="id_vehiculo"
                                                class="form-control">
                                            <option value="">Seleccione</option>
                                            @foreach($tipoVehiculos as $tipoVehiculo)
                                                <option class="text-uppercase"
                                                        {{old('id_vehiculo')==$tipoVehiculo->id ? 'selected':''}} value="{{$tipoVehiculo->id}}">{{$tipoVehiculo->nombre}}</option>

                                            @endforeach

                                        </select>
                                        {!! $errors->first('id_vehiculo','<span class="help-block">Seleccione Tipo</span>')!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{$errors->has('id_transito')? 'has-error':''}}">
                                    <label for=""><span class="text-danger">*</span> Ciudad</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa  fa-compass"></i></span>
                                        <select name="id_transito" id="id_transito"
                                                class="form-control select2" style="width: 100%">
                                            <option value="">Seleccione</option>
                                            @foreach($transitos as $transito)
                                                <option class="text-uppercase"
                                                        {{old('id_transito')==$transito->id ? 'selected':''}} value="{{$transito->id}}">{{$transito->ciudad}}</option>

                                            @endforeach

                                        </select>
                                        {!! $errors->first('id_transito','<span class="help-block">Seleccione Tipo</span>')!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{$errors->has('placa')? 'has-error':''}}">
                                    <label for=""><span class="text-danger">*</span> Número de Placa</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                                        <input value="{{old('placaCarro')}}" id="placaCarro" type="text" name="placa"
                                               class="form-control"
                                               placeholder="Ingrese placa">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{$errors->has('id_servicio')? 'has-error':''}}">
                                    <label for=""><span class="text-danger">*</span> Tipo de Servicio</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                        <select name="id_servicio" id="id_servicio"
                                                class="form-control">
                                            <option value="">Seleccione</option>
                                            @foreach($tipoServicios as $tipoServicio)
                                                <option class="text-uppercase"
                                                        {{old('id_servicio')==$tipoServicio->id ? 'selected':''}} value="{{$tipoServicio->id}}">{{$tipoServicio->servicio}}</option>

                                            @endforeach

                                        </select>
                                        {!! $errors->first('id_documento','<span class="help-block">Seleccione Tipo</span>')!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>Observación</label>
                                    <textarea class="form-control" name="nota" cols="10" rows="4"
                                              placeholder="Si es necesario, escriba observación"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4><strong>Seleccione los tramites a realizar</strong></h4>
                        <div class="row">
                            @foreach($tipoTrTransitos as $tipoTrTransito)
                                <div class="col-xs-4">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input value="{{ $tipoTrTransito->id }}" type="checkbox"
                                                   name="tipoTramiteTransi[]"><span> {{ $tipoTrTransito->nombre }}</span>
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </div>

    <!-- MODAL AGREGAR CLIENTE -->
    <div class="modal fade " id="modalAgregarCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #056F00;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF"><i class="fa fa-plus"></i>Agregar
                        Cliente </h4>
                </div>
                <form method="post" action="{{route('clienteAgregado')}}" class="form-cliente-creado">
                    @csrf
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Nombres</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input value="{{old('name')}}" type="text" name="name" class="form-control"
                                           placeholder="Ingrese nombre">
                                    {!! $errors->first('name','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('apellidos')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Apellidos</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input value="{{old('apellidos')}}" type="text" name="apellidos"
                                           class="form-control"
                                           placeholder="Ingrese apellidos">
                                    {!! $errors->first('apellidos','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>

                            <div class="form-group {{$errors->has('id_tipoIdentificacion')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Tipo de Documento</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                    <select name="id_tipoIdentificacion" id="id_tipoIdentificacion"
                                            class="form-control">
                                        <option value="">Seleccione</option>
                                        @foreach($tipoDocumento as $tipoDocumentos)
                                            <option class="text-uppercase"
                                                    {{old('id_tipoIdentificacion')==$tipoDocumentos->id ? 'selected':''}} value="{{$tipoDocumentos->id}}">{{$tipoDocumentos->documento}}</option>

                                        @endforeach

                                    </select>
                                    {!! $errors->first('id_documento','<span class="help-block">Seleccione Tipo</span>')!!}
                                </div>
                            </div>

                            <div class="form-group {{$errors->has('identificacion')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Documento</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input value="{{old('identificacion')}}" id="txtIdentificacionCliente" type="number"
                                           name="identificacion" class="form-control"
                                           placeholder="Ingrese documento">
                                    {!! $errors->first('identificacion','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input value="{{old('email')}}" type="email" name="email"
                                           class="form-control emailAgregarUsuario"
                                           placeholder="Ingrese Email">
                                    {!! $errors->first('email','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('telefono')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Teléfono</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input value="{{old('telefono')}}" type="text" name="telefono" class="form-control"
                                           data-inputmask='"mask": "(999) 999-9999"'
                                           data-mask placeholder="Ingrese teléfono">
                                    {!! $errors->first('telefono','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('telefono_2')? 'has-error':''}}">
                                <label for="">Teléfono 2</label><span class="help-block inline"> (Opcional)</span>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input value="{{old('telefono_2')}}" id="" type="text" name="telefono_2"
                                           class="form-control"
                                           data-inputmask='"mask": "(999) 999-9999"'
                                           data-mask placeholder="Ingrese teléfono 2">
                                    {!! $errors->first('telefono_2','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            {{--<div class="form-group">
                                <div class="row">
                                    <div class="col-md-8 text-center">

                                        <div class="text-center dropzone dz-clickable" id="f_foto"
                                             style="width: 100%; margin: auto;">
                                            <div class="text-center dz-default dz-message" data-dz-message=""
                                                 style="margin-top: -13px !important;">
                                                <span><img width="100%" src="/adminlte/img/fondo_perfil.png"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>--}}
                            <input type="hidden" id="rol_cliente_seguro" value="4" name="rol">
                        </div>
                    </div>
                    <input type="hidden" value="{{auth()->user()->id}}" name="id_vendedor">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Agregar Cliente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL EDITAR CLIENTE -->
    <div class="modal fade " id="modalEditarCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #056F00;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF"><i class=""></i>Informacion Cliente
                    </h4>
                </div>
                <form id="form_actualizar_cliente" class="actualizarClienteForm" method="post" action="">
                    @csrf {{method_field('PUT')}}
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                                <label for="">Nombres</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="txtEditarNombreCliente" value="{{old('name')}}" type="text" name="name"
                                           class="form-control"
                                           placeholder="Ingrese nombre" disabled>
                                    {!! $errors->first('name','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('apellidos')? 'has-error':''}}">
                                <label for="">Apellidos</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input value="{{old('apellidos')}}" id="txtEditarApellidosCliente" type="text"
                                           name="apellidos" class="form-control"
                                           placeholder="Ingrese apellidos" disabled>
                                    {!! $errors->first('apellidos','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>

                            <div class="form-group {{$errors->has('id_tipoIdentificacion')? 'has-error':''}}">
                                <label for="">Tipo de Documento</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                    <select name="id_tipoIdentificacion" id="txtEditartipoIdentificacionCliente"
                                            class="form-control" disabled>
                                        <option value="">Seleccione</option>
                                        @foreach($tipoDocumento as $tipoDocumentos)
                                            <option class="text-uppercase"
                                                    {{old('id_tipoIdentificacion')==$tipoDocumentos->id ? 'selected':''}} value="{{$tipoDocumentos->id}}">{{$tipoDocumentos->documento}}</option>

                                        @endforeach

                                    </select>
                                    {!! $errors->first('id_documento','<span class="help-block">Seleccione Tipo</span>')!!}
                                </div>
                            </div>

                            <div class="form-group {{$errors->has('identificacion')? 'has-error':''}}">
                                <label for="">Documento</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input value="{{old('identificacion')}}" disabled
                                           id="txtEditarIdentificacionCliente" type="number" name="identificacion"
                                           class="form-control"
                                           placeholder="Ingrese documento">
                                    {!! $errors->first('identificacion','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                <label for="">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input value="{{old('email')}}" disabled id="txtEditarEmailCliente" type="email"
                                           name="email" class="form-control" placeholder="Ingrese Email">
                                    {!! $errors->first('email','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('telefono')? 'has-error':''}}">
                                <label for="">Teléfono</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input value="{{old('telefono')}}" disabled id="txtEditarTelefonoCliente"
                                           type="text" name="telefono" class="form-control"
                                           data-inputmask='"mask": "(999) 999-9999"'
                                           data-mask placeholder="Ingrese teléfono">
                                    {!! $errors->first('telefono','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('telefono_2')? 'has-error':''}}">
                                <label for="">Teléfono 2</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input value="{{old('telefono_2')}}" disabled id="txtEditarTelefono_2Cliente"
                                           type="text" name="telefono_2" class="form-control"
                                           data-inputmask='"mask": "(999) 999-9999"'
                                           data-mask placeholder="">
                                    {!! $errors->first('telefono_2','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>

                            {{--<div class="form-group">
                                <div class="row">
                                    <div class="col-md-8 text-center">

                                        <div class="text-center dropzone dz-clickable" id="f_foto"
                                             style="width: 100%; margin: auto;">
                                            <div class="text-center dz-default dz-message" data-dz-message=""
                                                 style="margin-top: -13px !important;">
                                                <span><img width="100%" src="/adminlte/img/fondo_perfil.png"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>--}}
                            <input type="hidden" id="rol_cliente_seguro" value="4" name="rol">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btnCancelarEditarCliente" class="btn btn-danger">Cancelar</button>
                        <button id="btnActualizarCliente" type="submit" class="btn btn-primary">Actualizar Cliente
                        </button>
                        <button id="btnEditarCliente" class="btn btn-warning">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- MODAL RORLES -->
    <div class="modal fade" data-backdrop="static" data-keyboard="false"
         id="modalActualizarRoles" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #FFFFFF;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #404040;">&times;</span>
                    </button>
                    <h4 class="modal-title inline" id="myModalLabel" style="color: #000000">Actualizar Roles para </h4>
                    <h4 class="nombreUsuarioRol inline"></h4><h4 class="apellidosUsuarioRol inline">&nbsp</h4>
                </div>
                <form class="form-update-rol-cliente" method="POST" action="">
                    @csrf {{method_field('PUT')}}
                    <div class="modal-body">
                        <div class="box-body">

                            <div class="checkbox">
                                <label for="">
                                    <input name="roles" class="checkUpdateRoles" type="checkbox"
                                           value="{{$roles->name}}"
                                           style="font-size: 14px; font-weight: bold">
                                    {{$roles->name}}
                                </label>

                            </div>

                        </div>
                        <input type="hidden" name="id_vendedor" value="{{auth()->user()->id}}">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-warning ">Agregar Rol Cliente</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




@section('validacionAgregarClientes')
    <script>
        $(function () {
            $(".select2").select2();
            $("#placaCarro").inputmask({mask: 'AAA-999'});
            $("#placaMoto").inputmask({mask: 'AAA-99A'});

            $('#id_tipoVehiculo').on('change', function () {
                if (this.value == '10') {
                    //
                    $("#placaCarro").show('blind');
                    $("#placaMoto").hide('blind');

                } else {
                    $("#placaMoto").show('blind');
                    $("#placaCarro").hide('blind');

                }
            });
        });
        @if (count($errors) > 0)
        $('#modalAgregarCliente').modal('show');
        @endif

    </script>

@endsection
@stop
