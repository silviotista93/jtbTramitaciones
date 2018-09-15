//EDITAR TRAMITADOR
$(document).on('click','.btnInfoContacto',function(){

    var id = $(this).attr('idContacto');
    $.get('/api/contactoBuscar/'+id+'',function (data) {

        $('#nombresContacto').val(data.nombre);
        $('#telefonoContacto').val(data.telefono);
        $('#telefono_2Conctacto').val(data.telefono_2);
        $('#emailContacto').val(data.email);
        $('#direccionContacto').val(data.direccion);
        $('#descripcionContacto').val(data.descripcion);

    });

});
