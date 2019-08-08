$(document).ready(function () {
    $('.valor_gasto').number(true, 2);

});

$(".valor_gasto").keyup(function () {

    valorIngresado = $(this).val();
    var total = valorIngresado;
    $('.valor_gasto_db').val(total);

});

//VER GASTOS
$(document).on('click','.btn_ver_gasto',function(){

    var id = $(this).attr('id_ver_gasto');
    $.get('/api/gastoBuscar/'+id+'',function (data) {
        console.log(data.tipo_gasto.tipo_gasto);

        $('#detalle_gasto').val(data.detalle);
        $('#persona_gasto').val(data.persona);
        $('#codigo_gasto').val(data.codigo);
        $('#tipo_gasto_gasto').val(data.tipo_gasto.tipo_gasto);
        $('#valor_gasto').val(data.valor);

    });

});