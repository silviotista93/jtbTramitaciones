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
                <form method="POST" action="">
                    @csrf {{method_field('PUT')}}
                    <div class="box-body">
                        @foreach($editRoles as $id => $name)
                            <div class="checkbox">
                                <label for="">
                                    <input class="checkUpdateRoles" type="checkbox" value="{{$id}}" {{$datosUsuario->roles->contains($id) ? 'checked':''}}>
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



        @if($errors->any())

            <ul class="list-group">

                @foreach($errors->all() as $error)

                    <li class="list-group-item list-group-item-danger">

                        {{$error}}
                    </li>

                @endforeach

            </ul>

        @endif

    </div>
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Datos del Usuario</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="">
                @csrf {{method_field('PUT')}}
                <div class="box-body">
                    <!-- Contraseña-->
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="password" class="form-control" id="exampleInputEmail1"
                               placeholder="" value="{{$datosUsuario->name}}">
                    </div>

                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input type="text" name="" class="form-control" id="exampleInputEmail1"
                               placeholder="" value="{{$datosUsuario->apellidos}}">

                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="" class="form-control" id="exampleInputEmail1"
                               placeholder="" value="{{$datosUsuario->email}}">

                    </div>
                    <div class="form-group">
                        <label for="">Télefono</label>
                        <input type="text" name="" class="form-control" id="exampleInputEmail1"
                               placeholder=""value="{{$datosUsuario->telefono}}">

                    </div>
                    <div class="form-group">
                        <label for="">Télefono 2</label>
                        @if($datosUsuario->telefono_2 == null)
                            <span class="help-block">No registrado</span>
                        @else
                        <input type="text" name="" class="form-control" id="exampleInputEmail1"
                               placeholder="" value="{{$datosUsuario->telefono_2}}">
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

