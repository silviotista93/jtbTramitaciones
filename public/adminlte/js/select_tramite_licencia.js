$(function () {
//  $('#select').change(function(){
//    $('.colors').hide();
//    $('#'+$(this).val()).show();
//  });

    $('#select_tramite_licencia').on('change', function () {
        if (this.value == '1')
        {
            //Tramite Primera Vez
            $("#licencia_primera_vez").show('blind');
            $("#titulo_licencia_primeravez").show('blind');
            //Tramite Refrendacion
            $("#titulo_licencia_refrendacion").hide('blind');
            $("#licencia_refrendacion").hide('blind');
            //Tramite Recategorizacion
            $("#titulo_licencia_recategorizacion").hide('blind');
            $("#licencia_recategorizacion").hide('blind');

        } else if (this.value == '2')
        {
            //Tramite Refrendacion
            $("#titulo_licencia_refrendacion").show('blind');
            $("#licencia_refrendacion").show('blind');
            //Tramite Primera Vez
            $("#licencia_primera_vez").hide('blind');
            $("#titulo_licencia_primeravez").hide('blind');
            //Tramite Recategorizacion
            $("#titulo_licencia_recategorizacion").hide('blind');
            $("#licencia_recategorizacion").hide('blind');

        } else if (this.value == '3') {
            //Tramite Recategorizacion
            $("#titulo_licencia_recategorizacion").show('blind');
            $("#licencia_recategorizacion").show('blind');
            //Tramite Primera Vez
            $("#licencia_primera_vez").hide('blind');
            $("#titulo_licencia_primeravez").hide('blind');
            //Tramite Refrendacion
            $("#titulo_licencia_refrendacion").hide('blind');
            $("#licencia_refrendacion").hide('blind');

        } else {


            $("#Liquidacion_Licencia_Conduccion").hide('blind');
            $("#Cliente_Licencia_Conduccion").hide('blind');
            $("#Resumen_Licencia_Conduccion").hide('blind');
            $("#Liquidacion_Seguro_Obligatorio").hide('blind');
            $("#Liquidacion_Recibos").hide('blind');

        }


    });

});
