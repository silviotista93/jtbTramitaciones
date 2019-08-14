const frmTipoServicio = $("#form_agregar_gasto");

tipoGasto = 0;

const cargarDatos = function () {
    graficar();
    cargarTabla();
};

function success(start, end) {
    fechaFin = end;
    fechaInicio = start;
    cargarDatos();
}

function cancel() {
    cargarDatos();
}

$(function () {
    startRangoFecha("#daterange-gastos-btn", success, cancel);
    graficar();
    $("#table_tipo_gastos").on('click', '.editarTipoGasto', function (e) {
        e.preventDefault();
        cargarDatosActualizar(JSON.parse($(this).attr('data-acc')));
    });

    $("#btnCancelar").click(function (e) {
        reset();
    });

    $("#select_tipo_opciones").change(function () {
        tipoGasto = $(this).val();
        cargarDatos();
    });

    $("#openConfiguracion").click(reset);
    //modal_ver_gasto
    $("#btnEditarGasto").click(() => {
        $("#modal_ver_gasto").addClass("edit");
        $("#modal_ver_gasto input,#modal_ver_gasto select, #modal_ver_gasto textarea").removeAttr("disabled");
    });

    $("#btnAgregarGasto").click(() => {
        $(".valor_gasto_db").val('');
    });
});

function reset() {
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

function graficar() {
    let data = {
        fechaInicio: fechaInicio,
        fechaFin: fechaFin,
        tipoGasto: tipoGasto
    };
    $.get(urlGastos, data, function (r) {
        if (r.length < 1) {
            $("#txtGraficaGastos").show();
            $("#line-chart-gastos").hide();
        } else {
            $("#txtGraficaGastos").hide();
            $("#line-chart-gastos").show();
            grafico.setData(r.resumen);
            $("#txtTipoGasto").text(r.tipoGasto);
            $("#totalGastos").text(r.total);
        }
    }, "JSON").fail(function () {
        alert("Error al cargar los datos");
    });
}