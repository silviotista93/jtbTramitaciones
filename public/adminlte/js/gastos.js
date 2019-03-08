$(document).ready(function () {
    $('.valor_gasto').number(true, 2);

});

$(".valor_gasto").keyup(function () {

    valorIngresado = $(this).val();
    var total = valorIngresado;
    $('.valor_gasto_db').val(total);

});
