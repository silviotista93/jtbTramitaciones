<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/adminlte/bootstrap/css/bootstrap.min.css">
    <title>Factura-{{$datosAbonos->resumenTramite->id}}</title>

    <style>
        .nombreEmpresa{
            margin-top: -45px;
            text-align: center;
        }

        .letra-tipo{
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase !important;
            font-size: 10px;
        }
        .letra-tabla{
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase !important;
            font-size: 10px;
            margin-left: -23px;
        }
        .letra-contenido-tabla{
            font-size: 9px;
            text-transform: none !important;
        }

    </style>
</head>
<body>
<header>

    <p class="nombreEmpresa letra-tamaño letra-tipo">Tramitaciones John Bolaños</p>
    <p class="letra-tipo" style="margin-top: -7px; text-align: center;">NIT:76326410-3</p>
    <p class="letra-tipo" style="margin-top: -7px; text-align: center;">cra. 20 # 5-52 tel 8396673</p>

    <p class="letra-tipo" style="margin-left: -30px;">res.dian 18762008910456 de 27/06/2018</p>
    <p class="letra-tipo" style="margin-left: -30px;margin-top: -7px;">rango fact. tr1 al tr200</p>
    <p class="letra-tipo" style="margin-left: -30px;margin-top: -7px;">Factura de Venta Nª: tr {{$datosAbonos->resumenTramite->id}}</p>
    <p class="letra-tipo" style="margin-left: -30px;margin-top: -7px;">Fecha: {{$datosAbonos->obtenerDatoTramite($datosAbonos->resumenTramite->id)->created_at}}</p>
    <p class="letra-tipo" style="margin-left: -30px;margin-top: -7px;">Cliente: {{$datosAbonos->idcliente($datosAbonos->resumenTramite->idUsuario)->name}}  {{$datosAbonos->idcliente($datosAbonos->resumenTramite->idUsuario)->apellidos}}</p>
    <p class="letra-tipo" style="margin-left: -30px;margin-top: -7px;">identificación: {{$datosAbonos->idcliente($datosAbonos->resumenTramite->idUsuario)->identificacion}}</p>

    <p class="letra-tipo" style="margin-left: -30px;">--------------------------------------------------------------------------------</p>
</header>
<p class="letra-tipo" style="text-align: center">CONCEPTO</p>
<p class="letra-tipo" style="margin-left: -30px;margin-top: -1px;">Tipo Tramite: </p>


<table class="letra-tabla">
    <tr>
        <td style="width: 40px">Cant.</td>
        <td style="width: 105px">Descrip.</td>
        <td style="width: 70px"> Precio</td>
        <td style="width: 70px"> Total</td>
    </tr>
    <tbody>

    @php($resumen = $datosAbonos->obtenerDatosTramiteLicencia($datosAbonos->resumenTramite->id))

    @php($indice = 0)
    @foreach( $resumen as $datosAbono)
        <tr class="letra-contenido-tabla">
            <td style="text-align: center">{{($datosAbono->cantidad)}}</td>

            <td>{{$datosAbono->tipo_licencia}} {{$datosAbono->categoria}}</td>
            <td>$ {{$datosAbono->precio_venta}}</td>

            <td>$ {{$datosAbono->precio_venta}}</td>
        </tr>
    @endforeach

    <tr class="letra-contenido-tabla">
        <td style="text-align: center"></td>
        <td></td>
        <td>-----------------------------------</td>
        <td></td>
    </tr>
    <tr>
        <th scope="rowgroup"></th>
        <td></td>
        <td><b>Abono</b></td>
        <td><b>$ {{$datosAbonos->valor_abono}}</b></td>
    </tr>
    <tr>
        <th scope="rowgroup"></th>
        <td></td>
        <td><b>Saldo</b></td>
        <td><b>$ {{$datosAbonos->saldo}}</b></td>
    </tr>
    <tr>

        <th scope="row"></th>
        <td></td>
        <td><b>COSTO TRAMITE</b></td>
        <td><b>$ {{$datosAbonos->resumenTramite->total}}</b></td>
    </tr>
    </tbody>
</table>
<p class="letra-tipo" style="text-align: center;margin-top: 13px">*** Régimen Simplicado ***</p>
<p class="letra-tipo" style="text-align: center;margin-top: -7px">***** que gusto poder atenderlo ******</p>
<p class="letra-tipo" style="text-align: center;margin-top: -7px">Forma de pago: {{$datosAbonos->metodo_pago}}</p>

</div>


<!-- Bootstrap 3.3.6 -->
<script src="/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/adminlte/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>