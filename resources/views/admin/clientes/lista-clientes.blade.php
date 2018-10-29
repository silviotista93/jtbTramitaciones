@extends('admin.layout')

@section('header')
    <h1>
        <strong>Todos los Clientes</strong>
        <small>Clientes</small>
    </h1>
    <ol class="breadcrumb">
        {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
        {{--<li class="active">Ini</li>--}}
    </ol>
@stop

@section('contenido')

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Lista de Clientes</h3>
            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalAgregarCliente"><i
            class="fa fa-plus"> </i> Agregar Cliente
            </button>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table  class="table table-bordered table-striped dt-responsive table_clientes">
                <thead>
                <tr class="text-center">
                    <th>Identificación</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Telefono 2</th>
                    <th>Email</th>
                    <th>Atendido por</th>
                    <th>Fecha Registro</th>
                    <th>Acciones</th>
                    <th>Tramites</th>

                </tr>
                </thead>


            </table>
        </div>
        <!-- /.box-body -->
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
                            <input type="hidden" name="id_vendedor" value="{{auth()->user()->id}}">
                        </div>
                    </div>
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
    <!-- MODAL RORLES AGREGAR CLIENTE-->
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
    <!-- TABLA DINAMICA Clientes-->
@section('dataTablesClientes')
    <script>
        $('.table_clientes').DataTable({
            "processing": true,
            "serverSide": true,
            "data": null,
            "ajax": "/admin/api/clientes",
            "columns":[
                {data: 'identificacion',defaultContent:'<span class="label label-danger text-center">Ningún valor por defecto</span>'},
                {data: 'name'},
                {data: 'apellidos'},
                {data: 'telefono'},
                {data: 'telefono_2',defaultContent:'<span class="label label-danger text-center">Ningún valor por defecto</span>'},
                {data: 'email'},
                {data: 'id_vendedor.name'},
                {data: 'created_at'},
                {
                    render:function (data,type, JsonResultRow,meta) {
                        return '<button href="" idcliente="'+JsonResultRow.id+'" class="btn btn-sm btn-info btnEditarCliente"><i class="fa fa-pencil"></i></button>'

                    }
                },
                {
                    render:function (data,type, JsonResultRow,meta) {
                        return '<a href="/admin/tramitador-ventas/'+JsonResultRow.id+'" class="btn btn-sm btn-warning "><i class="fa fa-eye"></i></a>'

                    }
                },
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

    </script>

@endsection

@stop