function success(start, end){
    fechaFin = end;
    fechaInicio = start;
    graficar();
}

function cancel (){
    graficar();
}

$(function (){
    startRangoFecha("#daterange-btn2", success, cancel);
    graficar();
});

function graficar (){
    let url = "/test";
    let data = {
        fechaInicio: fechaInicio,
        fechaFin: fechaFin
    };
    $.get(url,data,function (r){
        if (r.length < 1){
            $("#txtGraficaVentas").show();
            $("#line-chart-ventas").hide();
        }else{
            $("#txtGraficaVentas").hide();
            $("#line-chart-ventas").show();
            grafico.setData(r);
        }
    },"JSON").fail(function (){
        alert("Error al cargar los datos");
    });
    graficarGastos();
}

function graficarGastos (){
    let data = {
        fechaInicio: fechaInicio,
        fechaFin: fechaFin
    };
    $.get(urlGastos,data,function (r){
        if (r.length < 1){
            $("#txtGraficaGastos").show();
            $("#line-chart-gastos").hide();
        }else{
            $("#txtGraficaGastos").hide();
            $("#line-chart-gastos").show();
            graficoGastos.setData(r);
        }
    },"JSON").fail(function (){
        alert("Error al cargar los datos");
    });
}