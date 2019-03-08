@extends('admin.layout')

@section('header')
    <h1>
       <strong>Administrar Licencia</strong>
        <small>Licencias</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Administrar Tramites</li>
        <li class="active">Licencia</li>
    </ol>
@stop
@section('contenido')

    <div class="row justify-content-end">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Precios al Público</h3>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#primer_publi" data-toggle="tab">Primera Vez</a></li>
                                    <li><a href="#refren_publi" data-toggle="tab">Refrendación</a></li>
                                    <li><a href="#recat_publi" data-toggle="tab">Recategorizar</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="primer_publi">
                                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                                            <thead>
                                            <tr>

                                                <th>Categoria</th>
                                                <th>Precio</th>
                                                <th>Máximo</th>
                                                <th>Ultima Actualización</th>
                                                <th>Editar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($licenciasPublico as $licenciaPublico)
                                                @if($licenciaPublico->tipo_licencia == 'Primera Vez')
                                                    <tr>
                                                        <td>{{$licenciaPublico->categoria}}</td>
                                                        <td>{{$licenciaPublico->precio}}</td>
                                                        <td>{{$licenciaPublico->descuento}}</td>
                                                        @if($licenciaPublico->updated_at == null)
                                                            <td>No hay actualización</td>
                                                        @else
                                                            <td>{{$licenciaPublico->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                                        @endif
                                                        <td class="text-center">
                                                            <button data-target="#modalLicenciaEditar" data-toggle="modal"
                                                                    id="{{$licenciaPublico->id}}"
                                                                    categoria="{{$licenciaPublico->categoria}}"
                                                                    tipoLicencia = "{{$licenciaPublico->tipo_licencia}}"
                                                                    precio="{{$licenciaPublico->precio}}"
                                                                    descuento="{{$licenciaPublico->descuento}}"
                                                                    update="{{$licenciaPublico->updated_at}}"
                                                                    class="btn btn-dark btn-danger btnEditarLicencia" data-toggle="modal"><i class="fa fa-pencil"></i></button>


                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="refren_publi">
                                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                                            <thead>
                                            <tr>

                                                <th>Categoria</th>
                                                <th>Precio</th>
                                                <th>Máximo</th>
                                                <th>Ultima Actualización</th>
                                                <th>Editar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($licenciasPublico as $licenciaPublico)
                                                @if($licenciaPublico->tipo_licencia == 'Refrendacion')
                                                    <tr>
                                                        <td>{{$licenciaPublico->categoria}}</td>
                                                        <td>{{$licenciaPublico->precio}}</td>
                                                        <td>{{$licenciaPublico->descuento}}</td>
                                                        @if($licenciaPublico->updated_at == null)
                                                            <td>No hay actualización</td>
                                                        @else
                                                            <td>{{$licenciaPublico->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                                        @endif
                                                        <td class="text-center">
                                                            <button data-target="#modalLicenciaEditar" data-toggle="modal"
                                                                    id="{{$licenciaPublico->id}}"
                                                                    categoria="{{$licenciaPublico->categoria}}"
                                                                    tipoLicencia = "{{$licenciaPublico->tipo_licencia}}"
                                                                    precio="{{$licenciaPublico->precio}}"
                                                                    descuento="{{$licenciaPublico->descuento}}"
                                                                    update="{{$licenciaPublico->updated_at}}"
                                                                    class="btn btn-dark btn-danger btnEditarLicencia" data-toggle="modal"><i class="fa fa-pencil"></i></button>


                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="recat_publi">
                                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                                            <thead>
                                            <tr>

                                                <th>Categoria</th>
                                                <th>Precio</th>
                                                <th>Máximo</th>
                                                <th>Ultima Actualización</th>
                                                <th>Editar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($licenciasPublico as $licenciaPublico)
                                                @if($licenciaPublico->tipo_licencia == 'Recategorizar')
                                                    <tr>
                                                        <td>{{$licenciaPublico->categoria}}</td>
                                                        <td>{{$licenciaPublico->precio}}</td>
                                                        <td>{{$licenciaPublico->descuento}}</td>
                                                        @if($licenciaPublico->updated_at == null)
                                                            <td>No hay actualización</td>
                                                        @else
                                                            <td>{{$licenciaPublico->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                                        @endif
                                                        <td class="text-center">
                                                            <button data-target="#modalLicenciaEditar" data-toggle="modal"
                                                                    id="{{$licenciaPublico->id}}"
                                                                    categoria="{{$licenciaPublico->categoria}}"
                                                                    tipoLicencia = "{{$licenciaPublico->tipo_licencia}}"
                                                                    precio="{{$licenciaPublico->precio}}"
                                                                    descuento="{{$licenciaPublico->descuento}}"
                                                                    update="{{$licenciaPublico->updated_at}}"
                                                                    class="btn btn-dark btn-danger btnEditarLicencia" data-toggle="modal"><i class="fa fa-pencil"></i></button>


                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- nav-tabs-custom -->
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
            </div>
        </div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Precios al Tramitador</h3>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#primer_tramit" data-toggle="tab">Primera Vez</a></li>
                                    <li><a href="#refren_trami" data-toggle="tab">Refrendación</a></li>
                                    <li><a href="#recat_trami" data-toggle="tab">Recategorizar</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="primer_tramit">
                                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                                            <thead>
                                            <tr>

                                                <th>Categoria</th>
                                                <th>Precio</th>
                                                <th>Máximo</th>
                                                <th>Ultima Actualización</th>
                                                <th>Editar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($licenciasTramitador as $licenciaTramitador)
                                                @if($licenciaTramitador->tipo_licencia == 'Primera Vez')
                                                    <tr>
                                                        <td>{{$licenciaTramitador->categoria}}</td>
                                                        <td>{{$licenciaTramitador->precio}}</td>
                                                        <td>{{$licenciaTramitador->descuento}}</td>
                                                        @if($licenciaTramitador->updated_at == null)
                                                            <td>No hay actualización</td>
                                                        @else
                                                            <td>{{$licenciaTramitador->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                                        @endif
                                                        <td class="text-center">
                                                            <button data-target="#modalLicenciaEditar" data-toggle="modal"
                                                                    id="{{$licenciaTramitador->id}}"
                                                                    categoria="{{$licenciaTramitador->categoria}}"
                                                                    tipoLicencia = "{{$licenciaTramitador->tipo_licencia}}"
                                                                    precio="{{$licenciaTramitador->precio}}"
                                                                    descuento="{{$licenciaTramitador->descuento}}"
                                                                    update="{{$licenciaTramitador->updated_at}}"
                                                                    class="btn btn-dark btn-danger btnEditarLicencia" data-toggle="modal"><i class="fa fa-pencil"></i></button>


                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="refren_trami">
                                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                                            <thead>
                                            <tr>

                                                <th>Categoria</th>
                                                <th>Precio</th>
                                                <th>Máximo</th>
                                                <th>Ultima Actualización</th>
                                                <th>Editar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($licenciasTramitador as $licenciaTramitador)
                                                @if($licenciaTramitador->tipo_licencia == 'Refrendacion')
                                                    <tr>
                                                        <td>{{$licenciaTramitador->categoria}}</td>
                                                        <td>{{$licenciaTramitador->precio}}</td>
                                                        <td>{{$licenciaTramitador->descuento}}</td>
                                                        @if($licenciaTramitador->updated_at == null)
                                                            <td>No hay actualización</td>
                                                        @else
                                                            <td>{{$licenciaTramitador->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                                        @endif
                                                        <td class="text-center">
                                                            <button data-target="#modalLicenciaEditar" data-toggle="modal"
                                                                    id="{{$licenciaTramitador->id}}"
                                                                    categoria="{{$licenciaTramitador->categoria}}"
                                                                    precio="{{$licenciaTramitador->precio}}"
                                                                    descuento="{{$licenciaTramitador->descuento}}"
                                                                    tipoLicencia = "{{$licenciaTramitador->tipo_licencia}}"
                                                                    update="{{$licenciaTramitador->updated_at}}"
                                                                    class="btn btn-dark btn-danger btnEditarLicencia" data-toggle="modal"><i class="fa fa-pencil"></i></button>


                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="recat_trami">
                                        <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                                            <thead>
                                            <tr>

                                                <th>Categoria</th>
                                                <th>Precio</th>
                                                <th>Máximo</th>
                                                <th>Ultima Actualización</th>
                                                <th>Editar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($licenciasTramitador as $licenciaTramitador)
                                                @if($licenciaTramitador->tipo_licencia == 'Recategorizar')
                                                    <tr>
                                                        <td>{{$licenciaTramitador->categoria}}</td>
                                                        <td>{{$licenciaTramitador->precio}}</td>
                                                        <td>{{$licenciaTramitador->descuento}}</td>
                                                        @if($licenciaTramitador->updated_at == null)
                                                            <td>No hay actualización</td>
                                                        @else
                                                            <td>{{$licenciaTramitador->updated_at->format('l jS \\of F Y h:i:s A')}}</td>
                                                        @endif
                                                        <td class="text-center">
                                                            <button data-target="#modalLicenciaEditar" data-toggle="modal"
                                                                    id="{{$licenciaTramitador->id}}"
                                                                    categoria="{{$licenciaTramitador->categoria}}"
                                                                    tipoLicencia = "{{$licenciaTramitador->tipo_licencia}}"
                                                                    precio="{{$licenciaTramitador->precio}}"
                                                                    descuento="{{$licenciaTramitador->descuento}}"
                                                                    update="{{$licenciaTramitador->updated_at}}"
                                                                    class="btn btn-dark btn-danger btnEditarLicencia" data-toggle="modal"><i class="fa fa-pencil"></i></button>


                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- nav-tabs-custom -->
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
            </div>
        </div>
    </div>

    <!-- MODAL EDITAR LICENCIA -->
    <div class="modal fade" id="modalLicenciaEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #056F00;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF"><i
                                class="fa fa-pencil"></i> Administrar Licencia</h4>
                </div>
                <form method="post" id="form_actualizar_licencia" action="" class="action_form_actualizar_licencia">
                    @csrf {{method_field('PUT')}}
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group {{$errors->has('categoria')? 'has-error':''}}">
                                <label for="">Categoria</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-gear"></i></span>
                                    <input id="admin_categoria_licencia" type="text" name="categoria" value="{{old('categoria')}}" class="form-control" placeholder="" readonly>
                                    {!! $errors->first('categoria','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('tipoLicencia')? 'has-error':''}}">
                                <label for="">Tipo Licencia</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-gear"></i></span>
                                    <input id="admin_tipoLicencia_licencia" type="text" name="tipoLicencia" value="{{old('tipoLicencia')}}" class="form-control" placeholder="" readonly>
                                    {!! $errors->first('tipoLicencia','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('precio')? 'has-error':''}}">
                                <label for="">Precio</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    <input id="admin_precio_licencia" type="text" name="precio" value="{{old('precio')}}" class="form-control"
                                           placeholder="">
                                    {!! $errors->first('precio','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('descuento')? 'has-error':''}}">
                                <label for="">Máximo Descuento</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    <input id="admin_descuento_licencia" type="text" name="descuento" value="{{old('descuento')}}" class="form-control"
                                           placeholder="">
                                    {!! $errors->first('descuento','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('ultima_actualizacion')? 'has-error':''}}">
                                <label for="">Ultima Actualizacion</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="admin_update_licencia" type="text" name="ultima_actualizacion" value="{{old('ultima_actualizacion')}}" class="form-control" placeholder="" readonly>
                                    {!! $errors->first('ultima_actualizacion','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="" class="btn btn-primary btn_actualizar_licencia">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop