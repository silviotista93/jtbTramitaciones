(function () {

    var t = null;
    var max = 0;
    var min = 0;
    var desc_examen_medico;

    let precio;
    $.get('/api/costos', function (r) {
        precio = r;
    }, 'JSON');

    let timeo = null;
    const getPublico = function (licencia) {
        let total = 0;
        if (licencia.conduccion === 1) {
            total += precio.escuela.valor;
        }
        return total;
    }
    const getTramitador = function (licencia) {
        let total = 0;
        if (licencia.conduccion === 1) {
            total += precio.escuela.valor;
        }
        if (licencia.medico === 1) {
            total += precio.medico.valor;
        }
        if (licencia.recibo === 1) {
            total += precio.recibo.valor;
        }
        return total;
    }
    const v = new Vue({
        el: "#formularioVenta",
        data: {
            licencias: [],
            descuento_escuela: 0,
            descuento_medico: 0,
            descuento_recibos: 0,
            total: 0,
            descuentoAdicional: 0,
            maximoDescuento: 0,

            categoria: '',
            conduccion: '',
            created_at: '',
            descuento: '',
            id: '',
            id_tipo_tramite: '',
            medico: '',
            precio: '',
            recibo: '',
            tipo: '',
            tipo_licencia: '',
            tipo_precio: '',
            updated_at: '',
        },
        methods: {
            aplicarDescuento() {
                $('#mostrar-btn-cancelar-descu').show('blid');
                $('#mostrar-btn-descuento').hide('blid');
                $('#nuevoTotalVenta').removeAttr('disabled');
            },
            cancelarDescuento() {
                $('#mostrar-btn-descuento').show('blid');
                $('#nuevoTotalVenta').attr('disabled', true);
                $('#mostrar-btn-cancelar-descu').hide('blid');
                this.descuentoAdicional = -1;
            },
            addLicencia(licencia) {
                if (this.licencias.length > 0 && this.licencias[0].tipo !== licencia.tipo) {
                    toastr.error('No se pueden ingresar licencias de diferentes categorias');
                    return false;
                }
                let encnotro = this.licencias.find(function (element) {
                    return element.id === licencia.id;
                });
                if (encnotro) {
                    return false;
                } 
                if (this.licencias.length === 1 && this.licencias[0].tipo === 1) {
                    toastr.warning('Se aplico descuento, por examen medico de $' + desc_examen_medico);
                    this.descuento_medico = 1;
                } else if (this.licencias.length === 2 && this.licencias[0].tipo === 1) {
                    toastr.warning('Solo se pueden vender dos licencias al mismo tiempo');
                    return false;
                }

                this.categoria = licencia.categoria;
                this.conduccion = licencia.conduccion;
                this.created_at = licencia.created_at;
                this.descuento = licencia.descuento;
                this.id = licencia.id;
                this.id_tipo_tramite = licencia.id_tipo_tramite;
                this.medico = licencia.medico;
                this.precio = licencia.precio;
                this.recibo = licencia.recibo;
                this.tipo = licencia.tipo;
                this.tipo_licencia = licencia.tipo_licencia;
                this.tipo_precio = licencia.tipo_precio;
                this.updated_at = licencia.updated_at;

                this.licencias.push({
                    categoria: this.categoria,
                    conduccion: this.conduccion,
                    created_at: this.created_at,
                    descuento: this.descuento,
                    id: this.id,
                    id_tipo_tramite: this.id_tipo_tramite,
                    medico: this.medico,
                    precio: this.precio,
                    recibo: this.recibo,
                    tipo: this.tipo,
                    tipo_licencia: this.tipo_licencia,
                    tipo_precio: this.tipo_precio,
                    updated_at: this.updated_at,
                });
                this.descuentoAdicional = -1;
                return true;
            },
            updateDescuento(objeto) {
                if (objeto !== false) {
                    this.descuentoAdicional = objeto.target.value;
                } else if (this.descuentoAdicional < 1) {
                    this.descuentoAdicional = this.total;
                }
                if (this.total < this.descuentoAdicional) {
                    if (objeto !== false) {
                        toastr.error("No se puede añadir un valor maximo de " + this.total);
                    }
                    this.descuentoAdicional = this.total;
                } else if (this.maximoDescuento > this.descuentoAdicional) {
                    if (objeto !== false) {
                        toastr.error("No se puede añadir un valor maximo de " + this.total);
                    }
                    this.descuentoAdicional = this.maximoDescuento;
                }
            },
            quitarLicencia(key) {
                $("#btnAgregarVentaLicencia" + this.licencias[key].id).removeClass('btn-default').addClass('btn-danger');
                this.licencias.splice(key, 1);
                if (this.licencias.length === 1 && this.licencias[0].tipo === 1) {
                    this.descuento_medico = 0;
                }
                this.descuentoAdicional = -1;
            },
            toogleTramite(key, tipo) {
                let f = this;
                clearTimeout(timeo);
                timeo = setTimeout(() =>{
                    let info;
                    if (tipo === "conduccion") {
                        info = this.licencias[key].conduccion;
                    } else if (tipo === "medico") {
                        info = this.licencias[key].medico;
                    } else if (tipo === "recibo") {
                        info = this.licencias[key].recibo;
                    }
                    if (info !== 0) {
                        info = 0;
                    } else {
                        info = 1;
                    }
                    if (tipo === "conduccion") {
                        this.$set(this.licencias[key], 'conduccion', info);
                    } else if (tipo === "medico") {
                        this.$set(this.licencias[key], 'medico', info);
                    } else if (tipo === "recibo") {
                        this.$set(this.licencias[key], 'recibo', info);
                    }
                    this.descuentoAdicional = -1;
                }, 100);
            }
        },
        computed: {
            hayDescuentoAdicional(){
                if (this.total !== this.descuentoAdicional){
                    return 1;
                }
                return 0;
            },
            getTotal() {
                let totalT = 0;
                let descuentoM = 0;
                this.descuento_escuela = 0;
                this.descuento_recibos = 0;
                if (this.licencias.length > 0) {
                    if (this.licencias[0].tipo === 2) {
                        this.descuento_medico = 0;
                    } else if (this.descuento_medico === 1) {
                        descuentoM -= precio.medico.valor;
                        totalT -= precio.medico.valor;
                    }
                }
                this.licencias.forEach(licencia => {
                    totalT += licencia.precio;
                    if (licencia.tipo === 1) {
                        totalT -= getPublico(licencia);
                    } else if (licencia.tipo === 2) {
                        totalT += getTramitador(licencia);
                    }
                    descuentoM += licencia.descuento;
                    this.descuento_escuela += licencia.conduccion;
                    if (licencia.tipo === 2) {
                        this.descuento_medico += licencia.medico;
                        this.descuento_recibos += licencia.recibo;
                    }
                });
                this.total = totalT;
                this.maximoDescuento = descuentoM;
                this.updateDescuento(false);
                return this.descuentoAdicional;
            }
        }
    });


    function getLicencia(respuesta, tipo) {
        let licencia = respuesta[0];
        licencia.conduccion = 0;
        licencia.medico = 0;
        licencia.recibo = 0;
        licencia.tipo = tipo;
        return licencia;
    }

    $(function () {
        $('#tablaLicencias tbody').on('click', '.agregarVentaLicencia', function (e) {
            let element = $(this);
            if ($(this).hasClass('btn-default')) {
                return;
            }
            var data = table.row($(this).parents('tr')).data();

            $.get('/api/licenciaBuscar/' + data.id + '', function (respuesta) {
                if (v.addLicencia(getLicencia(respuesta, 1))) {
                    element.removeClass('btn-danger').addClass('btn-default');
                }
            });
        });

        /**
         * tabla licencias tramitador
         */

        $('#tablaLicenciasTramitador tbody').on('click', '.agregarVentaLicencia', function (e) {
            let element = $(this);
            if ($(this).hasClass('btn-default')) {
                return;
            }
            var data = tableTramitador.row($(this).parents('tr')).data();

            $.get('/api/licenciaBuscar/' + data.id + '', function (respuesta) {
                if (v.addLicencia(getLicencia(respuesta, 2))) {
                    element.removeClass('btn-danger').addClass('btn-default');
                }
            });
        });

    });



    /*=============================================
    QUITAR PRODUCTOS DE LA VENTA Y RECUPERAR BOTÓN
    =============================================*/

    $(".formularioVentaLicencia").on("click", ".quitarLicencia", function () {
        $(this).parent().parent().parent().parent().remove();

        var idLicencia = $(this).val();
        licencias.remove(idLicencia);
        // $('.recuperarBoton').attr('idSeguro',idSeguro).removeClass('btn-default');
        //$('.recuperarBoton').attr('idSeguro',idSeguro).addClass('btn-primary agregarProducto');
        var el = document.getElementById("btnAgregarVentaLicencia" + idLicencia);
        if (el) {
            var classL = el.classList;
            if (classL) {
                classL.add("btn-danger");
                classL.remove('btn-default');
            }
        }

    });

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

        var fila = "";
        for (var i = 0; i < listarLicencias.length; i++) {

            fila += "<tr>" +
                " <td>" + listarLicencias[i].cantidad + "</td>" +
                " <td>" + listarLicencias[i].tipo_licencia + "</td>" +
                " <td>" + listarLicencias[i].categoria + "</td>" +
                " <td>" + listarLicencias[i].precio + "</td>" +
                " </tr>";
        }


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
            total = $("#totalVentaDB").val();
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
                    '                 <tbody style="border-bottom:2px solid #888;"> ' +
                    '                    ' + fila + '     ' +
                    '                </tbody>  ' +
                    '<tfoot>'+
                    '<tr><td colspan="2"></td>'+
                            '<th scope="row" style="text-align: right;">Total:</th>'+
                            '<td>'+total+'</td>'+
                        '</tr>'+
                    '</tfoot>'+
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

                    cerrar: function () { }
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
        $('#input_abono_licencia').val(efectivo);
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

                    cerrar: function () { }
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

    //VALIDAR SI EXISTE VALOR DENTRO DEL DIV


    //Descuento examen medico
    $.get('/api/examen-medico/1', function (respuesta) {
        desc_examen_medico = respuesta.valor;
    });
    //licencias.changeTotal($('#nuevoTotalVenta'));
})();

$(document).ready(function () {
    $("#input_abono_licencia_format").number(true, 2);
});