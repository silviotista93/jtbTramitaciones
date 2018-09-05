@extends('admin.layout')

@section('header')
    <h1>
        Informacion Cliente
        <small>Info</small>
    </h1>
    <ol class="breadcrumb">
        {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
        {{--<li class="active">Ini</li>--}}
    </ol>
@stop

@section('contenido')
    <!-- Datos del Cliente -->
    <div class="row">
        <div class="col-lg-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h1 class="box-title">Datos Cliente</h1>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <label for="">Nombres</label>
                                <br>
                                <h5>Silvio Mauricio</h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <label for="">Apellidos</label>
                                <br>
                                <h5>Gutierrez Quiñones</h5>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label for="">Identificación</label>
                                <br>
                                <h5>106175921</h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label for="">Genero</label>
                                <br>
                                <h5>Masculino</h5>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label for="">Fecha de Nacimiento</label>
                                <br>
                                <h5>27 Junio 1998</h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label for="">Correo Electrónico</label>
                                <br>
                                <h5>silviotista93@gmail.com</h5>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label for="">Telefono</label>
                                <br>
                                <h5>3187951410</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info del Tramite -->
        <div class="col-lg-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h1 class="box-title">Tramite</h1>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <label for="">Tipo de Tramite</label>
                                <br>
                                <div style="margin-top: 7px;">
                                    <span class="label label-danger estilo-estado-orden" style="font-size: 16px">Licencia</span>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <label for="">Tipo Licencia</label>
                                <br>
                                <h5>Primera Vez</h5>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <label for="">Categoria(s)</label>
                                <br>
                                <h5>A2, B1</h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <label for="">Estado</label>
                                <br>
                                <span class="label label-warning " style="font-size: 14px">En Tramite</span>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <label for="">Fecha de Inicio Tramite</label>
                                    <br>
                                    <h5>12 Junio 2018</h5>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <button id="" type="button" class="btn btn-primary pull-right margin">Tramite Realizado</button>
                            <button id="" type="button" class="btn btn-danger pull-right margin">Cancelar Tramite</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Info del Pago -->
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h1 class="box-title">Información de Pago</h1>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <label for="">Valor del Tramite</label>
                                <br>
                                <h5>$300.000</h5>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <label for="">Abono</label>
                                <br>
                                <h5>$100.000</h5>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <label for="">Saldo</label>
                                <br>
                                <h5>$200.000</h5>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <label for="">Método de Pago</label>
                                <br>
                                <h5>Efectivo</h5>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <label for="">Fecha Ultimo Pago</label>
                                <br>
                                <h5>12 Junio 2018</h5>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <button id="mostrar_abono" type="button" class="btn btn-warning pull-right margin">Agregar Abono</button>
                        <button  type="button" class="btn btn-primary pull-right margin"
                                style="background-color: #212D31; border: #212D31">Historial de Abono</button>
                    </div>

                </div>

                <!-- Realizar Abono -->
                <div id="realizar-abono" style="display: none;">
                    <div class="box-header">
                        <hr>
                        <h1 class="box-title">Realizar Abono</h1>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <h4>Abono</h4>

                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="$"
                                           value="">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <h4>Método de Pago</h4>
                                    <select class="form-control" id="">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Efectivo</option>
                                        <option value="2">Tarjeta</option>

                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <button id="" type="button" class="btn btn-primary pull-right margin">Agregar Abono
                                </button>
                                <button id="cancelar_abono" type="button" class="btn btn-danger pull-right margin">Cancelar Abono
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Historial de Abonos -->
                <div id="historial_abonos" style="display: none;">
                    <div class="box-header">
                        <hr>
                        <h1 class="box-title">Historial de Abonos</h1>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-8">
                                    <table id="table_clientes" class="table table-bordered table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th class="text-center">Abono</th>
                                            <th class="text-center">Fecha de Abono</th>
                                            <th class="text-center">Metodo de Pago</th>
                                            <th class="text-center">Saldo Final</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">$50.000</td>
                                            <td class="text-center">13 Junio 2018
                                            </td>
                                            <td class="text-center">Efectivo</td>
                                            <td class="text-center">$250.000</td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">$50.000</td>
                                            <td class="text-center">13 Junio 2018
                                            </td>
                                            <td class="text-center">Efectivo</td>
                                            <td class="text-center">$250.000</td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">$50.000</td>
                                            <td class="text-center">13 Junio 2018
                                            </td>
                                            <td class="text-center">Efectivo</td>
                                            <td class="text-center">$250.000</td>

                                        </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <button id="ocultar_historial" type="button" class="btn btn-danger pull-right margin">Ocultar
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



@stop
