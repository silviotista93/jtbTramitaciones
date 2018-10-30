/*==========================================================================================
METODO DE PAGO PARA ABONOS DE LICENCIA
==========================================================================================*/
$('#nuevoMetodoPagoAbono').on('change', function () {
    if (this.value == 'TC') {
        $('.inputMetodoPagoAbono').show('blind');
    } else if (this.value == 'TD') {
        $('.inputMetodoPagoAbono').show('blind');
    } else {
        $('.inputMetodoPagoAbono').hide('blind');
        listarMetodosAbono();
    }
});

/*=============================================
CAMBIO EN TRANSACCION
=============================================*/
$(".form-pagar-abono").on("change", ".inputMetodoPagoAbono", function () {

    listarMetodosAbono();
});

function listarMetodosAbono() {

    var listaMetodos = "";
    if ($('#nuevoMetodoPagoAbono').val() == 'Efectivo') {

        $('#listaMetodoPagoLicenciaAbono').val('Efectivo');
    } else {
        $('#listaMetodoPagoLicenciaAbono').val($('#nuevoMetodoPagoAbono').val() + '-' + $('.inputMetodoPagoAbono').val());
    }

}
/*==========================================================================================
METODO DE PAGO PARA ABONOS DE SEGURO
==========================================================================================*/
$('#nuevoMetodoPagoAbonoSeguro').on('change', function () {
    if (this.value == 'TC') {
        $('.inputMetodoPagoAbonoSeguro').show('blind');
    } else if (this.value == 'TD') {
        $('.inputMetodoPagoAbonoSeguro').show('blind');
    } else {
        $('.inputMetodoPagoAbonoSeguro').hide('blind');
        listarMetodosAbonoSeguro();
    }
});

/*=============================================
CAMBIO EN TRANSACCION
=============================================*/
$(".form-pagar-abono-seguro").on("change", ".inputMetodoPagoAbonoSeguro", function () {

    listarMetodosAbonoSeguro();
});

function listarMetodosAbonoSeguro() {

    var listaMetodos = "";
    if ($('#nuevoMetodoPagoAbonoSeguro').val() == 'Efectivo') {

        $('#listaMetodoPagoSeguroAbono').val('Efectivo');
    } else {
        $('#listaMetodoPagoSeguroAbono').val($('#nuevoMetodoPagoAbonoSeguro').val() + '-' + $('.inputMetodoPagoAbonoSeguro').val());
    }

}


