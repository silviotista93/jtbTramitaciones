$(function () {
    $('#select_tramite_tipoVehiculo').on('change',onSelectTipoVehiculo)
});

function onSelectTipoVehiculo() {

   var tipoVehiculo_id = $(this).val();

   //AJAX

    $.get('/api/cilindrajes/'+tipoVehiculo_id+'/todos',function (data) {
        var html_select = '<option value="">Seleccione Cilindraje</option>';
        for (var i=0; i<data.length; ++i)
            html_select += '<option cilindraje="'+data[i].cilindraje+'" costo="'+data[i].precio+'" value="'+data[i].id+'">'+data[i].cilindraje+'</option>';

        $('#select_cilindraje').html(html_select);
    });


}

$('#select_tramite_tipoVehiculo').on('change', function () {
    if (this.value == '1') {

        $("#mostrar_año_seguro").hide('blind');
        $("#calculoValor_sin_modelo").show('blind');
        $("#calculoValor_con_modelo").hide('blind');

    }else if (this.value == '2'){

        $("#mostrar_año_seguro").show('blind');
        $("#calculoValor_con_modelo").show('blind');
        $("#calculoValor_sin_modelo").hide('blind');

    }else if (this.value == '3'){

        $("#mostrar_año_seguro").hide('blind');
        $("#calculoValor_sin_modelo").show('blind');
        $("#calculoValor_con_modelo").hide('blind');

    }else if (this.value == '4'){

        $("#mostrar_año_seguro").hide('blind');
        $("#calculoValor_sin_modelo").show('blind');
        $("#calculoValor_con_modelo").hide('blind');

    }else if (this.value == '5'){

        $("#mostrar_año_seguro").show('blind');
        $("#calculoValor_con_modelo").show('blind');
        $("#calculoValor_sin_modelo").hide('blind');

    }else if (this.value == '6'){

        $("#mostrar_año_seguro").show('blind');
        $("#calculoValor_con_modelo").show('blind');
        $("#calculoValor_sin_modelo").hide('blind');

    }else if (this.value == '7'){

        $("#mostrar_año_seguro").show('blind');
        $("#calculoValor_con_modelo").show('blind');
        $("#calculoValor_sin_modelo").hide('blind');

    }else if (this.value == '8'){

        $("#mostrar_año_seguro").hide('blind');
        $("#calculoValor_sin_modelo").show('blind');
        $("#calculoValor_con_modelo").hide('blind');

    }else if (this.value == '9'){

        $("#mostrar_año_seguro").hide('blind');
        $("#calculoValor_sin_modelo").show('blind');
        $("#calculoValor_con_modelo").hide('blind');
    }
});