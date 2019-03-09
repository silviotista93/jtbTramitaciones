<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ResumenTramite;
use Illuminate\Support\Facades\DB;
use App\Gasto;

class ReportesController extends Controller
{
    public function index(){

        return view('admin.reportes.reportes');
    }

    public function datosGrafica(Request $request){
        $resumenTramite = ResumenTramite::select(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as fecha'),DB::raw('SUM(total) as ventas'));
        if ($request->get('fechaInicio') && $request->get('fechaFin')) {
            $fi = \Carbon\Carbon::parse($request->get('fechaInicio'))->toDateString();
            $ff = \Carbon\Carbon::parse($request->get('fechaFin'))->toDateString();
            if ($fi !== $ff){
                $resumenTramite = $resumenTramite->whereBetween("created_at",[$fi,$ff])->orWhereDate("created_at","=",$ff);
            } else {
                $resumenTramite = $resumenTramite->whereDate("created_at","=",$fi);
            }
        }
        $resumenTramite = $resumenTramite->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d")'))->get();
        return $resumenTramite->toJson();
    }

    public function reporteGastos(Request $request){
        $resumenTramite = Gasto::select(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as fecha'),DB::raw('SUM(valor) as gasto'));
        if ($request->get('fechaInicio') && $request->get('fechaFin')) {
            $fi = \Carbon\Carbon::parse($request->get('fechaInicio'))->toDateString();
            $ff = \Carbon\Carbon::parse($request->get('fechaFin'))->toDateString();
            if ($fi !== $ff){
                $resumenTramite = $resumenTramite->whereBetween("created_at",[$fi,$ff])->orWhereDate("created_at","=",$ff);
            } else {
                $resumenTramite = $resumenTramite->whereDate("created_at","=",$fi);
            }
        }
        $resumenTramite = $resumenTramite->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d")'))->get();
        return $resumenTramite->toJson();
    }
}
