@extends('admin.layout')

@section('contenido')

@section('header')
    <h1>
        <strong>Perfil</strong>
        <small>Usuario</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('usuarios')}}"><i class="fa fa-dashboard"></i> Usuarios</a></li>
        <li class="active">Perfil</li>
    </ol>
@stop

<div class="row justify-content-end">

    <div class="col-md-6">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black"
                 style="background: url('/adminlte/img/fondo-perfil.jpg') center center;">
                <h3 class="widget-user-username"
                    style="font-weight: 400">{{auth()->user()->name}} {{auth()->user()->apellidos}}</h3>
                <h5 class="widget-user-desc"></h5>
            </div>
            <div class="widget-user-image dropzone dz-clickable"
                 style="border: 0px !important; margin-left: -69px !important;margin-top: -56px !important; background-color:rgba(0, 0, 0, 0);">
                @if(auth()->user()->foto == null)
                    <img class="img-circle dz-default dz-message" src="/adminlte/img/perfil.jpg" alt="User Avatar">
                 @else
                <img class="img-circle dz-default dz-message" src="{{auth()->user()->foto}}" alt="User Avatar">
                    @endif
            </div>
            <form method="POST" action="{{route('actualizarFotoPerfil',auth()->user()->id)}}">
                @csrf {{method_field('PUT')}}
                <input type="hidden" name="foto" value="" id="inputFotoUsuario">


                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-6 border-right">
                            <div class="description-block">
                                <span class="description-header">EMAIL</span>
                                <h5 class="">{{auth()->user()->email}}</h5>

                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 border-right">
                            <div class="description-block">
                                <span class="description-header">CARGO</span>
                                <h5 class="">{{auth()->user()->roles->first()->name}}</h5>
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
        {{--<div class="form-group text-center">
            <label for="archivo">Actualiza tu foto de Perfil</label>
            <div class="form-group text-center">
                <div class="text-center dropzone dz-clickable" id="f_foto" style="width: 65%; margin: auto; border: 0px !important;">
                    <div class="text-center dz-default dz-message" data-dz-message="" style="margin-top: 0px !important;">
                        <span><img width="100%" src="/adminlte/img/fondo_perfil.png"></span>
                    </div>
                </div>
            </div>
        </div>--}}

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
                <h3 class="box-title">Cambiar Contraseña</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{route('actualizarContraseña',auth()->user()->id)}}">
                @csrf {{method_field('PUT')}}
                <div class="box-body">
                    <!-- Contraseña-->
                    <div class="form-group">
                        <label for="password">Nueva Contraseña</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                               placeholder="Nueva Contraseña">
                        <span class="help-block">Dejar en blanco si no deseas cambiar la contraseña</span>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail1"
                               placeholder="Repite Contraseña">

                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block boton-actualizar">Actualizar Contraseña
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@stop

@section('dropzoneProfile')
    <script>
        new Dropzone('.dropzone', {
            url: '{{route('admin.usuarioImagen')}}',
            acceptedFiles: 'image/*',
            paramName: 'foto',
            maxFiles: 1,

            headers: {

                'X-CSRF-TOKEN': '{{csrf_token()}}'

            },
            success: function (file, response) {

                $('#inputFotoUsuario').val(response);
                $('.mostrarBtnUpdateFoto').show();
            }

        });

        Dropzone.autoDiscover = false;

    </script>

@endsection