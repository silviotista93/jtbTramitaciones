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
    }
    $.get(url,data,function (r){
        grafico.setData(r);
    },"JSON").fail(function (){
        alert("Error al cargar los datos");
    });
}