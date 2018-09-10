/*=============================================
Encontrar usuario por email
=============================================*/
$(".form-cliente-creado").on("change", ".emailAgregarUsuario", function() {

    var email = $(this).val();
    $.get('/api/usuarioEmailBuscar/'+email+'',function (data) {
        if (data != ""){
            $.confirm({
                animationBounce: 1.5,
                closeAnimation: 'scale',
                icon: 'fa fa-warning',
                title: 'Este usuario ya existe en el sistema',
                content: '¿Desea actualizar roles?',
                type: 'warning',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Esta Bien!',
                        btnClass: 'btn-warning',
                        action: function(){
                            $('#modalActualizarRoles').modal('show');
                            $('.nombreUsuarioRol').text(data.name);
                            $('.apellidosUsuarioRol').text(data.apellidos);
                            var url = '/admin/cliente-update-roles/'+data.id;
                            $('.form-update-rol-cliente').attr('action', url);
                        }
                    },

                    cerrar: function () {
                    }
                }
            });
        }else{

        }

    });
});