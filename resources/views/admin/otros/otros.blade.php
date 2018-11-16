@extends('admin.layout')

@section('header')
    <h1>
        <strong>Otros</strong>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Administrar</li>
        <li class="active">Otros</li>
    </ol>
@stop

@section('contenido')
    <div class="row">
        <!--ACTAULIZAR DESCUENTO POR EXAMEN MEDICO -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Actualizar descuento por examen médico</h3>
                    <span class="label label-info text-center pull-right" style="font-size: 16px;"><i class="fa fa-medkit"></i> Descuento actual ${{$valor_medico->valor}}</span>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{{route('examen-medico-actualizado',$valor_medico->id)}}">
                    @csrf {{method_field('PUT')}}
                    <div class="box-body">
                        <!-- Contraseña-->
                        <div class="form-group {{$errors->has('valor')? 'has-error':''}}">
                            <label for="password">Nuevo Precio</label>
                            <input type="text" name="valor" class="form-control" id=""
                                   placeholder="Digite el valor">
                            {!! $errors->first('valor','<span class="help-block">*:message</span>')!!}
                            <span class="help-block"></span>
                        </div>
                        <span class="help-block">Fecha de última actualizacion {{$valor_medico->updated_at->format('l jS \\of F Y h:i:s A')}}</span>

                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Actualizar Precio</button>
                </form>
            </div>
        </div>
        <!--ACTAULIZAR DESCUENTO POR ESCUELA DE CONDUCCION -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title" style="font-size: 16px;">Actualizar descuento por escuela de conducción</h3>
                    <span class="label label-danger text-center pull-right" style="font-size: 16px;"><i class="fa fa-car"></i> Descuento actual ${{$valor_escuela->valor}}</span>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{{route('escuela-conduccion-actualizado',$valor_escuela->id)}}">
                    @csrf {{method_field('PUT')}}
                    <div class="box-body">
                        <!-- Contraseña-->
                        <div class="form-group {{$errors->has('valor')? 'has-error':''}}">
                            <label for="password">Nuevo Precio</label>
                            <input type="text" name="valor" class="form-control" id=""
                                   placeholder="Digite el valor">
                            {!! $errors->first('valor','<span class="help-block">*:message</span>')!!}
                            <span class="help-block"></span>
                        </div>
                        <span class="help-block">Fecha de última actualizacion {{$valor_escuela->updated_at->format('l jS \\of F Y h:i:s A')}}</span>

                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Actualizar Precio</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title" style="font-size: 16px;">Actualizar derechos de transito</h3>
                    <span class="label label-success text-center pull-right" style="font-size: 16px;"><i class="fa fa-car"></i> Precio actual ${{$valor_derechos->valor}}</span>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{{route('precio-derechos-transito',$valor_derechos->id)}}">
                    @csrf {{method_field('PUT')}}
                    <div class="box-body">
                        <!-- Contraseña-->
                        <div class="form-group {{$errors->has('valor')? 'has-error':''}}">
                            <label for="password">Nuevo Precio</label>
                            <input type="text" name="valor" class="form-control" id=""
                                   placeholder="Digite el valor">
                            {!! $errors->first('valor','<span class="help-block">*:message</span>')!!}
                            <span class="help-block"></span>
                        </div>
                        <span class="help-block">Fecha de última actualizacion {{$valor_derechos->updated_at->format('l jS \\of F Y h:i:s A')}}</span>

                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Actualizar Precio</button>
                </form>
            </div>
        </div>
    </div>
@stop