$(document).on('click','.btnEditarCliente',function(){
 var idCliente = $(this).attr('idcliente');
    //ACTUALIZAR CLIENTE
    var urlActualizarCliente = '/admin/actualizar-cliente/'+idCliente;
    $('#form_actualizar_cliente').attr('action', urlActualizarCliente);
    $.get('/api/encontrarClienteEditar/'+idCliente+'', function (r) {


    	    $("#txtEditarNombreCliente").val(r.name);
            $("#txtEditarApellidosCliente").val(r.apellidos);
            $("#txtEditartipoIdentificacionCliente").val(r.id_tipoIdentificacion);
            $("#txtEditarIdentificacionCliente").val(r.identificacion);
            $("#txtEditarEmailCliente").val(r.email);
            $("#txtEditarTelefonoCliente").val(r.telefono);
            $("#txtEditarTelefono_2Cliente").val(r.telefono_2);

           $("#btnActualizarCliente").hide();
            $("#btnCancelarEditarCliente").hide();

            $(document).on('click', '#btnEditarCliente', function (e) {
                e.preventDefault();
                console.log(r[0]);
                $("#txtEditarNombreCliente").prop("disabled", false);
                $("#txtEditarApellidosCliente").prop("disabled", false);
                $("#txtEditartipoIdentificacionCliente").prop("disabled", false);
                $("#txtEditarIdentificacionCliente").prop("disabled", false);
                $("#txtEditarEmailCliente").prop("disabled", false);
                $("#txtEditarTelefonoCliente").prop("disabled", false);
                $("#txtEditarTelefono_2Cliente").prop("disabled", false);

                $("#btnCancelarEditarCliente").show();
                $("#btnActualizarCliente").show();
                $("#btnEditarCliente").hide();
            });

            $(document).on('click', '#btnCancelarEditarCliente', function (e) {
                e.preventDefault();
                $("#txtEditarNombreCliente").prop("disabled", true);
                $("#txtEditarApellidosCliente").prop("disabled", true);
                $("#txtEditartipoIdentificacionCliente").prop("disabled", true);
                $("#txtEditarIdentificacionCliente").prop("disabled", true);
                $("#txtEditarEmailCliente").prop("disabled", true);
                $("#txtEditarTelefonoCliente").prop("disabled", true);
                $("#txtEditarTelefono_2Cliente").prop("disabled", true);

                $("#btnEditarCliente").show();
                $("#btnActualizarCliente").hide();
                $("#btnCancelarEditarCliente").hide();
            });

           

          

            $('#form_actualizar_cliente').attr('action', urlActualizarCliente);

            $('#btnActualizarCliente').click(function () {

                $(".actualizarClienteForm").submit();
            
            });    	

    });
    
});