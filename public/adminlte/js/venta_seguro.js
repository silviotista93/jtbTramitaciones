var t = null;
/*=============================================
BUSCAR SI EXISTE EL CLIENTE
=============================================*/
$(document).ready(function(){

    setInterval(function () {
        if ($(".inputBuscarCliente").val() !== t) {
            $("#tablaMostrarCliente").hide();
            $("#nombreCliente").hide();
            $("#identificacionCliente").hide();
        }
    }, 250);

    $(".inputBuscarCliente").keypress(function (e) {
        if (e.charCode === 13){
            e.preventDefault();
            t = $(this).val();
            $("#btnAgregarCliente").click();
        }
    });

    $('#btnAgregarCliente').click(function (e) {
        validarCliente()
    });

});

function validarCliente () {
    var url = '/api/encontrarCliente/'+document.querySelector(".inputBuscarCliente").value;
    if (document.querySelector(".inputBuscarCliente").value.trim().length === 0){
        $("#tablaMostrarCliente").hide();
        $("#nombreCliente").hide();
        $("#identificacionCliente").hide();
        $('#modalAgregarCliente').modal('show');
        return;
    }
    $.get(url, null, function (r) {
        console.log(r);
        if (r.length !== 0){
            /*=============================================
                EDITAR EL CLIENTE
            =============================================*/
            $("#tablaMostrarCliente").show();
            $('#nombreCliente').val(r[0].name+" "+r[0].apellidos);
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

            $(document).on('click','#btnEditarCliente',function(e){
                e.preventDefault();
                console.log(r[0]);
                $( "#txtEditarNombreCliente" ).prop( "disabled", false );
                $( "#txtEditarApellidosCliente" ).prop( "disabled", false );
                $( "#txtEditartipoIdentificacionCliente" ).prop( "disabled", false );
                $( "#txtEditarIdentificacionCliente" ).prop( "disabled", false );
                $( "#txtEditarEmailCliente" ).prop( "disabled", false );
                $( "#txtEditarTelefonoCliente" ).prop( "disabled", false );
                $( "#txtEditarTelefono_2Cliente" ).prop( "disabled", false );

                $("#btnCancelarEditarCliente").show();
                $("#btnActualizarCliente").show();
                $("#btnEditarCliente").hide();
            });
            $(document).on('click','#btnCancelarEditarCliente',function(e){
                e.preventDefault();
                $( "#txtEditarNombreCliente" ).prop( "disabled", true );
                $( "#txtEditarApellidosCliente" ).prop( "disabled", true );
                $( "#txtEditartipoIdentificacionCliente" ).prop( "disabled", true );
                $( "#txtEditarIdentificacionCliente" ).prop( "disabled", true );
                $( "#txtEditarEmailCliente" ).prop( "disabled", true );
                $( "#txtEditarTelefonoCliente" ).prop( "disabled", true );
                $( "#txtEditarTelefono_2Cliente" ).prop( "disabled", true );

                $("#btnEditarCliente").show();
                $("#btnActualizarCliente").hide();
                $("#btnCancelarEditarCliente").hide();
            });

            //ACTUALIZAR CLIENTE
            var urlActualizarCliente ='/admin/actualizar-cliente/'+r[0].id;

            console.log(urlActualizarCliente,'urlActualizarCliente');

            $('#form_actualizar_cliente').attr('action',urlActualizarCliente);

            $('#btnActualizarCliente').click(function () {

                $(".actualizarClienteForm").submit();
            })

        }else {
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



$(function () {
    $('#tablaSeguros tbody').on('click','.agregarVentaSeguro',function (e) {
        if ($(this).hasClass('btn-default')){
            return;
        }
        var data = table.row($(this).parents('tr')).data();

        var el = e.target;
        var classL = el.classList;
        classL.remove("btn-danger");
        classL.add('btn-default');

        $.get('/api/seguroBuscar/'+data.id+'',function (respuesta) {
            var id = respuesta[0].id;
            var nombre = respuesta[0].tipo_vehiculo.nombre;
            var cilindraje = respuesta[0].cilindraje;
            var precio = respuesta[0].precio;
            console.log(respuesta[0].precio);

            $(".nuevoSeguro").append(
                '<div class="row" style="padding:5px 15px">'+
                '<!-- Descripción del producto -->'+
                '<div class="col-xs-4" style="padding-right:0px">'+
                '<div class="input-group">'+
                '<input type="hidden" name="idSeguro[]" value="'+id+'">'+
                '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarSeguro" value="'+id+'"><i class="fa fa-times"></i></button></span>'+
                '<input type="text" class="form-control nuevaDescripcionSeguro" idSeguro="'+id+'" name="agregarSeguro" value="'+nombre+'" readonly required>'+
                '</div>'+
                '</div>'+
                '<!-- Cantidad del producto -->'+
                '<div class="col-xs-3">'+
                '<input type="text" class="form-control nuevoCilindraje" name="" min="1" value="'+cilindraje+'" required readonly>'+
                '</div>' +
                '<div class="col-xs-2" style="padding-left: 0px">'+
                '<input type="number" class="form-control nuevaCantidadSeguro" name="nuevaCantidadSeguro[]" min="1" value="1" required>'+
                '</div>' +
                '<!-- Precio del producto -->'+
                '<div class="col-xs-3 ingresoPrecio" style="padding-left:0px">'+
                '<div class="input-group">'+
                '<span class="input-group-addon"><i class="ion ion-social-usd"></i></span>'+
                '<input type="text" class="form-control nuevoPrecioSeguro" precioReal="'+precio+'" name="nuevoPrecioSeguro[]" value="'+precio+'" readonly required>'+
                '<input type="hidden" name="totalPrecioCantidad[]">'+
                '</div>'+
                '</div>'+
                '</div>');
            //SUMAR EL TOTAL DE PRECIOS
            sumarTotalPreciosSeguro()

        });

    });
});
/*=============================================
QUITAR PRODUCTOS DE LA VENTA Y RECUPERAR BOTÓN
=============================================*/
$(".formularioVentaSeguro").on("click", ".quitarSeguro", function(){

    $(this).parent().parent().parent().parent().remove();

    var idSeguro = $(this).val();

    /* $('.recuperarBoton').attr('idSeguro',idSeguro).removeClass('btn-default');
     $('.recuperarBoton').attr('idSeguro',idSeguro).addClass('btn-primary agregarProducto');*/
    var el = document.getElementById("btnAgregarVentaSeguro"+idSeguro);
    if (el){
        var classL = el.classList;
        if (classL) {
            classL.add("btn-danger");
            classL.remove('btn-default');
        }
    }
    if($(".nuevoSeguro").children().length == 0){

        $("#nuevoTotalVentaSeguro").val(0);
        $("#totalVentaDB").val(0);
        $("#saldoVentaAbonoSeguro").val(0);

    }else{
        //SUMAR EL TOTAL DE PRECIOS
        sumarTotalPreciosSeguro()
    }


});

/*=============================================
CAMBIAR LA CANTIDAD
=============================================*/

$(".formularioVentaSeguro").on("change", ".nuevaCantidadSeguro", function(){

    var precio = $(this).parent().parent().children(".ingresoPrecio").children().children(".nuevoPrecioSeguro");

    var precioFinal = $(this).val() * precio.attr("precioReal");

        precio.val(precioFinal);

    //SUMAR EL TOTAL DE PRECIOS
    sumarTotalPreciosSeguro()



});

/*=============================================
SUMAR TODOS LOS PRECIOS
=============================================*/

function sumarTotalPreciosSeguro() {

   var precioCadaSeguro = $(".nuevoPrecioSeguro");
   var arraySumaPrecio = [];
   
   for (var i = 0; i < precioCadaSeguro.length; i++){
        arraySumaPrecio.push(Number($(precioCadaSeguro[i]).val()));

   }
    function sumarArrayPreciosSeguro(total, numero) {

       return total + numero;
    }
    var sumaTotalPrecioSeguro = arraySumaPrecio.reduce(sumarArrayPreciosSeguro);

   $("#nuevoTotalVentaSeguro").val(sumaTotalPrecioSeguro);
    $("#totalVentaDB").val(sumaTotalPrecioSeguro);
    $("#saldoVentaAbonoSeguro").val(sumaTotalPrecioSeguro);

    //PONER FORMATO AL PRECIO DE LOS SEGUROS
    $("#nuevoTotalVentaSeguro").number(true, 2);
}



$(".crearVentaSeguro").click(function (e){

    e.preventDefault();

    var url ='/admin/tramite-seguro-creado';
    console.log(url);
    //DATOS DEL TRAMITE
    //Cliente


   var nombreCliente = $('#nombreCliente').val();
   var identificacionCliente = $('#identificacionCliente').val();
   var tipoIdentificacion = $("#txtEditartipoIdentificacionCliente").val();
   var emailCliente = $('#txtEditarEmailCliente').val();
   var telefonoCliente = $('#txtEditarTelefonoCliente').val();
   var telefonoCliente_2 = $('#txtEditarTelefono_2Cliente').val();
   var tablaVenta = $('#tablamostrarVentaAlerta').html();




   //VALIDACION TIPO IDENTIFICACION DEL CLIENTE
    if (tipoIdentificacion == 1){
        var nombreIdentificacion = 'Cédula de Ciudadania';
    }else if(tipoIdentificacion == 2){
        var nombreIdentificacion = 'Tarjeta de Indentidad';
    }else if(tipoIdentificacion == 4){
        var nombreIdentificacion = 'Cédula de Extranjeria';
    }else{
        var nombreIdentificacion = 'Pasaporte';
    }

    //VALIDACION TELEFONO 2 CLIENTE
        if (telefonoCliente_2 == ''){
            var telefono_2 = 'Número no registrado'
        }else{
            var telefono_2 = $('#txtEditarTelefono_2Cliente').val();
        }


          //AGRUPAR LAS VENTAS PARA MOSTRAR EN EL MODAL

    var listarSeguros = [];

    var tipoVehiculo = $('.nuevaDescripcionSeguro');
    var cantidad = $('.nuevaCantidadSeguro');
    var precio =   $('.nuevoPrecioSeguro');
    var cilindraje = $('.nuevoCilindraje');


    for (var i = 0; i < tipoVehiculo.length; i++){
        listarSeguros.push({
            "tipoVehiculo":$(tipoVehiculo[i]).val(),
            "cantidad":$(cantidad[i]).val(),
            "cilindraje":$(cilindraje[i]).val(),
            "precio":$(precio[i]).val()})
    };

var fila = "";
 for (var i = 0; i <listarSeguros.length; i++){
      
       fila+="<tr>"+
            " <td>"+listarSeguros[i].cantidad+"</td>" +
            " <td>"+listarSeguros[i].tipoVehiculo+"</td>" +
            " <td>"+listarSeguros[i].cilindraje+"</td>" +
            " <td>"+listarSeguros[i].precio+"</td>" +
            " </tr>"; 
    };

    $('.formularioVentaSeguro').attr('action',url);
    //VALIDACIONES
    if ($('#idCliente').val() === '' & $('#nuevoMetodoPago').val() === ''  & $('#totalVentaDB').val() === '')  {
        toastr.error('Cliente Requerido');
        toastr.error('Metodo de Pago Requerido');
        toastr.error('Total Venta Requerido');

    }else if($('#nuevoMetodoPago').val() === '' & $('#totalVentaDB').val() === '') {
        toastr.error('Metodo de Pago Requerido');
        toastr.error('Total de Venta Requerido');

    }else if($('#idCliente').val() === '' & $('#totalVentaDB').val() === '') {
        toastr.error('Cliente Requerido');
        toastr.error('Total Venta Requerido');

    }else if($('#idCliente').val() === '' & $('#nuevoMetodoPago').val() === '') {
        toastr.error('Cliente Requerido');
        toastr.error('Metodo de Pago Requerido');
    }else if ($('#idCliente').val() === ''){
        toastr.error('Cliente Requerido');
    }else if ($('#nuevoMetodoPago').val() === ''){
        toastr.error('Metodo de Pago Requerido');
    }else if ($('#totalVentaDB').val() === ''){
        toastr.error('Total Venta Requerido');
    }else if($("#contenedorSeguro div").length==0){
      toastr.error('Debe seleccionar al menos un producto ');
      
    }else {

        $.confirm({
            animation: 'top',
            closeAnimation: 'scale',
            content: '<h4>Cliente</h4>' +
                '<div>' +
                '   <div class="row">' +
                '           <div class="col-sm-6">' +
                '              <label>Nombre:</label> ' + nombreCliente + '' +
                '           </div>' +
                '           <div class="col-sm-6">' +
                '               <label>Identificacion:</label> ' + identificacionCliente + '' +
                '           </div>' +
                '           <div class="col-sm-6">' +
                '                   <label>Tipo Identificacion:</label> ' + nombreIdentificacion + '' +
                '           </div>' +
                '           <div class="col-sm-6">' +
                '                   <label>Email:</label> ' + emailCliente + '' +
                '           </div>' +
                '           <div class="col-sm-6">' +
                '                   <label>Telefono:</label> ' + telefonoCliente + '' +
                '            </div>' +
                '            <div class="col-sm-6">' +
                '                    <label>Telefono 2:</label> ' + telefono_2 + '' +
                '              </div>' +
                '   </div>' +
                '   <h4>Venta</h4>' +
                '   <div class="row">' +
                '       <div class="col-sm-12">' +
                '<table class="table table-bordered" id="tabla-licencias-venta">\n' +
                '                <tr>\n' +
                '                  <th style="width: 10px;">Cantidad</th>\n' +
                '                  <th>Tipo</th>\n' +
                '                  <th>Cilindraje</th>\n' +
                '                  <th>Precio</th>\n' +
                '                </tr>\n' +
                '                 <tbody> ' +
                '                    ' + fila + '     ' +
                '                </tbody>  ' +
                '                </table> ' +
                '       </div>' +
                '   </div>' +
                '</div>',
            columnClass: 'col-md-7 col-md-offset-3',
            icon: '',
            title: 'Datos de Venta',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Esta bien!',
                    btnClass: 'btn-green',
                    action: function () {
                        $(".formularioVentaSeguro").submit();
                    }
                },
                cerrar: function () {
                }
            }
        });
    }

});

/*=============================================
SELECCIONAR METODO DE PAGO
=============================================*/
$('#nuevoMetodoPago').change(function () {
    var metodo = $(this).val();
    if(metodo == "Efectivo"){
        $(this).parent().parent().removeClass('col-xs-6');
        $(this).parent().parent().addClass('col-xs-4');

        $(this).parent().parent().parent().children('.cajasMetodoPago').html(
            '<div class="col-xs-6 pull-right">' +
            '   <div class="input-group">' +
            '           <label for="">Metodo de Pago Efectivo</label>' +
            '   </div>' +
            '</div>'

        );
        //AGREGAR FORMATO AL PRECIO
        $('.nuevoValorEfectivo').number(true,2);
        $('.nuevoCambioEfectivo').number(true,2);
        //LISTAR METODO EN LA ENTRADA
        listarMetodosSeguro();
    }else{
        $(this).parent().parent().removeClass('col-xs-4');
        $(this).parent().parent().addClass('col-xs-6');

        $(this).parent().parent().parent().children('.cajasMetodoPago').html(
            '<div class="col-xs-6" style="padding-left:0px">\n' +
            '\n' +
            '                                    <div class="input-group">\n' +
            '\n' +
            '                                        <input type="text" class="form-control" id="nuevoCodigoTransaccion"\n' +
            '                                               name="nuevoCodigoTransaccion" placeholder="Código transacción" required>\n' +
            '\n' +
            '                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>\n' +
            '\n' +
            '                                    </div>\n' +
            '\n' +
            '                                </div>'
        )

    }
});

/*=============================================
CAMBIO EN EFECTIVO
=============================================*/
$(".formularioVentaSeguro").on("change", ".nuevoValorEfectivo", function() {

    var efectivo = $(this).val();
    var cambio = Number(efectivo) - Number($('#totalVentaDB').val());

    var nuevoCambioEfectivo = $(this).parent().parent().parent().children('.capturarCambioEfectivo').children().children('.nuevoCambioEfectivo');

    nuevoCambioEfectivo.val(cambio);
});
/*=============================================
CAMBIO EN TRANSACCION
=============================================*/
$(".formularioVentaSeguro").on("change", "#nuevoCodigoTransaccion", function() {

    listarMetodosSeguro();
});



/*=============================================
    APARECER CAMPOS ABONOS
=============================================*/

$(function () {
    $('#btn-mostrarAbono').click(function (e) {
        e.preventDefault();
        $('#titulo-tabla-abono').show('blind');
        $('#campo-ingresar-abono').show('blind');
        $('#btn-mostrarAbono').hide('blid');
        $('#btn-cancelarAbono').show('blid');
    })
    $('#btn-cancelarAbono').click(function (e) {
        e.preventDefault();

        $('#btn-mostrarAbono').show('blid');
        $('#titulo-tabla-abono').hide('blind');
        $('#campo-ingresar-abono').hide('blind');
        $('#btn-cancelarAbono').hide('blind');

    })
    $('#btn-mostrarAbono').click(function (e) {
        e.preventDefault();

        $('#saldoVentaPrincipalSeguro').remove();
        $("#camposSaldosSeguro").append(
            '<input type="hidden" name="saldo" id="saldoVentaAbonoSeguro" value="">'
        )

    })
    $('#btn-cancelarAbono').click(function (e) {
        e.preventDefault();
        $('#saldoVentaAbonoSeguro').remove();
        $("#camposSaldosSeguro").append(
            '<input type="hidden" name="saldo" id="saldoVentaPrincipalSeguro" value="0">'
        )
        $("#estadoSaldoSeguro").val('Cancelado');
    })
});



/*=============================================
RESTAR EL VALOR DEL ABONO
=============================================*/

$(".inputAbono").keyup(function(){
    var efectivo=0;
    var saldo=0;
    var cambio=0;
    efectivo = $(this).val();
    saldo=$('#totalVentaDB').val();
    cambio =  Number(saldo-efectivo);
    if(cambio < 0 ){
        $.confirm({
            animationBounce: 1.5,
            closeAnimation: 'scale',
            icon: 'fa fa-warning',
            title: 'El valor es mayor al Total',
            content: '',
            type: 'red',
            typeAnimated: true,
            buttons: {

                cerrar: function () {
                }
            }
        });
    }else{
        $("#estadoSaldoSeguro").val('Debe');
        $('#saldoVentaAbonoSeguro').val(cambio);
    }


    console.log(cambio);
    // var nuevoCambioEfectivo = $(this).parent().parent().parent().children('#camposSaldos').children().children('#saldoVentaAbono');

    // nuevoCambioEfectivo.val(cambio);

});
/*=============================================
LISTAR METODO PAGO
=============================================*/

function listarMetodosSeguro() {

    var listaMetodos = "";
    if ($('#nuevoMetodoPago').val() == 'Efectivo'){

        $('#listaMetodoPago').val('Efectivo');
    }else {
        $('#listaMetodoPago').val($('#nuevoMetodoPago').val()+'-'+$('#nuevoCodigoTransaccion').val());
    }

}


