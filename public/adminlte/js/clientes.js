$(document).on('click','.btnEditarCliente',function(){
 var idCliente = $(this).attr('idcliente');
    //ACTUALIZAR CLIENTE
    var urlActualizarCliente = '/admin/actualizar-cliente/'+idCliente;
    $('#form_editar_cliente').attr('action', urlActualizarCliente);
    $.get('/api/encontrarClienteEditar/'+idCliente+'', function (respuesta) {



    });
    $('#btnEditCliente').click(function () {

        $("#form_editar_cliente").submit();
    })
});