//ACTULIZAR EXAMEN MEDICO............

//CLICKEAR CHECKED
$('.checkProcesosMedico').on('ifChecked', function () {
    var resumenTramite_id = $(this).attr('idResumen');

    var url = '/admin/update-estado-medico/'+resumenTramite_id;
    $('#frmUpdateMedico').attr('action', url);

    $('.checkProcesosMedico').val('Realizado');
    $('#modalCaptchaMedico').modal('show');

   /* $(".actualizarMedico").submit();*/
});
//DESCLICKEAR CHECKED
$('.checkProcesosMedico').on('ifUnchecked', function () {
    var resumenTramite_id = $(this).attr('idResumen');

    var url = '/admin/update-estado-medico/'+resumenTramite_id;
    $('#frmUpdateMedico').attr('action', url);

    $('.checkProcesosMedico').val('Pendiente');
    $('#modalCaptchaMedico').modal('show');
    /*$(".actualizarMedico").submit();*/

});

//ACTULIZAR ESCUELA DE CONDUCCION............

//CLICKEAR CHECKED
$('.checkProcesosConduccion').on('ifChecked', function () {
    var resumenTramite_id = $(this).attr('idResumen');

    var url = '/admin/update-estado-conduccion/'+resumenTramite_id;
    $('#frmUpdateConducción').attr('action', url);

    $('.checkProcesosConduccion').val('Realizado');
    $('#modalCaptchaConduccion').modal('show');

    /* $(".actualizarMedico").submit();*/
});
//DESCLICKEAR CHECKED
$('.checkProcesosConduccion').on('ifUnchecked', function () {
    var resumenTramite_id = $(this).attr('idResumen');

    var url = '/admin/update-estado-conduccion/'+resumenTramite_id;
    $('#frmUpdateConducción').attr('action', url);

    $('.checkProcesosConduccion').val('Pendiente');
    $('#modalCaptchaConduccion').modal('show');

    /*$(".actualizarMedico").submit();*/

});

//ACTULIZAR DERECHOS DE TRANSITO............

//CLICKEAR CHECKED
$('.checkProcesosRecibos').on('ifChecked', function () {
    var resumenTramite_id = $(this).attr('idResumen');

    var url = '/admin/update-estado-derechos/'+resumenTramite_id;
    $('#frmUpdateDerechos').attr('action', url);

    $('.checkProcesosRecibos').val('Realizado');
    $('#modalCaptchaDerechos').modal('show');

    /* $(".actualizarMedico").submit();*/
});
//DESCLICKEAR CHECKED
$('.checkProcesosRecibos').on('ifUnchecked', function () {
    var resumenTramite_id = $(this).attr('idResumen');

    var url = '/admin/update-estado-derechos/'+resumenTramite_id;
    $('#frmUpdateDerechos').attr('action', url);

    $('.checkProcesosRecibos').val('Pendiente');
    $('#modalCaptchaDerechos').modal('show');

    /*$(".actualizarMedico").submit();*/

});





