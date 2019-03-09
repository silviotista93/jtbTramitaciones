moment.locale("es");
var fechaInicio = null;
var fechaFin = null;
function startRangoFecha(selectorFecha, fnSucess, fnCancel){
    let storageFechaInicio = selectorFecha+"_fechaInicio";
    let storageFechaFin = selectorFecha+"_fechaFin";
    fechaInicio = getStorage(storageFechaInicio);
    fechaFin = getStorage(storageFechaFin);
    let fecha = $(selectorFecha);
    let fechaInicial = moment();
    let fechaFinal = moment();
    if (fechaInicio != null || fechaFin != null){
        fechaInicial = moment(fechaInicio);
        fechaFinal = moment(fechaFin);
        let span = fecha.find("span");
        span.html(fechaInicial.format("MMMM D, YYYY")+"-"+fechaFinal.format("MMMM D, YYYY"));
    }
    fecha.daterangepicker({
        "locale": idioma,
        ranges: {
            'Hoy' : [moment(), moment()],
            'Ayer' : [moment().subtract(1,'days'), moment().subtract(1,'days')],
            'Últimos 7 días' : [moment().subtract(6,'days'), moment()],
            'Últimos 30 días' : [moment().subtract(29,'days'), moment()],
            'Este mes' : [moment().startOf('month'), moment().endOf('month')],
            'Último mes' : [moment().subtract(1,'month').startOf('month'), moment().subtract(1,'month').endOf('month')],
        },
        startDate: fechaInicial,
        endDate: fechaFinal
    },
    function(start, end){
        let span = fecha.find("span");
        span.html(start.format("MMMM D, YYYY")+"-"+end.format("MMMM D, YYYY"));
        let fechaInicial = start.format("YYYY-M-D");
        let fechaFinal = end.format("YYYY-M-D");
        setStorage(storageFechaInicio, start);
        setStorage(storageFechaFin, end);
        if (typeof(fnSucess) === "function"){
            fnSucess(fechaInicial, fechaFinal);
        }
    });
    fecha.on("cancel.daterangepicker", function(){
        clearStorage(storageFechaInicio);
        clearStorage(storageFechaFin);
        location.reload();
        if (typeof(fnCancel) === "function"){
            fnCancel();
        }
    });
}

function setStorage(key, value){
    localStorage.setItem(key, value);
}

function getStorage(key){
    return localStorage.getItem(key);
}

function clearStorage(key){
    localStorage.removeItem(key);
}

idioma = {
    "separator": "-",
    "applyLabel": "Aplicar",
    "cancelLabel": "Cancelar",
    "fromLabel": "de",
    "toLabel": "hasta",
    "customRangeLabel": "Rango Personalizado",
    "daysOfWeek": [
        "Dom",
        "Lun",
        "Mar",
        "Mie",
        "Jue",
        "Vie",
        "Sáb"
    ],
    "monthNames": [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre"
    ],
    "firstDay": 1
};