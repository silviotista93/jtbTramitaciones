var t = null;
var max = 0;
var min = 0;
var descuentoExamen = false;
var desc_examen_medico;

function iterationCopy(src) {
    let target = {};
    for (let prop in src) {
        if (src.hasOwnProperty(prop)) {
            target[prop] = src[prop];
        }
    }
    return target;
}

var licencia = {
    id: "",
    precio: "",
    descuento: "",
    tipo: "",
    sinCurso: false,
    new: function (id, precio, descuento, tipo) {
        let licencia = iterationCopy(this);
        licencia.id = id;
        licencia.precio = precio;
        licencia.descuento = descuento;
        licencia.tipo = tipo;
        return licencia;
    }
}

var licencias = {
    data: [],
    descuentoExamen : 0,
    total : 0,
    maxDescuento: 0,
    add: function (licencia) {
        if (this.data.length >= 2 && this.data[0].tipo === 1) {
            toastr.warning('Solo se pueden agregar dos licencias');
            return false;
        }
        this.data.push(licencia);
        this.checkDescuentoExamen();
        return true;
    },
    remove: function (id){
        for (var i = 0; i<this.data.length; i++){
            if (this.data[i].id == id){
                this.data.splice(i, 1);
                checkDescuentoExamen();
                break;
            }
        }
    },
    checkDescuentoExamen : function (){
        if (this.data.length >= 2 && this.data[0].tipo === 1 && descuentoExamen === false) {
            descuentoExamen = true;
            toastr.warning('Se aplico descuento, por examen medico de $' + desc_examen_medico);
        } else {
            descuentoExamen = false;
        }
        this.refreshValues();
    },
    tramiteSinCurso: function (id, container){
        for (var i = 0; i<this.data.length; i++){
            if (this.data[i].id == id){
                this.data[i].sinCurso = !this.data[i].sinCurso;
                if (this.data[i].sinCurso){
                    this.total -= this.data[i].precio;
                    this.total += this.data[i].descuento;
                    container.find();
                } else {
                    this.total += this.data[i].precio;
                    this.total -= this.data[i].descuento;
                }
                return this.data[i];
            }
        }
    },
    refreshValues : function (){
        let total = 0;
        let maxDescuento = 0;
        this.data.forEach(function (licencia){
            if (licencia.sinCurso){
                total += licencia.descuento;
            }else{
                total += licencia.precio;
            }
            maxDescuento += licencia.descuento;
        });
        this.total = total;
        this.maxDescuento = maxDescuento;
    }
}


$(function () {
    $('#tablaLicencias tbody').on('click', '.agregarVentaLicencia', function (e) {

        if ($(this).hasClass('btn-default')) {
            return;
        }

        var data = table.row($(this).parents('tr')).data();

        $.get('/api/licenciaBuscar/' + data.id + '', function (respuesta) {
            var id = respuesta[0].id;
            var categoria = respuesta[0].categoria;
            var tipo_lencia = respuesta[0].tipo_licencia;
            var precio = respuesta[0].precio;
            var descuento = respuesta[0].descuento;

            let newLicencia = licencia.new(id, precio, descuento, 1);
            if (licencias.add(newLicencia)) {

                var el = e.target;
                var classL = el.classList;
                classL.remove("btn-danger");
                classL.add('btn-default');

                $(".nuevaLicencia").append(
                    '<div class="row" style="padding:5px 15px" data-id='+id+'>' +
                    '<!-- Descripción del producto -->' +
                    '<div class="col-xs-3" style="padding-right:0px">' +
                    '<div class="input-group">' +
                    '<input type="hidden" name="idLicencia[]" value="' + id + '">' +
                    '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarLicencia" value="' + id + '"><i class="fa fa-times"></i></button></span>' +
                    '<input type="text" class="form-control nuevaDescripcionLicencia" idLicencia="' + id + '" name="agregarLicencia" value="' + categoria + '" readonly required>' +
                    '</div>' +
                    '</div>' +
                    '<!-- Cantidad del producto -->' +
                    '<div class="col-xs-3">' +
                    '<input type="text" class="form-control tipoLicencia" name="" min="1" value="' + tipo_lencia + '" required readonly>' +
                    '</div>' +
                    '<!-- Precio del producto -->' +
                    '<div class="col-xs-3 ingresoPrecio" style="padding-left:0px">' +
                    '<div class="input-group">' +
                    '<span class="input-group-addon"><i class="ion ion-social-usd"></i></span>' +
                    '<input type="text" class="form-control nuevoPrecioLicencia" precioReal="' + precio + '" name="nuevoPrecioLicencia[]" value="' + precio + '" readonly required>' +
                    '<input type="hidden" class="form-control nuevoDescuentoLicencia" precioReal="' + descuento + '" name="nuevoDescuentoLicencia[]" value="' + descuento + '" readonly required>' +
                    '<input type="hidden" name="totalPrecioCantidad[]">' +
                    '</div>' +
                    '</div>' +
                    '<!-- Aplicar Descuento -->' +
                    '<div class="col-xs-3">' +
                    '<div style="position:relative"><div id="checkLic" class="checkbox icheck" style="margin-top: 4px;margin-left: -20px">\n' +
                    '                        <label>' +
                    '                            <input class="checkLicencia" type="checkbox" name="remember">&nbsp <span class="label label-danger" style="font-size: 11px"><i class="fa fa-car"></i> Tramite sin curso</span> ' +
                    '                        </label>' +
                    '                    </div>' +
                    '<div class="contenedor_input" style="position:absolute;top: -1px;cursor:pointer;left: -20px;width: 100%;height: 3rem;padding: .5rem;"></div></div></div>' +
                    '<div class="" style="padding-left: 0px">' +
                    '<input type="hidden" class="form-control nuevaCantidadLicencia" name="nuevaCantidadLicencia[]" min="1" value="1" required>' +
                    '</div>' +
                    '<input type="hidden" name="validar_curso[]" class="validarEscuela">' +
                    '</div>');

                $(".contenedor_input:not(.new)").click(function () {
                    var check = $(this).parent().find(".icheckbox_square-blue").toggleClass("checked");
                    let container = $(this).parent().parent().parent();
                    licencias.tramiteSinCurso(container.attr("data-id"));
                    if (!check.hasClass("checked")) {
                        precio = respuesta[0].precio
                        $('.validarEscuela').val('');
                    } else {
                        precio = respuesta[0].precio - $('.descuento_escuela').val();
                        $('.validarEscuela').val('1');
                    }

                    container.find('.nuevoPrecioLicencia').val(precio);
                    //sumarTotalPrecios();
                }).addClass("new");

                //SUMAR EL TOTAL DE PRECIOS
                //sumarTotalPrecios();
                $(function () {
                    $('.checkLicencia:not(.new)').iCheck({
                        checkboxClass: 'icheckbox_square-blue',
                        radioClass: 'iradio_square-blue',
                        increaseArea: '10%' // optional
                    }).addClass("new");
                });

            }
        });


    });

    /**
     * tabla licencias tramitador
     */

    $('#tablaLicenciasTramitador tbody').on('click', '.agregarVentaLicencia', function (e) {
        if ($(this).hasClass('btn-default')) {
            return;
        }
        var data = tableTramitador.row($(this).parents('tr')).data();
        var el = e.target;
        var classL = el.classList;
        classL.remove("btn-danger");
        classL.add('btn-default');


        $.get('/api/licenciaBuscar/' + data.id + '', function (respuesta) {
            var id = respuesta[0].id;
            var categoria = respuesta[0].categoria;
            var tipo_lencia = respuesta[0].tipo_licencia;
            var precio = respuesta[0].precio;
            var descuento = respuesta[0].descuento;

            $(".nuevaLicencia").append(
                '<div class="row" style="padding:5px 15px">' +
                '<!-- Descripción del producto -->' +
                '<div class="col-xs-3" style="padding-right:0px">' +
                '<div class="input-group">' +
                '<input type="hidden" name="idLicencia[]" value="' + id + '">' +
                '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarLicencia" value="' + id + '"><i class="fa fa-times"></i></button></span>' +
                '<input type="text" class="form-control nuevaDescripcionLicencia" idLicencia="' + id + '" name="agregarLicencia" value="' + categoria + '" readonly required>' +
                '</div>' +
                '</div>' +
                '<!-- Cantidad del producto -->' +
                '<div class="col-xs-3">' +
                '<input type="text" class="form-control nuevaCantidadLicencia" name="nuevaCantidadLicencia[]" min="1" value="' + tipo_lencia + '" required readonly>' +
                '</div>' +
                '<!-- Precio del producto -->' +
                '<div class="col-xs-3 ingresoPrecio" style="padding-left:0px">' +
                '<div class="input-group">' +
                '<span class="input-group-addon"><i class="ion ion-social-usd"></i></span>' +
                '<input type="text" class="form-control nuevoPrecioLicencia" precioReal="' + precio + '" name="nuevoPrecioLicencia[]" value="' + precio + '" readonly required>' +
                '<input type="hidden" class="form-control nuevoDescuentoLicencia" precioReal="' + descuento + '" name="nuevoDescuentoLicencia[]" value="' + descuento + '" readonly required>' +
                '<input type="hidden" name="totalPrecioCantidad[]">' +
                '</div>' +
                '</div>' +
                '<div class="col-xs-2" style="padding-left: 0px">' +
                '<input type="hidden" class="form-control nuevaCantidadLicencia" name="nuevaCantidadLicencia[]" min="1" value="1" required>' +
                '</div>' +
                '</div>');
            //SUMAR EL TOTAL DE PRECIOS
            sumarTotalPrecios();

            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '10%' // optional
                });
            });

        });

    });

});

/*=============================================
QUITAR PRODUCTOS DE LA VENTA Y RECUPERAR BOTÓN
=============================================*/
$(".formularioVentaLicencia").on("click", ".quitarLicencia", function () {

    $(this).parent().parent().parent().parent().remove();

    var idLicencia = $(this).val();

    /* $('.recuperarBoton').attr('idSeguro',idSeguro).removeClass('btn-default');
    $('.recuperarBoton').attr('idSeguro',idSeguro).addClass('btn-primary agregarProducto');*/
    var el = document.getElementById("btnAgregarVentaLicencia" + idLicencia);
    if (el) {
        var classL = el.classList;
        if (classL) {
            classL.add("btn-danger");
            classL.remove('btn-default');
            licencias.remove(idLicencia);
        }
    }

});

/*=============================================
CAMBIAR LA CANTIDAD
=============================================*/

$(".formularioVentaLicencia").on("change", ".nuevaCantidadLicencia", function () {

    var precio = $(this).parent().parent().children(".ingresoPrecio").children().children(".nuevoPrecioLicencia");

    var precioFinal = $(this).val() * precio.attr("precioReal");

    precio.val(precioFinal);

    //SUMAR EL TOTAL DE PRECIOS
    sumarTotalPrecios()


});

/*=============================================
SUMAR TODOS LOS PRECIOS
=============================================*/

function sumarTotalPrecios() {

    $('#nuevoTotalVenta').attr('disabled', true);

    console.log(max);
    var precioCadaLicencia = $(".nuevoPrecioLicencia");
    var arraySumaPrecio = [];

    for (var i = 0; i < precioCadaLicencia.length; i++) {
        arraySumaPrecio.push(Number($(precioCadaLicencia[i]).val()));

    }

    function sumarArrayPrecios(total, numero) {

        return total + numero;
    }

    var sumaTotalPrecio = arraySumaPrecio.reduce(sumarArrayPrecios);
    var tipoLicencia = $('.nuevaDescripcionLicencia');
    console.log(tipoLicencia.length);
    var desc_examen_medico;
    $.get('/api/examen-medico/1', function (respuesta) {
        desc_examen_medico = respuesta.valor;
        if (tipoLicencia.length > 1 && !descuentoExamen) {
            sumaTotalPrecio = sumaTotalPrecio - desc_examen_medico;
            descuentoExamen = true;
            $('.descuento_medico_licencia').val(1);
        } else if (tipoLicencia.length < 2) {
            descuentoExamen = false;
            $('.descuento_medico_licencia').val(0);
        }

        $("#nuevoTotalVenta").val(sumaTotalPrecio);
        $("#totalVentaDB").val(sumaTotalPrecio);
        $("#saldoVentaAbonoLicencia").val(sumaTotalPrecio);

        //PONER FORMATO AL PRECIO DE LOS SEGUROS
        $("#nuevoTotalVenta").number(true, 2);
    });

}


$(".crearVentaLicencia").click(function (e) {

    e.preventDefault();

    var url = '/admin/tramite-licencia-creado';
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
    if (tipoIdentificacion == 1) {
        var nombreIdentificacion = 'Cédula de Ciudadania';
    } else if (tipoIdentificacion == 2) {
        var nombreIdentificacion = 'Tarjeta de Indentidad';
    } else if (tipoIdentificacion == 4) {
        var nombreIdentificacion = 'Cédula de Extranjeria';
    } else {
        var nombreIdentificacion = 'Pasaporte';
    }

    //VALIDACION TELEFONO 2 CLIENTE
    if (telefonoCliente_2 == '') {
        var telefono_2 = 'Número no registrado'
    } else {
        var telefono_2 = $('#txtEditarTelefono_2Cliente').val();
    }

    //AGRUPAR LAS VENTAS PARA MOSTRAR EN EL MODAL

    var listarLicencias = [];

    var descripcion = $('.nuevaDescripcionLicencia');
    var cantidad = $('.nuevaCantidadLicencia');
    var precio = $('.nuevoPrecioLicencia');
    var tipoLicencia = $('.tipoLicencia');


    for (var i = 0; i < descripcion.length; i++) {
        listarLicencias.push({
            "categoria": $(descripcion[i]).val(),
            "cantidad": $(cantidad[i]).val(),
            "tipo_licencia": $(tipoLicencia[i]).val(),
            "precio": $(precio[i]).val()
        })
    }
    ;
    console.log(listarLicencias);
    var fila = "";
    for (var i = 0; i < listarLicencias.length; i++) {

        fila += "<tr>" +
            " <td>" + listarLicencias[i].cantidad + "</td>" +
            " <td>" + listarLicencias[i].tipo_licencia + "</td>" +
            " <td>" + listarLicencias[i].categoria + "</td>" +
            " <td>" + listarLicencias[i].precio + "</td>" +
            " </tr>";
    }
    ;

    $('.formularioVentaLicencia').attr('action', url);

    //VALIDACIONES
    if ($('#idCliente').val() === '' & $('#nuevoMetodoPagoLicencia').val() === '' & $('#totalVentaDB').val() === '') {
        toastr.error('Cliente Requerido');
        toastr.error('Metodo de Pago Requerido');
        toastr.error('Total Venta Requerido');

    } else if ($('#nuevoMetodoPagoLicencia').val() === '' & $('#totalVentaDB').val() === '') {
        toastr.error('Metodo de Pago Requerido');
        toastr.error('Total de Venta Requerido');

    } else if ($('#idCliente').val() === '' & $('#totalVentaDB').val() === '') {
        toastr.error('Cliente Requerido');
        toastr.error('Total Venta Requerido');

    } else if ($('#idCliente').val() === '' & $('#nuevoMetodoPagoLicencia').val() === '') {
        toastr.error('Cliente Requerido');
        toastr.error('Metodo de Pago Requerido');
    } else if ($('#idCliente').val() === '') {
        toastr.error('Cliente Requerido');
    } else if ($('#nuevoMetodoPagoLicencia').val() === '') {
        toastr.error('Metodo de Pago Requerido');
    } else if ($('#totalVentaDB').val() === '') {
        toastr.error('Total Venta Requerido');

    } else if ($("#contenedorLicencia div").length == 0) {
        toastr.error('Debe seleccionar al menos un tipo de licencia ');


    } else {
        if (max == 0 || min == 0) {
            max = $('#totalVentaDB').val();
        }

        if ($('#nuevoTotalVenta').val() > max || $('#nuevoTotalVenta').val() < min) {

            toastr.error(' la cantidad propuesta esta fuera del rango permitido');
            $('#nuevoTotalVenta').val(max);

            return false;
        } else {
            $("#totalVentaDB").val($('#nuevoTotalVenta').val());
        }
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
            '               <label>Identificacion:</label>' + identificacionCliente + '' +
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
            '           <table class="table table-bordered" id="tabla-licencias-venta">\n' +
            '                <tr>\n' +
            '                  <th style="width: 10px;">Cantidad</th>\n' +
            '                  <th>Tipo</th>\n' +
            '                  <th>Categoria</th>\n' +
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

                        $(".formularioVentaLicencia").submit();

                    }
                },

                cerrar: function () {
                }
            }
        });
    }
    $.each(listarLicencias, function (index, value) {
        $("#tabla-licencias-venta").append($('<tr>')
            .append($('<td>').html(value.cantidad))
            .append($('<td>').html(value.tipo_licencia))
            .append($('<td>').html(value.categoria))
            .append($('<td>').html(value.precio)),
        );

    });
});

/*=============================================
SELECCIONAR METODO DE PAGO
=============================================*/
$('#nuevoMetodoPagoLicencia').change(function () {
    var metodo = $(this).val();
    if (metodo == "Efectivo") {
        $(this).parent().parent().removeClass('col-xs-6');
        $(this).parent().parent().addClass('col-xs-4');

        $(this).parent().parent().parent().children('.cajasMetodoPagoLicencia').html(
            '<div class="col-xs-6 pull-right">' +
            '   <div class="input-group">' +
            '           <label for="">Metodo de Pago Efectivo</label>' +
            '   </div>' +
            '</div>'
        );
        //AGREGAR FORMATO AL PRECIO
        $('.nuevoValorEfectivoLicencia').number(true, 2);
        $('.nuevoCambioEfectivoLicencia').number(true, 2);
        //LISTAR METODO EN LA ENTRADA
        listarMetodos();
    } else {
        $(this).parent().parent().removeClass('col-xs-4');
        $(this).parent().parent().addClass('col-xs-6');

        $(this).parent().parent().parent().children('.cajasMetodoPagoLicencia').html(
            '<div class="col-xs-6" style="padding-left:0px">\n' +
            '\n' +
            '                                    <div class="input-group">\n' +
            '\n' +
            '                                        <input type="text" class="form-control" id="nuevoCodigoTransaccionLicencia"\n' +
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
$(".formularioVentaLicencia").on("change", ".nuevoValorEfectivoLicencia", function () {

    var efectivo = $(this).val();
    var cambio = Number(efectivo) - Number($('#totalVentaDB').val());

    var nuevoCambioEfectivo = $(this).parent().parent().parent().children('.capturarCambioEfectivo').children().children('.nuevoCambioEfectivoLicencia');

    nuevoCambioEfectivo.val(cambio);
});
/*=============================================
CAMBIO EN TRANSACCION
=============================================*/
$(".formularioVentaLicencia").on("change", "#nuevoCodigoTransaccionLicencia", function () {

    listarMetodos();
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

        $('#saldoVentaPrincipalLicencia').remove();
        $("#camposSaldosLicencia").append(
            '<input type="hidden" name="saldo" id="saldoVentaAbonoLicencia" value="">'
        )

    })
    $('#btn-cancelarAbono').click(function (e) {
        e.preventDefault();
        $('#saldoVentaAbonoLicencia').remove();
        $("#camposSaldosLicencia").append(
            '<input type="hidden" name="saldo" id="saldoVentaPrincipalLicencia" value="0">'
        )
        $("#estadoSaldoLicencia").val('Cancelado');
    })
});

/*=============================================
RESTAR EL VALOR DEL ABONO
=============================================*/


/*=============================================
CAMBIO EN EFECTIVO
=============================================*/
$(".inputAbono").keyup(function () {
    var efectivo = 0;
    var saldo = 0;
    var cambio = 0;
    efectivo = $(this).val();
    saldo = $('#totalVentaDB').val();
    cambio = Number(saldo - efectivo);
    if (cambio < 0) {
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
    } else {
        $("#estadoSaldoLicencia").val('Debe');
        $('#saldoVentaAbonoLicencia').val(cambio);
    }


    // var nuevoCambioEfectivo = $(this).parent().parent().parent().children('#camposSaldos').children().children('#saldoVentaAbono');

    // nuevoCambioEfectivo.val(cambio);

});

/*=============================================
LISTAR METODO PAGO
=============================================*/

function listarMetodos() {

    var listaMetodos = "";
    if ($('#nuevoMetodoPagoLicencia').val() == 'Efectivo') {

        $('#listaMetodoPagoLicencia').val('Efectivo');
    } else {
        $('#listaMetodoPagoLicencia').val($('#nuevoMetodoPagoLicencia').val() + '-' + $('#nuevoCodigoTransaccionLicencia').val());
    }

}


$("#btn-descuento").click(function (e) {
    e.preventDefault();

    $('.validar_descuento').val('1');
    $('#mostrar-btn-cancelar-descu').show('blid');
    $('#mostrar-btn-descuento').hide('blid');
    $('#nuevoTotalVenta').removeAttr('disabled');

    var precioDescuento = [];
    var pre = $(".nuevoDescuentoLicencia");
    max = $("#totalVentaDB").val();

    for (var i = 0; i < pre.length; i++) {
        precioDescuento.push({
            "descuento": $(pre[i]).val()

        })
    }
    ;


    var td = 0;


    for (var i = 0; i < precioDescuento.length; i++) {

        td = td + parseInt(precioDescuento[i].descuento);


    }
    ;


    min = max - td;


});

$("#btn-descuento-cancelar").click(function (e) {
    e.preventDefault();
    $('#mostrar-btn-descuento').show('blid');
    $('#nuevoTotalVenta').attr('disabled', true);
    $('#mostrar-btn-cancelar-descu').hide('blid');
    $('.validar_descuento').val('0');
    sumarTotalPrecios();
});

//VALIDAR SI EXISTE VALOR DENTRO DEL DIV






//Descuento examen medico
$.get('/api/examen-medico/1', function (respuesta) {
    desc_examen_medico = respuesta.valor;
});