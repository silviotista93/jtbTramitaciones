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
<body onload="window.print();">
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
                <h1>Codigo Venta<span class="invoiceVal invoice_num">TR-{{$obtenerDatos->id}}</span></h1>
                <p>Fecha: <span id="invoice_date">{{$obtenerDatos->created_at->toFormattedDateString()}}</span><br>
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
                            <td><span>Nombre:</span><label id="invoice_total">{{$obtenerDatos->idcliente->name}} {{$obtenerDatos->idcliente->apellidos}}</label></td>
                            <td><span>Email:</span><label id="currency">{{$obtenerDatos->idcliente->email}}</label></td>
                        </tr>
                        <tr>
                            <td><span>Indentificación:</span><label id="payment_term">{{$obtenerDatos->idcliente->identificacion}}</label></td>
                            <td><span>Telefono:</span><label id="invoice_type">{{$obtenerDatos->idcliente->telefono}}</label></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span>Tipo Documeno:</span><label id="note">{{$obtenerDatos->tipoIdentificacion($obtenerDatos->idcliente->id_tipoIdentificacion)->documento}}</label></td>
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
                    @foreach($obtenerDatos->segurosTramite as $obtenerDato)
                    <tr class="list-item">
                        <td data-label="Type" class="tableitem">{{$obtenerDatos->cantidad($obtenerDato->id)[0]->cantidad}}</td>
                        <td data-label="Quantity" class="tableitem">{{$obtenerDatos->tipoVehiculoSeguro($obtenerDato->idTipoVehiculo)->nombre}}</td>
                        <td data-label="Description" class="tableitem">{{$obtenerDato->cilindraje}}
                        </td>
                        <td data-label="Unit Price" class="tableitem">$ {{$obtenerDato->precio}}</td>
                        <td data-label="Taxable Amount" class="tableitem">$ {{$obtenerDatos->cantidad($obtenerDato->id)[0]->precio_cantidad}}</td>
                    </tr>
                    @endforeach
                    <tr class="list-item total-row">
                        <th colspan="4" class="tableitem"> Total</th>
                        <td data-label="Grand Total" class="tableitem">$ {{$obtenerDatos->total}}</td>
                    </tr>
                </table>
                <div style="margin-left: 10px">
                    <div style="border: 1px solid #666; padding: 5px;width: 60px;border-bottom-left-radius: 5px;border-top-left-radius: 5px;display: inline-block;font-size: 13px;text-align: center">Abono</div>
                    <div style="border: 1px solid #666; padding: 5px;width: 100px;border-bottom-right-radius: 5px;border-top-right-radius: 5px; display: inline-block;background-color:#666;color: floralwhite;margin-left: -4px;font-size: 13px">${{$abono->valor_abono}}</div>
                    <div style="border: 1px solid #666; padding: 5px;width: 60px;border-bottom-left-radius: 5px;border-top-left-radius: 5px;display: inline-block;font-size: 13px;text-align: center">Saldo</div>
                    <div style="border: 1px solid #666; padding: 5px;width: 100px;border-bottom-right-radius: 5px;border-top-right-radius: 5px; display: inline-block;background-color:#666;color: floralwhite;margin-left: -4px;font-size: 13px">${{$abono->saldo}}</div>
                    <div style="border: 1px solid #666; padding: 5px;width: 255px;border-radius: 5px;display: inline-block;margin-left: 40px;font-size: 13px;height: 80px;">Recibi,</div>
                    <div style="margin-top: -33px"><span><strong style="font-size: 14px">Metodo Pago: </strong></span><label id="currency" style="font-size: 14px">{{$obtenerDatos->metodo_pago}}</label></div>
                </div>


            </div>
            <br><!--End Table-->
            <div class="cta-group" style="margin-left: 11px;">
                <h2>Observaciones:</h2>
                <p>@if($abono->nota == null)
                       Ninguna Observación..
                   @endif
                    {{$abono->nota}}</p>
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
