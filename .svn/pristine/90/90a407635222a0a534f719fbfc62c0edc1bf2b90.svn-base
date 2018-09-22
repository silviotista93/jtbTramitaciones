<?php

namespace App\Http\Controllers\Admin;

use App\Abono;
use App\ResumenTramite;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministrarVentasController extends Controller
{
    public function index(){
        $obtenerDatos = ResumenTramite::with('segurosTramite','idcliente','idVendedor','tipoTramite')->orderby('id','DESC')->get();

        return view('admin.ventas.administrar-ventas',compact('obtenerDatos'));
    }

    public function infoVenta($id){
        $infoVentaDatos = ResumenTramite::where('id' ,$id)->with('segurosTramite','idcliente','idVendedor','tipoTramite')->first();
        $historialAbonos = Abono::select('*')->where('resumen_tramite_id','=',$id)->get();
        $abono = Abono::select('*')->where('resumen_tramite_id','=',$id)->orderby('created_at','DESC')->first();
        $tipoIdentificacion = User::with('tipoDocumento')->first();
        return view('admin.ventas.info-venta',compact('infoVentaDatos','tipoIdentificacion','historialAbonos','abono'));
    }

    public function infoVentaLicencia($id){

        $infoVentaDatos = ResumenTramite::where('id' ,$id)->with('licenciaTramite','idcliente','idVendedor','tipoTramite','idTramitador')->first();
        $historialAbonos = Abono::select('*')->where('resumen_tramite_id','=',$id)->get();
        $abono = Abono::select('*')->where('resumen_tramite_id','=',$id)->orderby('created_at','DESC')->first();
        $tipoIdentificacion = User::with('tipoDocumento')->first();
        return view('admin.ventas.info-venta-licencia',compact('infoVentaDatos','tipoIdentificacion','historialAbonos','abono'));
    }

    //TRAMITES DE TRAMITADOR ESPECIFICO
    public function tramitesTramitador($idTramitador){
        $infoTramitador = ResumenTramite::where('idTramitador' ,$idTramitador)->with('licenciaTramite','idcliente','idVendedor','tipoTramite','idTramitador')->first();
        return view('admin.tramitadores.info-ventas-tramitador',compact('infoTramitador'));
    }
}
