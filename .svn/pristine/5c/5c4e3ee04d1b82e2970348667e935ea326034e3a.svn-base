$(document).on('click','.btnEditarSeguro',function(){

    var id = $(this).attr('id');
    console.log(id, 'id');
    $('#admin_cilindraje_seguro').val($(this).attr('cilindraje'));
    $('#admin_precio_seguro').val($(this).attr('precio'));
    $('#admin_update_seguro').val($(this).attr('update'));

    var url ='/admin/actualizar-seguro/'+id;

    console.log(url,'url');

    $('#form_actualizar_seguro').attr('action',url);

    $('.btn_actualizar_seguro').click(function () {

        $(".action_form_actualizar_seguro").submit();
    })


});
