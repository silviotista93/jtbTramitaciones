$(document).ready(function () {
    $('.total_administarVentas').number(true, 2);
    $('.infoVentaTotal').number(true, 2);
    $('.infoVentaPrecio').number(true, 2);
    $('.infoVentaPrecioTotal').number(true, 2);
    $('.valorDeuda').number(true, 2);
    $('.valorFinanciacion').number(true, 2);
    $('.valorSaldo_a_la_fecha').number(true, 2);
    $('.valorPagoHistorialAbonos').number(true, 2);
    $('.valorPagoHistorialSaldo').number(true, 2);
    $('.valor_a_pagar_financiacion').number(true, 2);
    $('.infoVentaSaldo').number(true, 2);
    $('.infoVentaAbono').number(true, 2);

});
$(".valor_a_pagar_financiacion").keyup(function () {
    var efectivo = 0;
    var saldo = 0;
    var cambio = 0;
    efectivo = $(this).val();
    saldo = $('.valorSaldo_a_la_fecha').val();
    cambio = Number(saldo - efectivo);
    if (cambio < 0) {
        $.confirm({
            animationBounce: 1.5,
            closeAnimation: 'scale',
            icon: 'fa fa-warning',
            title: 'El valor es mayor a la deuda',
            content: '',
            type: 'red',
            typeAnimated: true,
            buttons: {

                cerrar: function () {
                }
            }
        });
        $('.valorDeuda').val(saldo);
        $('.valorPagar').val(0);
        $(this).val(0);
    } else {
        $(".estadoSaldo").val('Debe');
        $('.valorDeuda').val(cambio);
        $('.valorDeudaDB').val(cambio);
        $('.valorPagar').val(efectivo);
    }

    if (cambio == 0) {
        $('.estadoSaldo').val('Cancelado')
    } else {
        $('.estadoSaldo').val('Debe')
    }


    console.log(cambio);
    // var nuevoCambioEfectivo = $(this).parent().parent().parent().children('#camposSaldos').children().children('#saldoVentaAbono');

    // nuevoCambioEfectivo.val(cambio);
});

$('.btn-pagar-abono-seguro').click(function (e) {
    //VALIDACIONES
    e.preventDefault();
   if ($('#valor_a_pagar_financiacion').val()  === '' || $('#valor_a_pagar_financiacion').val() === '0') {
        toastr.error('Valor a Pagar Requerido');

    } else if ($('#nuevoMetodoPagoAbonoSeguro').val() === '') {
        toastr.error('Metodo de Pago Requerido');

    } else {

        $.confirm({
            animationBounce: 1.5,
            closeAnimation: 'scale',
            title: '¿Realizar Abono?',
            content: '',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Esta bien!',
                    btnClass: 'btn-green',
                    action: function () {

                        $(".form-pagar-abono-seguro").submit();

                    }
                },

                cerrar: function () {
                }
            }
        });
    }
});

$('.btn-pagar-abono').click(function (e) {
    //VALIDACIONES
    e.preventDefault();
    if ($('#valor_a_pagar_financiacion').val()  === '' || $('#valor_a_pagar_financiacion').val() === '0') {
        toastr.error('Valor a Pagar Requerido');

    } else if ($('#nuevoMetodoPagoAbono').val() === '') {
        toastr.error('Metodo de Pago Requerido');

    } else {

        $.confirm({
            animationBounce: 1.5,
            closeAnimation: 'scale',
            title: '¿Realizar Abono?',
            content: '',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Esta bien!',
                    btnClass: 'btn-green',
                    action: function () {

                        $(".form-pagar-abono").submit();

                    }
                },

                cerrar: function () {
                }
            }
        });
    }
});