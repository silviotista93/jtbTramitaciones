<?php

namespace App\Http\Controllers\Admin;

use App\Abono;
use App\ResumenTramite;
use App\TramiteTransito;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;


class ResumenTramiteController extends Controller
{
    //RECIBOS GENERALRES

    //RECIBO PARA SEGURO
    public function facturaPdf($id){

        $obtenerDatos = ResumenTramite::where('id' ,$id)->with('segurosTramite','idcliente','tipoTramite')->first();
        $pdf = PDF::loadView('admin.factura', compact('obtenerDatos'))->setPaper ([ 0 , 0 , 226.77 , 379.84 ]);
        return $pdf->stream('listado.pdf');
    }
    public function facturaAbonoPdf($id){

        $datosAbono = Abono::where('id' ,$id)->with('resumenTramite')->first();
        $pdf = PDF::loadView('admin.factura-abono', compact('datosAbono'))->setPaper ([ 0 , 0 , 226.77 , 379.84 ]);
        return $pdf->stream('listado.pdf');
    }

    public function reciboPdf($id){
        $obtenerDatos = ResumenTramite::where('id' ,$id)->with('segurosTramite','idcliente','tipoTramite')->first();
        $abono = Abono::select('*')->where('resumen_tramite_id','=',$id)->orderby('created_at','DESC')->first();
        return view('admin.recibo',compact('obtenerDatos','abono'));
    }
    public function reciboAbono($id){
        $datosAbono = Abono::where('id' ,$id)->with('resumenTramite')->first();
        return view('admin.recibo-abono',compact('datosAbono'));
    }

    //RECIBO PARA LICENCIA DE CONDUCCION
    public function facturaPdfLicencia($id){

        $obtenerDatos = ResumenTramite::where('id' ,$id)->with('licenciaTramite','idcliente','tipoTramite')->first();
        $pdf = PDF::loadView('admin.factura-licencia', compact('obtenerDatos'))->setPaper ([ 0 , 0 , 226.77 , 379.84 ]);
        return $pdf->stream('listado.pdf');
    }
    public function facturaAbonoLicenciaPdf($id){

        $datosAbonos = Abono::where('id' ,$id)->with('resumenTramite')->first();
        $pdf = PDF::loadView('admin.factura-abono-licencia', compact('datosAbonos'))->setPaper ([ 0 , 0 , 226.77 , 379.84 ]);
        return $pdf->stream('listado.pdf');
    }
    public function reciboPdfLicencia($id){
        $obtenerDatos = ResumenTramite::where('id' ,$id)->with('licenciaTramite','idcliente','tipoTramite')->first();
        $abono = Abono::select('*')->where('resumen_tramite_id','=',$id)->orderby('created_at','DESC')->first();
        return view('admin.recibo-licencia',compact('obtenerDatos','abono'));
    }
    public function reciboAbonoLicencia($id){
        $datosAbonos = Abono::where('id' ,$id)->with('resumenTramite')->first();
        return view('admin.recibo-abono-licencia',compact('datosAbonos'));
    }

    //VENTAS TRAMITE SEGURO
    public function agregarSeguro(Request $request){ 

        $cliente = ResumenTramite::create([

            'idUsuario' => $request->get('idCliente'),
            'id_tipoTramite' => $request->get('id_tipoTramite'),
            'metodo_pago' => $request->get('listaMetodoPago'),
            'idVendedor' => $request->get('idVendedor'),
            'total' => $request->get('total'),
            'estado' => $request->get('estado'),


        ]);
        $seguros = $request->idSeguro;
        $cantidad = $request->nuevaCantidadSeguro;
        $sumaPrecio = $request->nuevoPrecioSeguro;
        for ($i=0; $i<count($seguros); $i++){
            $cliente->segurosTramite()->attach([
                $seguros[$i] => ['cantidad' => $cantidad[$i],'precio_cantidad' => $sumaPrecio[$i]]

            ]);
        }

        $abono=Abono::create([
            'valor_abono' => $request->get('abono'),
            'saldo' => $request->get('saldo'),
            'nota' => $request->get('nota'),
            'estado' => $request->get('estadoSaldo'),
            'resumen_tramite_id' => $request->get('id_resumen_tramite')
        ]);




        return  back()->withFlash('Venta Realizada Correctamente');
    }

    public function agregarAbono(Request $request){

        $abono = Abono::create([

            'valor_abono' => $request->get('abono'),
            'saldo' => $request->get('saldo'),
            'estado' => $request->get('estadoSaldo'),
            'nota' => $request->get('nota'),
            'metodo_pago' => $request->get('listaMetodoPagoAbono'),
            'resumen_tramite_id' => $request->get('id_resumen_tramite')
        ]);
        alert()->success('.','Abono Creado ')->autoClose(3000);
        return back();
    }

    //VENTAS TRAMITE LICENCIA
    public function agregarLicencia(Request $request){

        $cliente = ResumenTramite::create([

            'idUsuario' => $request->get('idCliente'),
            'id_tipoTramite' => $request->get('id_tipoTramite'),
            'metodo_pago' => $request->get('listaMetodoPago'),
            'idVendedor' => $request->get('idVendedor'),
            'total' => $request->get('total'),
            'estado' => $request->get('estado'),
            'descuento' => $request->get('descuento'),
            'idTramitador' => $request->get('seleccionarTramitador'),
            'descuento_medico' => $request->get('descuento_medico'),
            'descuento_escuela' => $request->get('descuento_escuela')

        ]);
        $licencias = $request->idLicencia;
        $cantidad = $request->nuevaCantidadLicencia;
        $validar_curso = $request->validar_curso;
        $sumaPrecio = $request->nuevoPrecioLicencia;
        for ($i=0; $i<count($licencias); $i++){
            $cliente->licenciaTramite()->attach([
                $licencias[$i] => ['cantidad' => $cantidad[$i],'validar_curso' => $validar_curso[$i],'precio_venta' => $sumaPrecio[$i]]

            ]);
        }
        if (isset($validar_curso[1])){
            $sinCurso = $validar_curso[0] + $validar_curso[1];

            if ($sinCurso == 2){
                ResumenTramite::where('id',$cliente->id)->update([
                    'escuela_conduccion' => 'Realizado'
                ]);
            }
        }else{
            $sinCurso = $validar_curso[0];

            if ($sinCurso > 0){
                ResumenTramite::where('id',$cliente->id)->update([
                    'escuela_conduccion' => 'Realizado'
                ]);
            }
        }





        $abono=Abono::create([
            'valor_abono' => $request->get('abono'),
            'saldo' => $request->get('saldo'),
            'nota' => $request->get('nota'),
            'estado' => $request->get('estadoSaldo'),
            'resumen_tramite_id' => $request->get('id_resumen_tramite')
        ]);




        return  back()->withFlash('Tramite Realizado Correctamente');
    }

    //VENTAS TRAMITE DE TRANSITO
    public function agregarTramiteTransito(Request $request){

        $resumenTramite = ResumenTramite::create([

            'idUsuario' => $request->get('idCliente'),
            'id_tipoTramite' => $request->get('id_tipoTramite'),
            'metodo_pago' => $request->get('listaMetodoPago'),
            'idVendedor' => $request->get('idVendedor'),
            'total' => $request->get('total'),
            'estado' => $request->get('estado'),
            'idTramitador' => $request->get('seleccionarTramitador'),


        ]);

        $placaMoto = $request->get('placaMoto');
        $placaCarro = $request->get('placaCarro');

        if (isset($placaMoto)){
            $placa = $placaMoto;
        }else{
            $placa = $placaCarro;
        }

        $tramiTransito = TramiteTransito::create([
            'placa' =>  $placa,
            'id_transito' => $request->get('id_transito'),
            'id_vehiculo' => $request->get('id_vehiculo'),
            'id_servicio' => $request->get('id_servicio')
        ]);

        $resumenTramite->tramiTransito()->attach([$tramiTransito->id]);
        $tramiTransito->tramiteTransito()->sync($request->get('tipoTramiteTransi'));

        $abono = Abono::create([
            'valor_abono' => $request->get('abono'),
            'saldo' => $request->get('saldo'),
            'nota' => $request->get('nota'),
            'estado' => $request->get('estadoSaldo'),
            'resumen_tramite_id' => $resumenTramite->id
        ]);




        return  back()->withFlash('Tramite Realizado Correctamente');
    }




    //ACTUALIZAR EL ESTADO DEL TRAMITE DE LAS LICENCIAS

    public function actualizarEstadoLicencia(Request $request, $id){
        $estadoResumLicencia = ResumenTramite::find($id);
        $estadoResumLicencia->estado = $request->get('estado_tramite_licencia');
        $estadoResumLicencia->save();
        alert()->success('.','Proceso ')->autoClose(3000);;
        return back();
    }

    //ACTUALIZAR EL ESTADO DE LOS PROCESOS

    //EXAMEN MEDICO

    public function actualizarEstadoMedico(Request $request, $id){
        $examenMedico = ResumenTramite::find($id);
        $request->validate([
            'g-recaptcha-response' => 'required|captcha'
        ]);
        $examenMedico->examen_medico = $request->get('examen_medico');

        $examenMedico->save();

        //ACTUALIZAR ESTADO TRAMITE
        $traerResumenTramite = ResumenTramite::select('*')->where('id','=',$id)->get();

        $medico = $traerResumenTramite[0]->examen_medico;
        $derechos = $traerResumenTramite[0]->derechos_transito;
        $conduccion = $traerResumenTramite[0]->escuela_conduccion;
        if ($medico == "Realizado" & $derechos == "Realizado" & $conduccion == "Realizado"){
            $actualizarEstadoLicencia = ResumenTramite::where('id','=',$id)->update(array('estado' => 'Entregado'));
        }else{
            $actualizarEstadoLicencia = ResumenTramite::where('id','=',$id)->update(array('estado' => 'En tramite'));
        }

        alert()->success('.','Proceso Médico Actualizado')->autoClose(3000);;
        return back();
    }

    public function actualizarEstadoConduccion(Request $request, $id){
        $escuelaConduccion = ResumenTramite::find($id);
        $request->validate([
            'g-recaptcha-response' => 'required|captcha'
        ]);
        $escuelaConduccion->escuela_conduccion = $request->get('escuela_conduccion');

        $escuelaConduccion->save();

        //ACTUALIZAR ESTADO TRAMITE
        $traerResumenTramite = ResumenTramite::select('*')->where('id','=',$id)->get();

        $medico = $traerResumenTramite[0]->examen_medico;
        $derechos = $traerResumenTramite[0]->derechos_transito;
        $conduccion = $traerResumenTramite[0]->escuela_conduccion;
        if ($medico == "Realizado" & $derechos == "Realizado" & $conduccion == "Realizado"){
            $actualizarEstadoLicencia = ResumenTramite::where('id','=',$id)->update(array('estado' => 'Entregado'));
        }else{
            $actualizarEstadoLicencia = ResumenTramite::where('id','=',$id)->update(array('estado' => 'En tramite'));
        }

        alert()->success('.','Proceso Escuela de Conducción Actualizado')->autoClose(3000);;
        return back();
    }

    public function actualizarEstadoDerechos(Request $request, $id){
        $derechosTransito = ResumenTramite::find($id);
        $request->validate([
            'g-recaptcha-response' => 'required|captcha'
        ]);
        $derechosTransito->derechos_transito = $request->get('derechos_transito');

        $derechosTransito->save();

        //ACTUALIZAR ESTADO TRAMITE
        $traerResumenTramite = ResumenTramite::select('*')->where('id','=',$id)->get();

        $medico = $traerResumenTramite[0]->examen_medico;
        $derechos = $traerResumenTramite[0]->derechos_transito;
        $conduccion = $traerResumenTramite[0]->escuela_conduccion;
        if ($medico == "Realizado" & $derechos == "Realizado" & $conduccion == "Realizado"){
            $actualizarEstadoLicencia = ResumenTramite::where('id','=',$id)->update(array('estado' => 'Entregado'));
        }else{
            $actualizarEstadoLicencia = ResumenTramite::where('id','=',$id)->update(array('estado' => 'En tramite'));
        }

        alert()->success('.','Proceso Derechos de Transito Actualizado')->autoClose(3000);;
        return back();
    }


}
