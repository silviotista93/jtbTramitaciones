@extends('admin.layout')

@section('header')
    <h1>
        <strong>Administrar Usuarios del Sistema</strong>
        <small>Usuarios</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Usuarios</li>
        <li class="active">Administrar</li>
    </ol>
@stop

@section('contenido')

    <div class="box box-primary">
        <div class="box-header">
            <div class="form-group">
                <h3 class="box-title">Lista de Usuarios</h3>
                @if(auth()->user()->hasRole('Administrador'))
                <button class="btn btn-primary pull-right" data-toggle="modal"
                        data-target="#modalAgregarUsuario">
                    <i class="fa fa-plus"></i> Crear Usuario
                </button>
                @endif
            </div>
        </div>

        <div class="box-body table-responsive">
            <table id="tabla-usuarios" class="table table-bordered dt-responsive table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Perfil</th>
                    <th>Acciones</th>
                    @if(auth()->user()->hasRole('Administrador'))
                    <th>Estado</th>
                    @endif

                </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->apellidos}}</td>
                        <td>{{$usuario->roles->first()->name}}</td>

                        <td class="text-center">
                            <button href="#" class="btn btn-xs btn-default "><i class="fa fa-eye"></i></button>
                            @if(auth()->user()->hasRole('Administrador'))
                            <a href="{{route('userUpdatePerfil',$usuario->id)}}" class="btn btn-xs btn-info btnEditarUsuario"><i class="fa fa-pencil"></i></a>
                            @if($usuario->id !== auth()->user()->id)
                            <form class="form_eliminar_usuario" action="" method="POST" style="display: inline;">
                                @csrf
                                {{method_field('DELETE')}}
                                <a idUsuario="{{$usuario->id}}" class="btn btn-xs btn-danger eliminarUsuario"><i class="fa fa-times"></i></a>
                            </form>
                                @endif
                            @endif
                        </td>

                        @if(auth()->user()->hasRole('Administrador'))
                        <td class="text-center">
                            @if($usuario->id !== auth()->user()->id)
                                <input class="cbEstado btn btn-danger btn-sm toggle-on" type="checkbox"
                                       {{ $usuario->estado === 'activo' ? 'checked':''}} data-toggle="toggle"
                                       data-size="small" data-id="{{ $usuario->id }}">
                            @endif
                        </td>
                            @endif

                    </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <form id="frmActualizarEstado" action="{{ route('actualizarEstado', ['__id__', '__estado__']) }}"
          method="post">
        @method('PUT')
        @csrf
    </form>

    <!-- MODAL AGREGAR USARIO -->
    <div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #056F00;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Crear Usuario <i
                                class="fa fa-plus"></i></h4>
                </div>
                <form class="form-usuario-creado" method="post" action="{{route ('usuarioCreado')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="box-body">
                            <form action="">
                            <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Nombres</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Ingrese Nombres">
                                    {!! $errors->first('name','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('apellidos')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Apellidos</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="apellidos" value="{{old('apellidos')}}" class="form-control"
                                           placeholder="Ingrese Apellidos" >
                                    {!! $errors->first('apellidos','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control emailAgregarUsuario" placeholder="INGRESE EMAIL">
                                    {!! $errors->first('email','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('telefono')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Telefono</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="text" name="telefono" class="form-control"
                                           data-inputmask='"mask": "(999) 999-9999"'
                                           data-mask value="{{old('telefono')}}">
                                    {!! $errors->first('telefono','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('rol')? 'has-error':''}}">
                                <label for=""><span class="text-danger">*</span> Seleccione Perfil</label>
                                <select name="rol" id="" class="form-control" required>
                                    <option value="">Seleccione Perfil</option>
                                    @foreach($roles as $rol)
                                        <option {{old('rol')==$rol->id ? 'selected': ''}} value="{{$rol->id}}">{{$rol->name}}</option>
                                    @endforeach

                                </select>
                                {!! $errors->first('rol','<span class="help-block">Seleccione Tipo</span>')!!}
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
                        </div>
                        <input type="hidden" name="foto" value="/adminlte/img/perfil.jpg" id="inputArchivoUsuario">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
