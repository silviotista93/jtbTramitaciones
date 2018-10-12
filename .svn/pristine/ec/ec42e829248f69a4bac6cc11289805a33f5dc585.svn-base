@extends('admin.layout')

@section('header')
    <h1>
        <strong>Dashboard</strong>
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
        {{--<li class="active">Ini</li>--}}
    </ol>
@stop

@section('contenido')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>15</h3>

                    <p>Tramites del dia y Reportes</p>
                </div>
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$cantidadClientes}}</h3>

                    <p>Clientes</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="{{route('clientes')}}" class="small-box-footer">Más info <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$cantidadTramiPendiente}}</h3>

                    <p>Tramites Pendientes</p>
                </div>
                <div class="icon">
                    <i class="fa fa-hourglass-2"></i>
                </div>
                <a href="{{route('tramitesPendientes')}}" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>12</h3>

                    <p>Gastos del dia</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Últimos tramites registrados</h3>
                    <a href="{{route('adminVentas')}}" class="btn btn-primary pull-right"><i
                                class="">Todos los Tramites</i>
                    </a>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th>Cliente</th>
                            <th>Vendedor</th>
                            <th style="width: 0px">Tipo Tramite</th>
                            <th style="width: 0px">Hace</th>
                            <th>Info</th>
                        </tr>
                        @foreach($ultimosTramites as $tramites)
                            <tr>
                                <td>{{$tramites->idcliente->name}} {{$tramites->idcliente->apellidos}}</td>
                                <td>{{$tramites->idvendedor->name}} {{$tramites->idvendedor->apellidos}}</td>
                                <td>{{$tramites->tipoTramite->nombre}}</td>
                                <td>
                                    <small class="label label-danger"><i
                                                class="fa fa-clock-o"></i> {{$tramites->created_at->diffForHumans()}}
                                    </small>
                                </td>
                                @if($tramites->id_tipoTramite == 1)
                                    <td class="text-center"><a href="/admin/info-venta/{{$tramites->id}}"
                                                               class="btn btn-md btn-default "><i class="fa fa-eye"></i></a>
                                    </td>
                                @else
                                    <td class="text-center"><a href="/admin/info-venta-licencia/{{$tramites->id}}"
                                                               class="btn btn-md btn-default "><i class="fa fa-eye"></i></a>
                                    </td>
                                @endif


                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-5">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Agenda</h3>
                    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalAgregarContacto">
                        <i
                                class="fa fa-plus"></i>
                    </button>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped dt-responsive" id="table_agenda">
                        <thead>
                        <tr class="text-center">
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Descripción</th>
                            <th>Más Info</th>
                        </tr>
                        </thead>


                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

    <!-- MODAL AGREGAR CONTACTO -->
    <div class="modal fade" id="modalAgregarContacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #056F00;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Agregar Contacto <i
                                class="fa fa-plus"></i></h4>
                </div>
                <form class="form-contacto-creado" method="post" action="{{route ('agregarContacto')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="box-body">

                            <div class="form-group {{$errors->has('nombresApellidos')? 'has-error':''}}">
                                <label for="">Nombres y Apellidos *</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="nombresApellidos" value="{{old('nombresApellidos')}}" class="form-control"
                                           placeholder="Ingrese nombre completo">
                                    {!! $errors->first('nombresApellidos','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('telefono')? 'has-error':''}}">
                                <label for="">Telefono *</label>
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
                            <div class="form-group {{$errors->has('telefono_2')? 'has-error':''}}">
                                <label for="">Telefono 2</label><span class="help-block inline">(Opcional)</span>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="text" name="telefono_2" class="form-control"
                                           data-inputmask='"mask": "(999) 999-9999"'
                                           data-mask value="{{old('telefono_2')}}">
                                    {!! $errors->first('telefono_2','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                <label for="">Email</label><span class="help-block inline">(Opcional)</span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control emailAgregarUsuario" placeholder="Ingrese email">
                                    {!! $errors->first('email','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('direccion')? 'has-error':''}}">
                                <label for="">Dirección</label><span class="help-block inline">(Opcional)</span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control"
                                           placeholder="Ingrese direccion">
                                    {!! $errors->first('direccion','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('descripcion')? 'has-error':''}}">
                                <label for="">Descripción *</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control"
                                           placeholder="Ingrese descripcion">
                                    {!! $errors->first('descripcion','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>

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


    <!-- MODAL VER INFO CONTACTO -->
    <div class="modal fade" id="modalInfoAgendaContacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #056F00;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color: #FFFFFF;">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Información Contacto <i
                                class=""></i></h4>
                </div>
                    <div class="modal-body">
                        <div class="box-body">

                            <div class="form-group {{$errors->has('nombresApellidos')? 'has-error':''}}">
                                <label for="">Nombres y Apellidos *</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="nombresContacto" type="text" name="nombresApellidos" value="{{old('nombresApellidos')}}" class="form-control"
                                           placeholder="Ingrese nombre completo" disabled>
                                    {!! $errors->first('nombresApellidos','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('telefono')? 'has-error':''}}">
                                <label for="">Telefono *</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input id="telefonoContacto" type="text" name="telefono" class="form-control"
                                           data-inputmask='"mask": "(999) 999-9999"'
                                           data-mask value="{{old('telefono')}}" disabled>
                                    {!! $errors->first('telefono','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('telefono_2')? 'has-error':''}}">
                                <label for="">Telefono 2</label><span class="help-block inline">(Opcional)</span>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input id="telefono_2Conctacto" type="text" name="telefono_2" class="form-control"
                                           data-mask value="{{old('telefono_2')}}" placeholder="nigún valor" disabled>
                                    {!! $errors->first('telefono_2','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                                <label for="">Email</label><span class="help-block inline">(Opcional)</span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="emailContacto" type="email" name="email" value="{{old('email')}}" class="form-control emailAgregarUsuario" placeholder="nigún valor" disabled>
                                    {!! $errors->first('email','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('direccion')? 'has-error':''}}">
                                <label for="">Dirección</label><span class="help-block inline">(Opcional)</span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="direccionContacto" type="text" name="direccion" value="{{old('direccion')}}" class="form-control"
                                           placeholder="nigún valor" disabled>
                                    {!! $errors->first('direccion','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('descripcion')? 'has-error':''}}">
                                <label for="">Descripción *</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="descripcionContacto" type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control"
                                           placeholder="Ingrese descripcion" disabled>
                                    {!! $errors->first('descripcion','<span class="help-block">*:message</span>')!!}
                                </div>
                            </div>

                        </div>
                        <input type="hidden" name="foto" value="/adminlte/img/perfil.jpg" id="inputArchivoUsuario">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                    </div>
            </div>
        </div>
    </div>

@section('dataTablesAgenda')
    <script>
        $('#table_agenda').DataTable({
            "processing": true,
            "serverSide": true,
            "data": null,
            "ajax": "/admin/api/agenda",
            "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "Todos"]],
            "columns":[
                {data: 'nombre'},
                {data: 'telefono'},
                {data: 'descripcion'},
                {
                    render:function (data,type, JsonResultRow,meta) {
                        return '<button class="btn btn-block btn-default btnInfoContacto" idContacto="'+JsonResultRow.id+'" data-toggle="modal" data-target="#modalInfoAgendaContacto"><i class="fa fa-eye"></i></button>'

                    }
                }

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
