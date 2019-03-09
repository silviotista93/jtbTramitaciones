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
            <div class="col-xs-11" style="margin: auto;float:none;">
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
        <div class="row">
            <div class="col-xs-11" style="margin: auto;float:none;">
                <div class="box box-solid bg-red-gradient">
                    <div class="box-header">
                        <i class="fa fa-th">
                                    <h3 class="box-title">Gráfico de Gastos</h3>
                                </i>
                    </div>
                    <div class="box-body border-radius-none">
                        <div class="chart" id="line-chart-gastos" style="height: 250px;display:none;"></div>
                        <div id="txtGraficaGastos" style="text-align: center;font-weight: bold;font-size: 1.4rem;">No hay registros...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <!-- Tramites Más Vendidos -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Tramites Más Vendidos</h3>
            </div>
            <div class="box-body">
                <canvas id="pieChart" style="height: 265px; width: 531px;" width="531" height="265"></canvas>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>


@stop 
@section('grafica')
<script>
    const urlGastos = "{{route("reporteGastos")}}";
</script>
<script src="/adminlte/plugins/daterangepicker/moment_spa.js"></script>
<script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="/adminlte/plugins/daterangepicker/daterangepicker.css" />
<script src="/js/rango_fecha.js"></script>
<script>
    var graficoGastos = new Morris.Line({
            element          : 'line-chart-gastos',
            resize           : true,
            xkey             : 'fecha',
            ykeys            : ['gasto'],
            labels           : ['Gastos'],
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
<script src="/adminlte/plugins/chartjs/Chart.min.js"></script>

<script>

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = {!! json_encode($resumenTramites); !!}
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : false,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);
</script>
@endsection