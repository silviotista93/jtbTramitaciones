//EDITAR TRAMITADOR
$(document).on('click','.btnEditarTramitador',function(){

    var id = $(this).attr('idTramitador');
    var url = '/admin/actualizar-tramitador/'+id;
    $.get('/api/tramitadorBuscar/'+id+'',function (data) {
        console.log(data)

        $('#nameTramitador').val(data.name);
        $('#apellidosTramitador').val(data.apellidos);
        $('#emailTramitador').val(data.email);
        $('#telefonoTramitador').val(data.telefono);
        $('#telefono_2Tramitador').val(data.telefono_2);

    $('#formEditTramitador').attr('action',url);

    });

});

//ELIMINAR TRAMITADOR
$(document).on('click','.btnEliminarTramitador',function(){

    var id = $(this).attr('idTramitador');
    var url = '/admin/tramitador-eliminar/'+id;

    $('.formDeleteTramita').attr('action',url);
    $.confirm({
        animationBounce: 1.5,
        closeAnimation: 'scale',
        icon: 'fa fa-warning',
        title: 'Esta seguro que desea eliminar!',
        content: 'Tramitador se eliminara de la base de datos',
        type: 'red',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Eliminar',
                btnClass: 'btn-red',
                action: function(){
                    $(".formDeleteTramita").submit();
                }
            },

            cerrar: function () {
            }
        }
    });


});