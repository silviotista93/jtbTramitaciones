/*=============================================
BUSCAR SI EXISTE EL CLIENTE
=============================================*/
$(document).ready(function () {
    setInterval(function () {
        if ($(".inputBuscarCliente").val() !== t) {
            $("#tablaMostrarCliente").hide();
            $("#nombreCliente").hide();
            $("#identificacionCliente").hide();
        }else if (!isNaN(t)){
            $("#tablaMostrarCliente").show();
            $("#nombreCliente").show();
            $("#identificacionCliente").show();
        }
    }, 250);

    $(".inputBuscarCliente").keypress(function (e) {
        if (e.charCode === 13) {
            e.preventDefault();
            t = $(this).val();
            $("#btnAgregarCliente").click();
        }
    });

    $('#btnAgregarCliente').click(function (e) {
        validarCliente();
    });

});


function validarCliente() {
    var url = '/api/encontrarCliente/' + document.querySelector(".inputBuscarCliente").value;
    if (document.querySelector(".inputBuscarCliente").value.trim().length === 0) {
        $("#tablaMostrarCliente").hide();
        $("#nombreCliente").hide();
        $("#identificacionCliente").hide();
        $('#modalAgregarCliente').modal('show');
        return;
    }
    $.get(url, null, function (r) {
       
        if (r.length !== 0) {
            /*=============================================
                EDITAR EL CLIENTE
                =============================================*/
                $("#tablaMostrarCliente").show();
                $('#nombreCliente').val(r[0].name + " " + r[0].apellidos);
                $('#identificacionCliente').val(r[0].identificacion);
                $('#idCliente').val(r[0].id);

                $("#nombreCliente").show();
                $("#identificacionCliente").show();

            //EDITAR CLIENTE
            $("#txtEditarNombreCliente").val(r[0].name);
            $("#txtEditarApellidosCliente").val(r[0].apellidos);
            $("#txtEditartipoIdentificacionCliente").val(r[0].tipo_documento.id);
            $("#txtEditarIdentificacionCliente").val(r[0].identificacion);
            $("#txtEditarEmailCliente").val(r[0].email);
            $("#txtEditarTelefonoCliente").val(r[0].telefono);
            $("#txtEditarTelefono_2Cliente").val(r[0].telefono_2);


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

            //ACTUALIZAR CLIENTE
            var urlActualizarCliente = '/admin/actualizar-cliente/' + r[0].id;

            console.log(urlActualizarCliente, 'urlActualizarCliente');

            $('#form_actualizar_cliente').attr('action', urlActualizarCliente);

            $('#btnActualizarCliente').click(function () {

                $(".actualizarClienteForm").submit();
            })

        } else {
            $("#tablaMostrarCliente").hide();
            $("#nombreCliente").hide();
            $("#identificacionCliente").hide();

            //AGREGAR CLIENTE
            document.getElementById('txtIdentificacionCliente').value = document.querySelector(".inputBuscarCliente").value;
            $('#modalAgregarCliente').modal('show');
        }


    });
    return false;
}
