<?php

namespace App\Http\Controllers\Admin;

use App\Abono;
use App\Medico;
use App\Escuela;
use App\ResumenTramite;
use App\TramiteTransito;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministrarVentasController extends Controller
{
    public function index(Request $request){
        $obtenerDatos = ResumenTramite::with('segurosTramite','idcliente','idVendedor','tipoTramite');
        if ($request->get('fechaInicio') && $request->get('fechaFin')) {
            $fi = \Carbon\Carbon::parse($request->get('fechaInicio'))->toDateString();
            $ff = \Carbon\Carbon::parse($request->get('fechaFin'))->toDateString();
            if ($fi !== $ff){
                $obtenerDatos = $obtenerDatos->whereBetween("created_at",[$fi,$ff])->orWhereDate("created_at","=",$ff);
            } else {
                $obtenerDatos = $obtenerDatos->whereDate("created_at","=",$fi);
            }
        }
        $obtenerDatos = $obtenerDatos->orderby('id','DESC')->get();
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
        $precioMedico = Medico::first();
        $precioEscuela = Escuela::first();
        return view('admin.ventas.info-venta-licencia',compact('infoVentaDatos','tipoIdentificacion','historialAbonos','abono','precioMedico','precioEscuela'));
    }

    public function infoVentaTramitesTransi($id){

        $infoVentaDatos = ResumenTramite::where('id' ,$id)->with('tramiTransito','idcliente','idVendedor','tipoTramite','idTramitador')->first();
        $historialAbonos = Abono::select('*')->where('resumen_tramite_id','=',$id)->get();
        $abono = Abono::select('*')->where('resumen_tramite_id','=',$id)->orderby('created_at','DESC')->first();
        $tipoIdentificacion = User::with('tipoDocumento')->first();
        $precioMedico = Medico::first();
        return view('admin.ventas.info-venta-transito',compact('infoVentaDatos','tipoIdentificacion','historialAbonos','abono','precioMedico','tramites'));
    }

    //TRAMITES DE TRAMITADOR ESPECIFICO
    public function tramitesTramitador($idTramitador){
        $infoTramitador = ResumenTramite::where('idTramitador' ,$idTramitador)->with('licenciaTramite','idcliente','idVendedor','tipoTramite','idTramitador')->first();
        return view('admin.tramitadores.info-ventas-tramitador',compact('infoTramitador'));
    }

      // tramites por cliente 

    public function tramitesCliente($idUsuario){
        $infoCliente = ResumenTramite::where('idUsuario' ,$idUsuario)->with('licenciaTramite','idcliente','idVendedor','tipoTramite','idTramitador')->first();
        return view('admin.clientes.info-ventas-cliente',compact('infoCliente'));
    }    

    //TRAMITES PENDIENTES

    public function indexTramitesPendientes(){

        return view('admin.ventas.tramites-pendientes');
    }

    //REPORTES DE VENTAS
    public function reporteVentas (Request $request){
        $resumenTramite = \App\ResumenTramite::with('segurosTramite','idcliente','tipoTramite','idVendedor','tramitesAbono');
        if ($request->get('fechaInicio') && $request->get('fechaFin')) {
            $fi = \Carbon\Carbon::parse($request->get('fechaInicio'))->toDateString();
            $ff = \Carbon\Carbon::parse($request->get('fechaFin'))->toDateString();
            if ($fi !== $ff){
                $resumenTramite = $resumenTramite->whereBetween("created_at",[$fi,$ff])->orWhereDate("created_at","=",$ff);
            } else {
                $resumenTramite = $resumenTramite->whereDate("created_at","=",$fi);
            }
        }
        $data = $resumenTramite->get();

        return datatables()->of($data)->toJson();
    }
    public function tramitesPentientes (Request $request){
        $resumenTramite = \App\ResumenTramite::with('segurosTramite','idcliente','tipoTramite','idVendedor','tramitesAbono')->where('estado','=','En Tramite');
        if ($request->get('fechaInicio') && $request->get('fechaFin')) {
            $fi = \Carbon\Carbon::parse($request->get('fechaInicio'))->toDateString();
            $ff = \Carbon\Carbon::parse($request->get('fechaFin'))->toDateString();
            if ($fi !== $ff){
                $resumenTramite = $resumenTramite->whereBetween("created_at",[$fi,$ff])->orWhereDate("created_at","=",$ff);
            } else {
                $resumenTramite = $resumenTramite->whereDate("created_at","=",$fi);
            }
        }
        $data = $resumenTramite->get();

        return datatables()->of($data)->toJson();
    }
}
