var t = null;
/*=============================================
BUSCAR SI EXISTE EL CLIENTE
=============================================*/
$(document).ready(function () {

    setInterval(function () {
        if ($(".inputBuscarClienteCupon").val() !== t) {
            $("#tablaMostrarClienteCupon").hide();
            $("#nombreClienteCupon").hide();
            $("#identificacionClienteCupon").hide();
            $('#mostrar-cupon').hide();
        }
    }, 250);

    $(".inputBuscarClienteCupon").keypress(function (e) {
        if (e.charCode === 13) {
            e.preventDefault();
            t = $(this).val();
            validarCliente();
        }
    });

});

function validarCliente() {
    var url = '/api/encontrarCliente/'+document.querySelector(".inputBuscarClienteCupon").value;
    if (document.querySelector(".inputBuscarClienteCupon").value.trim().length === 0) {
        $("#tablaMostrarClienteCupon").hide();
        $("#nombreClienteCupon").hide();
        $("#identificacionClienteCupon").hide();
        return;
    }
    $.get(url, null, function (r) {
        console.log(r);
        if (r.length !== 0) {
            =============================================
                EDITAR EL CLIENTE
            =============================================
            $("#tablaMostrarClienteCupon").show();
            $('#nombreClienteCupon').val(r[0].name + " " + r[0].apellidos);
            $('#identificacionClienteCupon').val(r[0].identificacion);
            $('#idClienteCupon').val(r[0].id);

            $("#nombreClienteCupon").show();
            $("#identificacionClienteCupon").show();

        } else {
            $("#tablaMostrarClienteCupon").hide();
            $("#nombreClienteCupon").hide();
            $("#identificacionClienteCupon").hide();
            $('#mostrar-cupon').hide();

            //CLIENTE NO EXISTE
            alert('Cliente no existe!')

        }


    });
    return false;
}

$('.btn-generar-cupon').click(function () {

    var chars = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    var code = '';
    var max = 6;
    
    for (var x = 0; x < max; x++ ){
        var i = Math.floor(Math.random() * chars.length);
        code += chars.charAt(i)
    }
    $('#ramdon-cupon').val(code);

    $('#mostrar-cupon').show();
});