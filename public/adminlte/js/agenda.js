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

 $('#nombresContacto').prop("disabled", true);
        $('#telefonoContacto').prop("disabled", true);
        $('#telefono_2Conctacto').prop("disabled", true);
        $('#emailContacto').prop("disabled", true);
        $('#direccionContacto').prop("disabled", true);
        $('#descripcionContacto').prop("disabled", true);
    
$("#btn_actualizar_contacto").hide();
});


//Actualizar contacto 
$(document).on('click','.btnEditContacto',function(){

    var id = $(this).attr('idContacto');
    $.get('/api/contactoBuscar/'+id+'',function (data) {


        $('#nombresContacto').val(data.nombre);
        $('#telefonoContacto').val(data.telefono);
        $('#telefono_2Conctacto').val(data.telefono_2);
        $('#emailContacto').val(data.email);
        $('#direccionContacto').val(data.direccion);
        $('#descripcionContacto').val(data.descripcion);

        $('#nombresContacto').prop("disabled", false);
        $('#telefonoContacto').prop("disabled", false);
        $('#telefono_2Conctacto').prop("disabled", false);
        $('#emailContacto').prop("disabled", false);
        $('#direccionContacto').prop("disabled", false);
        $('#descripcionContacto').prop("disabled", false);

    });

    $("#btn_actualizar_contacto").show();

    //ACTUALIZAR CLIENTE
    var urlActualizarAgenda = '/admin/actualizar-Agenda/'+id;
    $('#form-actualizar-contacto').attr('action', urlActualizarAgenda);

            $('#btn_actualizar_contacto').click(function () {

                $(".FormActualizarContacto").submit();


            });
});