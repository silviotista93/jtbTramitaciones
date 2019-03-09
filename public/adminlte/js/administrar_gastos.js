function success(start, end){
    fechaFin = end;
    fechaInicio = start;
    graficar();
    cargarTabla ();
}

function cancel (){
    graficar();
    cargarTabla ();
}

$(function (){
    startRangoFecha("#daterange-gastos-btn", success, cancel);
    graficar();
});

function graficar (){
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
            grafico.setData(r);
        }
    },"JSON").fail(function (){
        alert("Error al cargar los datos");
    });
}