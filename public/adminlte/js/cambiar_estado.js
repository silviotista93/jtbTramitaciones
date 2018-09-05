funcionClickCheckbox = function(element, estado) {
    var url = $("#frmActualizarEstado").attr("action");
    var data = $("#frmActualizarEstado").serialize();
    url = url.replace("__id__", element.attr("data-id"));
    if (estado) {
        url = url.replace("__estado__", "activo");
    } else {
        url = url.replace("__estado__", "inactivo");
    }
    $.post(url,data,function (status){
        if (status){

        }
    });
};