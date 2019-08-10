const frmTipoServicio = $("#form_agregar_gasto");

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
    $("#table_tipo_gastos").on('click', '.editarTipoGasto', function (e) {
        e.preventDefault();
        cargarDatosActualizar(JSON.parse($(this).attr('data-acc')));
    });
    
    $("#btnCancelar").click(function (e) {
        reset();
    });
    
    $("#openConfiguracion").click(reset);
});

function reset () {
    $("#form_agregar_gasto").removeClass('update');
    $("#txtNombre").val('');
    $("#txtId").val('');
    frmTipoServicio.attr("action", frmTipoServicio.attr("data-crear"));
}

function cargarDatosActualizar(data) {
    $("#form_agregar_gasto").addClass('update');
    $("#txtId").val(data.id);
    $("#txtNombre").val(data.tipo_gasto);
    frmTipoServicio.attr("action", frmTipoServicio.attr("data-actualizar"));
}

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