/*=============================================
Encontrar usuario por email
=============================================*/
$(".form-usuario-creado").on("change", ".emailAgregarUsuario", function() {

    var email = $(this).val();
    $.get('/api/usuarioEmailBuscar/'+email+'',function (data) {
        if (data !== ""){
            $.confirm({
                animationBounce: 1.5,
                closeAnimation: 'scale',
                icon: 'fa fa-warning',
                title: 'Este Usuario ya existe en el sistema',
                content: '¿desea actualizar roles?',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Esta Bien!',
                        btnClass: 'btn-red',
                        action: function(){
                            window.open('/admin/usuario-actualizar-perfil/'+data.id, '_self');
                        }
                    },

                    cerrar: function () {
                    }
                }
            });
        }else{
            alert('prueba')
        }

    });
});