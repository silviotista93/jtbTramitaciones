@extends('admin.layout')

@section('header')
    <h1>

        <strong>Reportes de Ventas</strong>
        <small>Admin</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Tramites</a></li>
        <li class="active">Resportes</li>
    </ol>
@stop

@section('contenido')

    <div class="box box-primary">

        <div class="box-header">
            <div class="form-group">
                <button type="button" class="btn btn-default pull-right" id="daterange-btn2">
                    <span><i class="fa fa-calendar"></i> Rango de Fecha</span>
                    <i class="fa fa-caret-down"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-solid bg-teal-gradient">
                        <div class="box-header">
                            <i class="fa fa-th">
                                <h3 class="box-title">Gráfico de Ventas</h3>
                            </i>
                        </div>
                        <div class="box-body border-radius-none nuevoGraficoVentas">
                            <div class="chart" id="line-chart-ventas" style="height: 250px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('grafica')
    <script src="/adminlte/plugins/daterangepicker/moment_spa.js"></script>
    <script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="/adminlte/plugins/daterangepicker/daterangepicker.css" />
    <script src="/js/rango_fecha.js"></script>
    <script>
        var grafico = new Morris.Line({
            element          : 'line-chart-ventas',
            resize           : true,
            xkey             : 'fecha',
            ykeys            : ['ventas'],
            labels           : ['ventas'],
            lineColors       : ['#efefef'],
            lineWidth        : 2,
            hideHover        : 'auto',
            gridTextColor    : '#fff',
            gridStrokeWidth  : 0.4,
            pointSize        : 4,
            pointStrokeColors: ['#efefef'],
            gridLineColor    : '#efefef',
            gridTextFamily   : 'Open Sans',
            preUnits        : '$',
            gridTextSize     : 10,
            xLabelFormat: function (x) {
                date = moment(x);
                return date.format("MMMM D, YYYY");
            },
        });
    </script>
    <script src="/adminlte/js/reporte_grafico_venta.js"></script>
@endsection