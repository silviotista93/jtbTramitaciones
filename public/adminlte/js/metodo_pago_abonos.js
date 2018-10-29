$(function () {
    $('#nuevoMetodoPagoAbono').on('change', function () {
        if (this.value == 'TC')
        {
        $('.inputMetodoPagoAbono').show('blind');

        } else if (this.value == 'TD') {
            $('.inputMetodoPagoAbono').show('blind');
        }else{
            $('.inputMetodoPagoAbono').hide('blind');
        }
    });

    /*=============================================
    CAMBIO EN TRANSACCION
    =============================================*/
    $(".form-pagar-abono").on("change", "#nuevoCodigoTransaccionLicencia", function() {

        listarMetodos();
    });

    function listarMetodos() {

        var listaMetodos = "";
        if ($('#nuevoMetodoPagoAbono').val() == 'Efectivo'){

            $('#listaMetodoPagoLicenciaAbono').val('Efectivo');
        }else {
            $('#listaMetodoPagoLicenciaAbono').val($('#nuevoMetodoPagoAbono').val()+'-'+$('#inputMetodoPagoAbono').val());
        }

    }

});