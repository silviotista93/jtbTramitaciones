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
    $("#modal_ver_gasto").removeClass("edit");
    $("#modal_ver_gasto input,#modal_ver_gasto select, #modal_ver_gasto textarea").attr("disabled", 'disabled');
    var id = $(this).attr('id_ver_gasto');
    $.get('/api/gastoBuscar/'+id+'',function (data) {
        $("#id_update").val(id);
        $('#detalle_gasto').val(data.detalle);
        $('#persona_gasto').val(data.persona);
        $('#codigo_gasto').val(data.codigo);
        $('#tipo_gasto_gasto').val(data.tipo_gasto.id);
        $('#valor_gasto').val(data.valor);
        $(".valor_gasto_db").val(data.valor);
        const una = new Date().toLocaleDateString();
        const dos = new Date(data.created_at).toLocaleDateString();
        if (una !== dos) {
            $("#btnEditarGasto").hide();
        }else {
            $("#btnEditarGasto").show();
        }
        console.log(data);
    });

});