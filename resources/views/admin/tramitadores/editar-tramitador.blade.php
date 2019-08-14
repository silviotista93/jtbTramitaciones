@extends('admin.layout')


@section('contenido')

@section('header')
    <h1>
        <strong>Editar tramitador {{ $tramitador->name }} {{ $tramitador->apellidos }}</strong>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Tramitadores</li>
        <li class="active">Editar Tramitador</li>
    </ol>
@stop
<!--=====================================
		INFORMACIÓN TRAMITADOR
======================================-->
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                {{--<h3 class="box-title">Agregar Tramitador</h3>--}}
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Nombres</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="name" value="{{old('name')}} {{ $tramitador->name }}"
                                       class="form-control" placeholder="Ingrese Nombres">
                                {!! $errors->first('name','<span class="help-block">*:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{$errors->has('apellidos')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Apellidos</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="apellidos"
                                       value="{{old('apellidos')}} {{ $tramitador->apellidos }}" class="form-control"
                                       placeholder="Ingrese Apellidos">
                                {!! $errors->first('apellidos','<span class="help-block">*:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" value="{{old('email')}} {{ $tramitador->email }}"
                                       class="form-control inputEmailAgregarTramitador" placeholder="Ingrese Email">
                                {!! $errors->first('email','<span class="help-block">*:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{$errors->has('telefono')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Teléfono</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" name="telefono" class="form-control"
                                       data-inputmask='"mask": "(999) 999-9999"' placeholder="Ingrese teléfono"
                                       data-mask value="{{old('telefono')}} {{ $tramitador->telefono }}">
                                {!! $errors->first('telefono','<span class="help-block">*:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{$errors->has('telefono_2')? 'has-error':''}}">
                            <label for="">Teléfono 2</label><span class="help-block inline"> (Opcional)</span>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input value="{{old('telefono_2')}} {{ $tramitador->telefono_2 }}" id="" type="text"
                                       name="telefono_2"
                                       class="form-control"
                                       data-inputmask='"mask": "(999) 999-9999"'
                                       data-mask placeholder="Ingrese teléfono 2">
                                {!! $errors->first('telefono_2','<span class="help-block">*:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{$errors->has('direccion')? 'has-error':''}}">
                            <label for=""><span class="text-danger">*</span> Direccion</label><span
                                    class="help-block inline"> (Opcional)</span>
                            @if ($tramitador->direccion)
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="direccion"
                                           value="{{old('direccion')}} {{ $tramitador->direccion}}" class="form-control"
                                           placeholder="Ingrese direccion">
                                    {!! $errors->first('direccion','<span class="help-block">*:message</span>')!!}
                                </div>
                            @else
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="direccion" value="{{old('direccion')}}"
                                           class="form-control"
                                           placeholder="No registrada">
                                    {!! $errors->first('direccion','<span class="help-block">*:message</span>')!!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success pull-right">Actualizar información</button>
                </div>
            </div>
        </div>
    </div>
</div>

<h3>
    <strong>Editar precios por categoría</strong>
    <small></small>
</h3>


<div class="row justify-content-center">
    <!--=====================================
		PRECIOS CON CURSO TRAMITADOR
======================================-->
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Precios categorías con curso</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <div class="row">
                        @foreach($categorias as $categoria)
                            <div class="col-md-6">
                                <label for="inputEmail3" class="col-sm-2 control-label">{{ $categoria->categoria }}</label>
                                <div class="col-sm-10">
                                    <input type="tex" class="form-control" value="{{ $categoria->precio_curso }}" id="inputEmail3" placeholder="Email">
                                    <span class="help-block" style="font-size: 13px;">El porcentaje de descuento es 20%</span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block pull-right">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================
		PRECIOS SIN CURSO TRAMITADOR
======================================-->
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Precios categoria sin curso</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <div class="row">
                        @foreach($categorias as $categoria)
                            <div class="col-md-6">
                                <label for="inputEmail3" class="col-sm-2 control-label">{{ $categoria->categoria }}</label>
                                <div class="col-sm-10">
                                    <input type="tex" class="form-control" value="{{ $categoria->precio_sincurso }}" id="inputEmail3" placeholder="Email">
                                    <span class="help-block" style="font-size: 13px;">El porcentaje de descuento es 20%</span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block pull-right">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</div>


@stop