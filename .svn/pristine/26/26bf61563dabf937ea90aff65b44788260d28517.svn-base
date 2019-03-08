@extends('admin.layout')

@section('contenido')

@section('header')
    <h1>
        <strong>Actualizar Usuario</strong>
        <small>Sistema</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('usuarios')}}"><i class="fa fa-dashboard"></i> Usuario</a></li>
        <li class="active">Actualizar</li>
    </ol>
    <div class="form-group">
        @if($datosUsuario->estado == 'inactivo')
            <div class="alert alert-danger">{{$datosUsuario->estado}}, este usuario no puede acceder al sistema</div>
        @endif
    </div>

@stop

<div class="row justify-content-end">

    <div class="col-md-6">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black"
                 style="background: url('/adminlte/img/fondo-perfil.jpg') center center;">
                <h3 class="widget-user-username"
                    style="font-weight: 400"></h3>
                <h5 class="widget-user-desc"></h5>
            </div>
            @if($datosUsuario->foto == null)
            <div class="widget-user-image ">
                <img class="img-circle dz-default dz-message" src="/adminlte/img/perfil.jpg" alt="User Avatar">
            </div>
            @else
                <div class="widget-user-image ">
                    <img class="img-circle dz-default dz-message" src="{{$datosUsuario->foto}}" alt="User Avatar">
                </div>
            @endif
            <form method="POST" action="">
                @csrf {{method_field('PUT')}}
                <input type="hidden" name="foto" value="" id="inputFotoUsuario">


                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-6 border-right">
                            <div class="description-block">
                                <span class="description-header">EMAIL</span>
                                <h5 class="">{{$datosUsuario->email}}</h5>

                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 border-right">
                            <div class="description-block">
                                <span class="description-header">ROLES</span>
                                <h5 class="">{{$datosUsuario->getRoleNames()->implode(', ')}}</h5>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        {{--<!-- /.col -->--}}
                        {{--<div class="col-sm-4">--}}
                        {{--<div class="description-block">--}}
                        {{--<span class="description-header">DIRECCION</span>--}}
                        {{--<h5 class="">Rincon de Yambitara 2Etap</h5>--}}
                        {{--</div>--}}
                        {{--<!-- /.description-block -->--}}
                        {{--</div>--}}


                    </div>
                </div>
                <div class="form-group mostrarBtnUpdateFoto" style="display: none">
                    <button type="submit" class="btn btn-primary btn-block boton-actualizar">Actualizar Foto de Perfil</button>
                </div>
            </form>
        </div>
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Agregar y quitar roles al Usuario</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{{route('usuariosRoles',$datosUsuario)}}">
                    @csrf {{method_field('PUT')}}
                    <div class="box-body">
                        <input type="hidden" name="idUsuario" value="{{$datosUsuario->id}}">
                        @foreach($editRoles as $id => $name)
                            <div class="checkbox">
                                <label for="">
                                    <input name="roles[]" class="checkUpdateRoles" type="checkbox" value="{{$name}}" {{$datosUsuario->roles->contains($id) ? 'checked':''}}>
                                    {{$name}}
                                </label>

                            </div>
                        @endforeach
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block boton-actualizar">Actualizar Roles
                            </button>
                        </div>
                    </div>

                </form>
            </div>
    </div>
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Datos del Usuario</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{route('UsuarioActualizado',$datosUsuario)}}">
                @csrf {{method_field('PUT')}}
                <div class="box-body">
                    <!-- Contraseña-->

                    <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                        <label for="">Nombre</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                               placeholder="" value="{{$datosUsuario->name}}">
                        {!! $errors->first('name','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group {{$errors->has('apellidos')? 'has-error':''}}">
                        <label for="">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" id="exampleInputEmail1"
                               placeholder="" value="{{$datosUsuario->apellidos}}">
                        {!! $errors->first('apellidos','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                               placeholder="" value="{{$datosUsuario->email}}">
                        {!! $errors->first('email','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('telefono')? 'has-error':''}}">
                        <label for="">Télefono</label>
                        <input type="text" name="telefono" class="form-control" id="exampleInputEmail1"
                               placeholder=""value="{{$datosUsuario->telefono}}">
                        {!! $errors->first('telefono','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('telefono_2')? 'has-error':''}}">
                        <label for="">Télefono 2</label>
                        @if($datosUsuario->telefono_2 == null)
                            <input type="text" name="telefono_2" class="form-control" id="exampleInputEmail1"
                                   placeholder="Ningún número registrado" value="">
                            {!! $errors->first('telefono_2','<span class="help-block">:message</span>')!!}
                        @else
                        <input type="text" name="telefono_2" class="form-control" id="exampleInputEmail1"
                               placeholder="" value="{{$datosUsuario->telefono_2}}">
                            {!! $errors->first('telefono_2','<span class="help-block">:message</span>')!!}
                        @endif

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block boton-actualizar">Actualizar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop

