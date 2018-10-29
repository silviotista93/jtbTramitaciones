/*=============================================
Encontrar usuario por email cliente
=============================================*/
$(".form-cliente-creado").on("change", ".emailAgregarUsuario", function () {

    var email = $(this).val();
    $.get('/api/usuarioEmailBuscar/' + email + '', function (data) {
        var roles = data.roles;
        var rol;

        for (var i = 0; i < roles.length; i++) {
            if (roles[i].id == 4) {
                rol = 4
            }
        }
        if (rol == 4) {
            $.confirm({
                title: 'Cliente ya registrado',
                content: '',
                type: 'dark',
                typeAnimated: true,
                buttons: {

                    close: function () {
                    }
                }
            });
        } else {
            if (data != "") {
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
                            action: function () {
                                $('#modalActualizarRoles').modal('show');
                                $('.nombreUsuarioRol').text(data.name);
                                $('.apellidosUsuarioRol').text(data.apellidos);
                                var url = '/admin/update-roles/' + data.id;
                                $('.form-update-rol-cliente').attr('action', url);
                            }
                        },

                        cerrar: function () {
                        }
                    }
                });
            } else {

            }
        }

    });
});

/*=============================================
Encontrar usuario por email tramitador
=============================================*/
$(".form_tramitador_crear").on("change", ".emailAgregarTramitador", function () {

    var email = $(this).val();
    $.get('/api/tramitadorEmailBuscar/' + email + '', function (data) {
        var roles = data.roles;
        var rol;
        for (var i = 0; i < roles.length; i++) {
            if (roles[i].id == 3) {
                rol = 3
            }
        }
        if (rol == 3) {
            $.confirm({
                title: 'Tramitador ya registrado',
                content: '',
                type: 'dark',
                typeAnimated: true,
                buttons: {

                    close: function () {
                    }
                }
            });

        } else {
            if (data != "") {
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
                            action: function () {
                                $('#modalActualizarRolesTramitador').modal('show');
                                $('.nombreTramitadorRol').text(data.name);
                                $('.apellidosTramitadorRol').text(data.apellidos);
                                var url = '/admin/update-roles/' + data.id;
                                $('.form-update-rol-tramitador').attr('action', url);
                            }
                        },

                        cerrar: function () {
                        }
                    }
                });
            } else {

            }
        }
    });
});

/*=============================================
Encontrar usuario por email tramitador
=============================================*/
$(".form_agregar_tramitador").on("change", ".inputEmailAgregarTramitador", function () {

    var email = $(this).val();
    $.get('/api/tramitadorEmailBuscar/' + email + '', function (data) {
        var roles = data.roles;
        var rol;

        for (var i = 0; i < roles.length; i++) {
            if (roles[i].id == 3) {
                rol = 3
            }
        }

        if (rol == 3) {
            $.confirm({
                title: 'Tramitador ya registrado',
                content: '',
                type: 'dark',
                typeAnimated: true,
                buttons: {

                    close: function () {
                    }
                }
            });

        } else {
            if (data != "") {
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
                            action: function () {
                                $('#modalRolesTramitador').modal('show');
                                $('.nombreTramitadorRolTra').text(data.name);
                                $('.apellidosTramitadorRolTra').text(data.apellidos);
                                var url = '/admin/update-roles/' + data.id;
                                $('.form-update-rol-tramitador-tra').attr('action', url);
                            }
                        },

                        cerrar: function () {
                        }
                    }
                });
            } else {

            }
        }

    });
});

