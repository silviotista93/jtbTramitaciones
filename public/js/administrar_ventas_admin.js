function success(start, end){
    fechaInicio = start;
    fechaFin = end;
    cargarTabla();
}

function cancel (){
    fechaInicio = null;
    fechaFin = null;
    cargarTabla();
}

$(function (){
    startRangoFecha("#dpFecha", success, cancel);
    cargarTabla();
});