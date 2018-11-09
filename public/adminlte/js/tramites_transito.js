$(document).ready(function () {
    $('.nuevoTotalVentaTramiTra').number(true, 2);

});

$(".nuevoTotalVentaTramiTra").keyup(function () {

    valorIngresado = $(this).val();
    var total = valorIngresado;
    $('.totalVentaDBTransi').val(total);

});