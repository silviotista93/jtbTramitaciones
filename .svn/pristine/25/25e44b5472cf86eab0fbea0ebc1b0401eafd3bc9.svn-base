/*=============================================
SELECCIONAR EL TIPO DE VEHICHULO
=============================================*/

$(function(){
    $(document).on('change','#select_tramite_tipoVehiculo',function(){ //detectamos el evento change
        var cilindraje = $("#select_tramite_tipoVehiculo option:selected").text();
        //Al darle clink al boton siquiente de liquidacion se activa el tab del cliente
        $("#btnSiguienteLiquidacion").click(function (e) {
            e.preventDefault();
            //Pasando el valor del tipo vehiculo al cliente
            $("#tab_cliente_seguro").click();
            $('.resumen_vehiculo_seguro').val(cilindraje);

            //Pasando el valor del cilindraje al cliente
            var cilindrajeCliente = $('.cilindraje_calcular').val();
            $(".resumen_cilindraje_seguro").val(cilindrajeCliente);

            //Pasando el valor del costo al cliente
            var costoCliente = $('.costo_calcular').val();
            $(".resumen_costo_seguro").val(costoCliente);

            //Pasando el valor del costo al cliente
            var modeloCliente = $('.modelo_calcular').val();
            $(".resumen_modelo_seguro").val(modeloCliente);

            //Pasando el valor del id del cilindraje
            var idSeguroCilindraje = $('.id_cilindraje').val();
            $(".id_seguro_resumen").val(idSeguroCilindraje);

        });

    });
});

/*=============================================
SELECCIONAR EL CILINDRAJE Y CALCULAR EL VALOR DEL SEGURO EN EL TAB LIQUIDACION
=============================================*/

$(function(){
    $(document).on('change','#select_cilindraje',function(){ //detectamos el evento change
        var cilindraje = $("#select_cilindraje option:selected").attr('cilindraje');
        var costo = $("#select_cilindraje option:selected").attr('costo');
        var id = $("#select_cilindraje option:selected").val();


        $('#botonCalcu').click(function() {

            var modelo = $('.modeloInput');
            var modeloCalcular = $(modelo).val();
            $(".modelo_calcular").val(modeloCalcular);

            $('.id_cilindraje').val(id);
            $('.cilindraje_calcular').val(cilindraje);
            $('.costo_calcular').val(costo);
        });
    });
});




/*=============================================
MOSTRANDO Y OCULTANDO LOS BOTONES
=============================================*/

$(function () {
    $("#tab_resumen_seguro").click(function(){

        $('#btn-guardar_cliente_seguro').hide();
        $('#boton_cancelar_seguro').hide();
        $('#boton_limpiar_seguro').hide();
        $('#btnSiguienteLiquidacion').hide();
        $('#botonCalcu').hide();
        $('#boton_atras_seguro').hide();

        $('#btn-guardar_tramite_seguro').show();
        $('#boton_cancelar_seguro').show();


        $.get('/api/ultimoCliente',function (data) {
            $('.idcliente').val(data.id);
            $('#boton_cancelar_seguro').attr('idEliminarCliente',data.id);
            $('#actualizar_cliente_seguro').attr('idActaulizarCliente',data.id);

        });


    });

    $("#tab_cliente_seguro").click(function(){

        $('#btn-guardar_cliente_seguro').show();
        $('#boton_atras_seguro').show();
        $('#boton_cancelar_seguro').show();

        $('#btnSiguienteLiquidacion').hide();
        $('#btn-guardar_tramite_seguro').hide();
        $('#boton_limpiar_seguro').hide();
        $('#boton_calcular_seguro').hide();
        $('#boton_facturar_seguro').hide();
        $('#boton_cancelar_facturar_seguro').hide();
        $('#botonCalcu').hide();

    });

    $("#tab_liquidacion_seguro").click(function(){

        $('#btnSiguienteLiquidacion').show();
        $('#boton_limpiar_seguro').show();
        $('#boton_calcular_seguro').show();
        $('#botonCalcu').show();

        $('#btn-guardar_cliente_seguro').hide();
        $('#boton_atras_seguro').hide();
        $('#btn-guardar_tramite_seguro').hide();
        $('#boton_cancelar_seguro').hide();
        $('#boton_cancelar_facturar_seguro').hide();
        $('#boton_facturar_seguro').hide();

    });


});

/*=============================================
ACTIVANDO EL BOTON DE ATRAS EN EL TAB DEL CLIENTE
=============================================*/
$("#boton_atras_seguro").click(function () {

    $("#tab_liquidacion_seguro").click();
});

/*=============================================
GUARDANDO CLIENTE Y SEGURO POR AJAX
=============================================*/
