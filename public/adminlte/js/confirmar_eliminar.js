$(".eliminarUsuario").click(function (){
    var id = $(this).attr('idUsuario');
    var url ='/admin/usuario-eliminar/'+id;
    console.log(url);

    $('.form_eliminar_usuario').attr('action',url);
    $.confirm({
        animationBounce: 1.5,
        closeAnimation: 'scale',
        icon: 'fa fa-warning',
        title: 'Esta seguro que desea eliminar!',
        content: 'Este Empleado se eliminara de la base de datos',
        type: 'red',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Eliminar',
                btnClass: 'btn-red',
                action: function(){
                    $(".form_eliminar_usuario").submit();
                }
            },

            cerrar: function () {
            }
        }
    });
});