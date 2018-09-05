<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recibo</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/adminlte/css/style.css">
</head>
<body onload="">
<div id="invoiceholder">
    <div id="invoice" class="effect2">

        <div id="invoice-top">
            <div class="logo"><img src="/adminlte/img/logo.png" width="5%" alt="Logo"/></div>
            <div style="display: inline-block; margin-left: -26px;">
                <h2 style="font-size: 27px;color: #444 !important;">Tramitaciones</h2>
                <h3 style="font-size: 18px;padding-left: 31px;margin-top: -11px;font-weight: 500;color:#444">John Bolaños</h3>
            </div>
            <p style="display: inline-block; width: 553px;padding-left: 133px; text-align: center"><span style="font-size: 15px; font-weight: bold; color: #444;">Oficina.</span>
                Cra 20 No. 5-52 Cel.: 315 531 0563 - Tel.: 8396673 - Popayán johntramitaciones@hotmail.com </p>


            <div class="title" style="margin-top: -102px">
                <h1>Codigo Venta<span class="invoiceVal invoice_num">TR-{{$datosAbono->resumenTramite->id}}</span></h1>

                <p>Fecha: {{$datosAbono->obtenerDatoTramite($datosAbono->resumenTramite->id)->created_at}}<span id="invoice_date"></span><br>
                </p>
            </div><!--End Title-->
        </div><!--End InvoiceTop-->

        <div id="invoice-mid">
            <div class="clearfix">
                <div class="col-left">
                    <div class="clientinfo">
                        <h2 id="supplier">Cliente</h2>
                    </div>
                </div>
                <div class="col-right">
                    <table class="table" style="width: 625px;">
                        <tbody>

                        <tr>
                            <td><span>Nombre:</span><label id="invoice_total">{{$datosAbono->idcliente($datosAbono->resumenTramite->idUsuario)->name}}  {{$datosAbono->idcliente($datosAbono->resumenTramite->idUsuario)->apellidos}}</label></td>
                            <td><span>Email:</span><label id="currency">{{$datosAbono->idcliente($datosAbono->resumenTramite->idUsuario)->email}}</label></td>
                        </tr>
                        <tr>
                            <td><span>Indentificación:</span><label id="payment_term">{{$datosAbono->idcliente($datosAbono->resumenTramite->idUsuario)->identificacion}}</label></td>
                            <td><span>Telefono:</span><label id="invoice_type">{{$datosAbono->idcliente($datosAbono->resumenTramite->idUsuario)->telefono}}</label></td>
                        </tr>
                        @php($cliente = $datosAbono->idcliente($datosAbono->resumenTramite->idUsuario)->id_tipoIdentificacion)
                        @php($tipoIdenti = $datosAbono->tipoIdentificacion($cliente)->documento)
                        <tr>
                            <td colspan="2"><span>Tipo Documeno:</span><label id="note">{{$tipoIdenti}}</label></td>
                        </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div><!--End Invoice Mid-->

        <div id="invoice-bot">

            <div id="table">
                <table class="table-main" style="margin-left: 10px">
                    <thead>
                    <tr class="tabletitle">
                        <th>Cantidad</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    @php($resumen = $datosAbono->obtenerDatosTramite($datosAbono->resumenTramite->id))
                    @php($indice = 0)
                    @foreach( $resumen as $datosAbonos)
                        <tr class="list-item">
                            <td data-label="Type" class="tableitem">{{($datosAbonos->cantidad)}}</td>
                            <td data-label="Quantity" class="tableitem">{{$datosAbono->tipoVehiculo($resumen[$indice++]->idTipoVehiculo)[0]->nombre}}</td>
                            <td data-label="Description" class="tableitem">
                                {{$datosAbonos->cilindraje}}
                            </td>
                            <td data-label="Unit Price" class="tableitem">$ {{$datosAbonos->precio}} </td>
                            <td data-label="Taxable Amount" class="tableitem">$ {{$datosAbonos->precio_cantidad}} </td>
                        </tr>
                    @endforeach

                    <tr class="list-item total-row">
                        <th colspan="4" class="tableitem"> Total</th>
                        <td data-label="Grand Total" class="tableitem">$ {{$datosAbono->obtenerDatosTramite($datosAbono->resumenTramite->id)[0]->total}}</td>
                    </tr>
                </table>
                <div style="margin-left: 10px">
                    <div style="border: 1px solid #666; padding: 5px;width: 60px;border-bottom-left-radius: 5px;border-top-left-radius: 5px;display: inline-block;font-size: 13px;text-align: center">Abono</div>
                    <div style="border: 1px solid #666; padding: 5px;width: 100px;border-bottom-right-radius: 5px;border-top-right-radius: 5px; display: inline-block;background-color:#666;color: floralwhite;margin-left: -4px;font-size: 13px">${{$datosAbono->valor_abono}}</div>
                    <div style="border: 1px solid #666; padding: 5px;width: 60px;border-bottom-left-radius: 5px;border-top-left-radius: 5px;display: inline-block;font-size: 13px;text-align: center">Saldo</div>
                    <div style="border: 1px solid #666; padding: 5px;width: 100px;border-bottom-right-radius: 5px;border-top-right-radius: 5px; display: inline-block;background-color:#666;color: floralwhite;margin-left: -4px;font-size: 13px">${{$datosAbono->saldo}}</div>
                    <div style="border: 1px solid #666; padding: 5px;width: 255px;border-radius: 5px;display: inline-block;margin-left: 40px;font-size: 13px;height: 80px;">Recibi,</div>
                </div>

            </div><!--End Table-->
            <div class="cta-group" style="margin-left: 11px;">
                <h2>Observaciones:</h2>
                <p>@if($datosAbono->nota == null)
                        Ninguna Observación..
                    @endif
                    {{$datosAbono->nota}}</p>
            </div>

        </div><!--End InvoiceBot-->
        <footer>
            <div id="legalcopy" class="clearfix">

            </div>
        </footer>
    </div><!--End Invoice-->
</div><!-- End Invoice Holder-->


</body>
</html>
