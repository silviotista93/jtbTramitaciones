$(document).on('click','.btnEditarLicencia',function(){

    var id = $(this).attr('id');
    $('#admin_categoria_licencia').val($(this).attr('categoria'));
    $('#admin_tipoLicencia_licencia').val($(this).attr('tipoLicencia'));
    $('#admin_precio_licencia').val($(this).attr('precio'));
    $('#admin_descuento_licencia').val($(this).attr('descuento'));
    $('#admin_update_licencia').val($(this).attr('update'));

    var url ='/admin/actualizar-licencia/'+id;

    console.log(url,'url');

    $('#form_actualizar_licencia').attr('action',url);

    $('.btn_actualizar_licencia').click(function () {

        $(".action_form_actualizar_licencia").submit();
    })


});
