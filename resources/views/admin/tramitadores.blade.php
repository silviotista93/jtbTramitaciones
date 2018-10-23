@extends('admin.layout')

@section('header')
    <h1>
        <strong>Tramitadores</strong>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Tramitadores</li>
        <li class="active">Administrar</li>
    </ol>
@stop

@section('contenido')

    <div class="box box-primary">
        <div class="box-header">
            <div class="form-group">
                <h3 class="box-title">Lista de Tramitadores</h3>
                <button class="btn btn-primary pull-right" data-toggle="modal"
                        data-target="#modalAgregarTramitador">
                    <i class="fa fa-plus"></i> Crear Tramitador
                </button>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered dt-responsive table-striped table_tramitadores">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Teléfono 2</th>
                    @if(auth()->user()->hasRole('Administrador'))
                    <th>Acciones</th>
                    @endif
                    <th>Tramitaciones</th>

                </tr>
                </thead>

            </table>
        </div>
    </div>

    <!-- MODAL AGREGAR TRAMITADOR -->
    <div class="modal fade" id="modalAgregarTramitador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #056F00;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Crear Tramitador <i
                                class="fa fa-plus"></i></h4>
                </div>
                <form method="post" action="{{route ('tramitadorCreado')}}">
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
                                               placeholder="Ingrese Apellidos">
                                        {!! $errors->first('apellidos','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                    <label for=""><span class="text-danger">*</span> Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Ingrese Email">
                                        {!! $errors->first('email','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('telefono')? 'has-error':''}}">
                                    <label for=""><span class="text-danger">*</span> Teléfono</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" name="telefono" class="form-control"
                                               data-inputmask='"mask": "(999) 999-9999"' placeholder="Ingrese teléfono"
                                               data-mask value="{{old('telefono')}}">
                                        {!! $errors->first('telefono','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('telefono_2')? 'has-error':''}}">
                                    <label for="">Teléfono 2</label><span class="help-block inline"> (Opcional)</span>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input value="{{old('telefono_2')}}" id="" type="text" name="telefono_2" class="form-control"
                                               data-inputmask='"mask": "(999) 999-9999"'
                                               data-mask placeholder="Ingrese teléfono 2">
                                        {!! $errors->first('telefono_2','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                                <input type="hidden" name="rol" value="3">
                                {{--<div class="form-group {{$errors->has('rol')? 'has-error':''}}">
                                    <label for="">Seleccione Perfil</label>
                                    <select name="rol" id="" class="form-control">
                                        <option value="">Seleccione Perfil</option>
                                        @foreach($roles as $rol)
                                            <option {{old('rol')==$rol->id ? 'selected': ''}} value="{{$rol->id}}">{{$rol->name}}</option>
                                        @endforeach

                                    </select>
                                    {!! $errors->first('rol','<span class="help-block">Seleccione Tipo</span>')!!}
                                </div>--}}

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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL EDITAR TRAMITADOR -->
    <div class="modal fade" id="modalEditarTramitador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #056F00;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Editar Tramitador <i
                                class="fa fa-pencil"></i></h4>
                </div>
                <form method="post" id="formEditTramitador">
                    @csrf {{method_field('PUT')}}
                    <div class="modal-body">
                        <div class="box-body">
                            <form action="">
                                <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                                    <label for="">Nombres</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input id="nameTramitador" type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Ingrese Nombres">
                                        {!! $errors->first('name','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('apellidos')? 'has-error':''}}">
                                    <label for="">Apellidos</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input id="apellidosTramitador" type="text" name="apellidos" value="{{old('apellidos')}}" class="form-control"
                                               placeholder="Ingrese Apellidos">
                                        {!! $errors->first('apellidos','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                    <label for="">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input id="emailTramitador" type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Ingrese Email">
                                        {!! $errors->first('email','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('telefono')? 'has-error':''}}">
                                    <label for="">Teléfono</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input id="telefonoTramitador" type="text" name="telefono" class="form-control"
                                               data-inputmask='"mask": "(999) 999-9999"' placeholder="Ingrese teléfono"
                                               data-mask value="{{old('telefono')}}">
                                        {!! $errors->first('telefono','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('telefono_2')? 'has-error':''}}">
                                    <label for="">Teléfono 2</label><span class="help-block inline"> (Opcional)</span>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input  value="{{old('telefono_2')}}" id="telefono_2Tramitador" type="text" name="telefono_2" class="form-control"
                                               data-inputmask='"mask": "(999) 999-9999"'
                                               data-mask placeholder="Ingrese teléfono 2">
                                        {!! $errors->first('telefono_2','<span class="help-block">*:message</span>')!!}
                                    </div>
                                </div>
                                <input type="hidden" name="rol" value="3">
                            {{--<div class="form-group {{$errors->has('rol')? 'has-error':''}}">
                                <label for="">Seleccione Perfil</label>
                                <select name="rol" id="" class="form-control">
                                    <option value="">Seleccione Perfil</option>
                                    @foreach($roles as $rol)
                                        <option {{old('rol')==$rol->id ? 'selected': ''}} value="{{$rol->id}}">{{$rol->name}}</option>
                                    @endforeach

                                </select>
                                {!! $errors->first('rol','<span class="help-block">Seleccione Tipo</span>')!!}
                            </div>--}}

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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@section('dataTablesTramitadores')
    <script>
        $('.table_tramitadores').DataTable({
            "processing": true,
            "serverSide": true,
            "data": null,
            "ajax": "/admin/api/tramitadores",
            "columns":[
                {data: 'name'},
                {data: 'apellidos'},
                {data: 'email'},
                {data: 'telefono'},
                {data: 'telefono_2',defaultContent:'<span class="label label-danger text-center">Ningún valor por defecto</span>'},
                    @if(auth()->user()->hasRole('Administrador'))
                {
                    render:function (data,type, JsonResultRow,meta) {
                        return '<div class="text-center">' +
                            '<button class="btn btn-sm btn-info btnEditarTramitador" idTramitador="'+JsonResultRow.id+'" data-target="#modalEditarTramitador" data-toggle="modal"><i class="fa fa-pencil"></i></button>' +
                            ' <form method="post" class="formDeleteTramita inline" action="">' +
                            '@csrf
                                <input type="hidden" name="_method" value="DELETE">' +
                            '<a idTramitador="'+JsonResultRow.id+'" class="btn btn-sm btn-danger btnEliminarTramitador"><i class="fa fa-times"></i></a>' +
                            '</form>' +
                            '</div>'

                    }
                },
                @endif
                {
                    render:function (data,type, JsonResultRow,meta) {
                        return '<a href="/admin/tramitador-ventas/'+JsonResultRow.id+'" class="btn btn-block btn-warning "><i class="fa fa-eye"></i></a>'

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
