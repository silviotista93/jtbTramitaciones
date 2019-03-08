@extends('admin.layout')

@section('header')
    <h1>
       <strong>Administrar Seguro</strong>
        <small>Seguro</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Administrar Tramites</li>
        <li class="active">Seguro</li>
    </ol>
@stop

@section('contenido')


    <!-- ADMINISTRAR SEGURO PARA MOTO -->
    <div class="box-body">
        <div class="box-group" id="accordion">
            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Moto
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true">
                    <div class="box-body">
                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                            <thead>
                            <tr>

                                <th>Cilindrajes</th>
                                <th>Precios</th>
                                <th>Ultima Actualización</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seguros as $seguro)
                                @if($seguro->idTipoVehiculo == '1')
                                    <tr>
                                        <td>{{$seguro->cilindraje}}</td>
                                        <td>{{$seguro->precio}}</td>
                                        <td>{{$seguro->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                        <td class="text-center">

                                            <button data-target="#modalSeguroEditar" data-toggle="modal"
                                                    id="{{$seguro->id}}"
                                                    cilindraje="{{$seguro->cilindraje}}"
                                                    precio="{{$seguro->precio}}"
                                                    update="{{$seguro->updated_at}}"
                                                    class="btn btn-dark btn-danger btnEditarSeguro" data-toggle="modal"><i class="fa fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ADMINISTRAR SEGURO PARA CAMPEROS Y CAMIONETAS -->
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Camperos y Camionetas
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                            <thead>
                            <tr>

                                <th>Cilindrajes</th>
                                <th>Precios</th>
                                <th>Ultima Actualización</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seguros as $seguro)
                                @if($seguro->idTipoVehiculo == '2')
                                    <tr>
                                        <td>{{$seguro->cilindraje}}</td>
                                        <td>{{$seguro->precio}}</td>
                                        <td>{{$seguro->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                        <td class="text-center">
                                            <button data-target="#modalSeguroEditar" data-toggle="modal"
                                                    id="{{$seguro->id}}"
                                                    cilindraje="{{$seguro->cilindraje}}"
                                                    precio="{{$seguro->precio}}"
                                                    update="{{$seguro->updated_at}}"
                                                    class="btn btn-dark btn-danger btnEditarSeguro" data-toggle="modal"><i class="fa fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ADMINISTRAR SEGURO PARA CARGA O MIXTO -->
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Carga o Mixto
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                            <thead>
                            <tr>

                                <th>Cilindrajes</th>
                                <th>Precios</th>
                                <th>Ultima Actualización</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seguros as $seguro)
                                @if($seguro->idTipoVehiculo == '3')
                                    <tr>
                                        <td>{{$seguro->cilindraje}}</td>
                                        <td>{{$seguro->precio}}</td>
                                        <td>{{$seguro->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                        <td class="text-center">
                                            <button data-target="#modalSeguroEditar" data-toggle="modal"
                                                    id="{{$seguro->id}}"
                                                    cilindraje="{{$seguro->cilindraje}}"
                                                    precio="{{$seguro->precio}}"
                                                    update="{{$seguro->updated_at}}"
                                                    class="btn btn-dark btn-danger btnEditarSeguro" data-toggle="modal"><i class="fa fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!--ADMINISTRAR SEGURO PARA  OFICIALES ESPECIALES, AMBULANCIAS, TRANSPORTE DE VALORES -->
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFoor">
                            Ofi, Ambulancias, Transporte de valores
                        </a>
                    </h4>
                </div>
                <div id="collapseFoor" class="panel-collapse collapse">
                    <div class="box-body">
                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                            <thead>
                            <tr>

                                <th>Cilindrajes</th>
                                <th>Precios</th>
                                <th>Ultima Actualización</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seguros as $seguro)
                                @if($seguro->idTipoVehiculo == '4')
                                    <tr>
                                        <td>{{$seguro->cilindraje}}</td>
                                        <td>{{$seguro->precio}}</td>
                                        <td>{{$seguro->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                        <td class="text-center">
                                            <button data-target="#modalSeguroEditar" data-toggle="modal"
                                                    id="{{$seguro->id}}"
                                                    cilindraje="{{$seguro->cilindraje}}"
                                                    precio="{{$seguro->precio}}"
                                                    update="{{$seguro->updated_at}}"
                                                    class="btn btn-dark btn-danger btnEditarSeguro" data-toggle="modal"><i class="fa fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ADMINISTRAR SEGURO PARA AUTOS FAMILIARES -->
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                           Autos Familiares
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="box-body">
                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                            <thead>
                            <tr>

                                <th>Cilindrajes</th>
                                <th>Precios</th>
                                <th>Ultima Actualización</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seguros as $seguro)
                                @if($seguro->idTipoVehiculo == '5')
                                    <tr>
                                        <td>{{$seguro->cilindraje}}</td>
                                        <td>{{$seguro->precio}}</td>
                                        <td>{{$seguro->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                        <td class="text-center">
                                            <button data-target="#modalSeguroEditar" data-toggle="modal"
                                                    id="{{$seguro->id}}"
                                                    cilindraje="{{$seguro->cilindraje}}"
                                                    precio="{{$seguro->precio}}"
                                                    update="{{$seguro->updated_at}}"
                                                    class="btn btn-dark btn-danger btnEditarSeguro" data-toggle="modal"><i class="fa fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ADMINISTRAR SEGURO PARA VEHICULOS CON CAPACIDAD DE 6 O MAS PERSONAS -->
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                            Vehiculos con capacidad de 6 o más personas
                        </a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                    <div class="box-body">
                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                            <thead>
                            <tr>

                                <th>Cilindrajes</th>
                                <th>Precios</th>
                                <th>Ultima Actualización</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seguros as $seguro)
                                @if($seguro->idTipoVehiculo == '6')
                                    <tr>
                                        <td>{{$seguro->cilindraje}}</td>
                                        <td>{{$seguro->precio}}</td>
                                        <td>{{$seguro->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                        <td class="text-center">
                                            <button data-target="#modalSeguroEditar" data-toggle="modal"
                                                    id="{{$seguro->id}}"
                                                    cilindraje="{{$seguro->cilindraje}}"
                                                    precio="{{$seguro->precio}}"
                                                    update="{{$seguro->updated_at}}"
                                                    class="btn btn-dark btn-danger btnEditarSeguro" data-toggle="modal"><i class="fa fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ADMINISTRAR SEGURO PARA AUTOS DE ALQUILER, ENSEÑANSA, FUNEBRES, TAXIS, MICROBUSES -->
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                             Autos de Alquiler, Enseñansa, Funebres, Taxis, Microbuses
                        </a>
                    </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse">
                    <div class="box-body">
                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                            <thead>
                            <tr>

                                <th>Cilindrajes</th>
                                <th>Precios</th>
                                <th>Ultima Actualización</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seguros as $seguro)
                                @if($seguro->idTipoVehiculo == '7')
                                    <tr>
                                        <td>{{$seguro->cilindraje}}</td>
                                        <td>{{$seguro->precio}}</td>
                                        <td>{{$seguro->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                        <td class="text-center">
                                            <button data-target="#modalSeguroEditar" data-toggle="modal"
                                                    id="{{$seguro->id}}"
                                                    cilindraje="{{$seguro->cilindraje}}"
                                                    precio="{{$seguro->precio}}"
                                                    update="{{$seguro->updated_at}}"
                                                    class="btn btn-dark btn-danger btnEditarSeguro" data-toggle="modal"><i class="fa fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ADMINISTRAR SEGURO PARA BUSES Y BUSETAS -->
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                            Buses y Busetas
                        </a>
                    </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse">
                    <div class="box-body">
                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                            <thead>
                            <tr>

                                <th>Cilindrajes</th>
                                <th>Precios</th>
                                <th>Ultima Actualización</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seguros as $seguro)
                                @if($seguro->idTipoVehiculo == '8')
                                    <tr>
                                        <td>{{$seguro->cilindraje}}</td>
                                        <td>{{$seguro->precio}}</td>
                                        <td>{{$seguro->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                        <td class="text-center">
                                            <button data-target="#modalSeguroEditar" data-toggle="modal"
                                                    id="{{$seguro->id}}"
                                                    cilindraje="{{$seguro->cilindraje}}"
                                                    precio="{{$seguro->precio}}"
                                                    update="{{$seguro->updated_at}}"
                                                    class="btn btn-dark btn-danger btnEditarSeguro" data-toggle="modal"><i class="fa fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ADMINISTRAR SEGURO PARA SERVICIO PUBLICO INTERMUNICIPAL -->
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsenine">
                            Servicio publico Intermunicipal
                        </a>
                    </h4>
                </div>
                <div id="collapsenine" class="panel-collapse collapse">
                    <div class="box-body">
                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                            <thead>
                            <tr>

                                <th>Cilindrajes</th>
                                <th>Precios</th>
                                <th>Ultima Actualización</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seguros as $seguro)
                                @if($seguro->idTipoVehiculo == '9')
                                    <tr>
                                        <td>{{$seguro->cilindraje}}</td>
                                        <td>{{$seguro->precio}}</td>
                                        <td>{{$seguro->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                        <td class="text-center">
                                            <button data-target="#modalSeguroEditar" data-toggle="modal"
                                                    id="{{$seguro->id}}"
                                                    cilindraje="{{$seguro->cilindraje}}"
                                                    precio="{{$seguro->precio}}"
                                                    update="{{$seguro->updated_at}}"
                                                    class="btn btn-dark btn-danger btnEditarSeguro" data-toggle="modal"><i class="fa fa-pencil"></i></button>


                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- MODAL EDITAR SEGURO -->
    <div class="modal fade" id="modalSeguroEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #056F00;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF"><i
                                class="fa fa-pencil"></i> Administrar Seguro</h4>
                </div>
                <form method="post" id="form_actualizar_seguro" action="" class="action_form_actualizar_seguro">
                    @csrf {{method_field('PUT')}}
                    <div class="modal-body">
                        <div class="box-body">
                                <div class="form-group {{$errors->has('cilindraje')? 'has-error':''}}">
                                    <label for="">Cilindraje</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-gear"></i></span>
                                        <input id="admin_cilindraje_seguro" type="text" name="cilindraje" value="{{old('cilindraje')}}" class="form-control" placeholder="" readonly>
                                        {!! $errors->first('cilindraje','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('precio')? 'has-error':''}}">
                                    <label for="">Precio</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                        <input id="admin_precio_seguro" type="text" name="precio" value="{{old('precio')}}" class="form-control"
                                               placeholder="">
                                        {!! $errors->first('precio','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('ultima_actualizacion')? 'has-error':''}}">
                                    <label for="">Ultima Actualizacion</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input id="admin_update_seguro" type="text" name="ultima_actualizacion" value="{{old('ultima_actualizacion')}}" class="form-control" placeholder="" readonly>
                                        {!! $errors->first('ultima_actualizacion','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="" class="btn btn-primary btn_actualizar_seguro">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
