$(function () {
    $("#mostrar_abono").click(function(){


        $('#realizar-abono').show('blind');
        $('html,body').animate({
                scrollTop: $('#realizar-abono').offset().top},
            'slow');


    });

    $("#cancelar_abono").click(function(){


        $('#realizar-abono').hide('blind');


    });

    $("#mostrar_historial").click(function(){

        $('#historial_abonos').show('fold');
        $('html,body').animate({
                scrollTop: $('#historial_abonos').offset().top},
            'slow');

    });

    $("#ocultar_historial").click(function(){


        $('#historial_abonos').hide('blind');
        
    });



});