$(document).ready(function () {
	$('.nuevoTotalVentaTramiTra').number(true, 2);

});

$(".nuevoTotalVentaTramiTra").keyup(function () {

	valorIngresado = $(this).val();
	var total = valorIngresado;
	$('.totalVentaDBTransi').val(total);

});


$(".crearVentaTrans").click(function (e) {

	e.preventDefault();

	var url = '/admin/tramite-transito-creado';
    //DATOS DEL TRAMITE
    //Cliente


    var nombreCliente = $('#nombreCliente').val();
    var identificacionCliente = $('#identificacionCliente').val();
    var tipoIdentificacion = $("#txtEditartipoIdentificacionCliente").val();
    var emailCliente = $('#txtEditarEmailCliente').val();
    var telefonoCliente = $('#txtEditarTelefonoCliente').val();
    var telefonoCliente_2 = $('#txtEditarTelefono_2Cliente').val();
    var tablaVenta = $('#tablamostrarVentaAlerta').html();
    var tv=$('#id_vehiculo').val();
    var ts=$('#id_servicio').val();
    var c=$('#id_transito').val();
    datos=""; 
    $(".icheck .checked").parent().find("span").each(function () { datos += $(this).text().trim()+","; });
   
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


    $('.formularioVentaTramTrans').attr('action', url);

    //VALIDACIONES
    if ($('#idCliente').val() === '' & $('#nuevoMetodoPago').val() === '' & $('#totalVentaDBTransi').val() === '') {
    	toastr.error('Cliente Requerido');
    	toastr.error('Metodo de Pago Requerido');
    	toastr.error('Total Venta Requerido');

    } else if ($('#nuevoMetodoPago').val() === '' & $('#totalVentaDBTransi').val() === '') {
    	toastr.error('Metodo de Pago Requerido');
    	toastr.error('Total de Venta Requerido');

    } else if ($('#idCliente').val() === '' & $('#totalVentaDBTransi').val() === '') {
    	toastr.error('Cliente Requerido');
    	toastr.error('Total Venta Requerido');

    } else if ($('#idCliente').val() === '' & $('#nuevoMetodoPago').val() === '') {
    	toastr.error('Cliente Requerido');
    	toastr.error('Metodo de Pago Requerido');
    } else if ($('#idCliente').val() === '') {
    	toastr.error('Cliente Requerido');
    } else if ($('#nuevoMetodoPago').val() === '') {
    	toastr.error('Metodo de Pago Requerido');
    } else if ($('#totalVentaDBTransi').val() === '') {
    	toastr.error('Total Venta Requerido');
    }else if ($('#id_vehiculo').val()===''){
    	toastr.error('Tipo vehiculo requerido');   

    }else if ($('').val()===''){
    	toastr.error('Placa requerida');
    }else if ($('#id_servicio').val()===''){
    	toastr.error('Servicio requerido');	 	 
    } else if (!$("input:checkbox:checked").length) {
    	/* toastr.error('Debe seleccionar al menos un tipo de licencia ');*/
    	toastr.error('Debe seleccionar al menos un tramite');


    } else {
    	let total = $("#totalVentaDBTransi").val();
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
    		'                  <th>Tipo</th>\n' +
    		'                  <th>Placa</th>\n' +
    		'                  <th>Ciudad</th>\n' +
    		'                  <th>Tramite</th>\n' +
    		'                  <th>Precio</th>\n' +
    		'                </tr>\n' +
    		'                 <tbody style="border-bottom:2px solid #888;"> ' +
    		'                  <tr>       '+
    		'                  <td>'+$('#id_vehiculo option[value='+tv+']').text() +" "+$('#id_servicio option[value='+ts+']').text() +'</td>'+
    		'                  <td>'+ $('#placaCarro').val()+'</td>'+
    		'                  <td>'+$('#id_transito option[value='+c+']').text() +'</td>'+
    		'                  <td>'+datos+'</td>'+
    		'                  <td>'+$('#totalVentaDBTransi').val() +'</td>'+
    		'                  </tr>       '+
            '                </tbody>  ' +
                            '<tfoot>'+
                            '<tr><td colspan="3"></td>'+
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

    					$(".formularioVentaTramTrans").submit();

    				}
    			},

    			cerrar: function () {
    			}
    		}
    	});
    }
    
});


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

        $('#saldoVentaPrincipalTransi').remove();
        $("#camposSaldosTransi").append(
            '<input type="hidden" name="saldo" id="saldoVentaAbonoTransi" value="">'
        )

    })
    $('#btn-cancelarAbono').click(function (e) {
        e.preventDefault();
        $('#saldoVentaAbonoTransi').remove();
        $("#camposSaldosTransi").append(
            '<input type="hidden" name="saldo" id="saldoVentaPrincipalTransi" value="0">'
        )
        $("#estadoSaldoTransi").val('Cancelado');
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
    saldo=$('#totalVentaDBTransi').val();
    cambio =  Number(saldo-efectivo);
    if(cambio < 0 ){
         $(this).val(0);
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
        $("#estadoSaldoTransi").val('Debe');
        $('#saldoVentaAbonoTransi').val(cambio);
    }


    console.log(cambio);
    // var nuevoCambioEfectivo = $(this).parent().parent().parent().children('#camposSaldos').children().children('#saldoVentaAbono');

    // nuevoCambioEfectivo.val(cambio);

});