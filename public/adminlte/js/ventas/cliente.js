function success(start, end){
    fechaFin = end;
    fechaInicio = start;
    cargarTabla();
}

function cancel (){
    cargarTabla();
}

$(function (){
    startRangoFecha("#dpFechaCliente", success, cancel);
    cargarTabla();
});