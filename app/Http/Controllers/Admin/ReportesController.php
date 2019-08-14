<?php

namespace App\Http\Controllers\Admin;

use App\TipoGasto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ResumenTramite;
use Illuminate\Support\Facades\DB;
use App\Gasto;

class ReportesController extends Controller
{
    public function index(){
        $resumenTramites = $this->reporteTramites();
        return view('admin.reportes.reportes', compact("resumenTramites"));
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
        $tipoGasto = $request->input('tipoGasto', null);

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

        $tipoGastoText = 'todos';
        if (is_numeric($tipoGasto) && $tipoGasto > 0) {
            $resumenTramite = $resumenTramite->where('id_tipo_gasto', '=', $tipoGasto);
            $tipoGastoText = TipoGasto::where('id', '=', $tipoGasto)->first()->tipo_gasto;
        }

        $resumenTramite = $resumenTramite->whereNotIn('id_tipo_gasto',
            \App\TipoGasto::select('id')->where('estado', '=', \App\TipoGasto::INACTIVE )->get());

        $total = $resumenTramite->sum('valor');
        $resumenTramite = $resumenTramite->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d")'))->get();

        return response()->json([
            'resumen' => $resumenTramite,
            'total' => $total,
            'tipoGasto' => $tipoGastoText
        ]); $resumenTramite->toJson();
    }

    public function reporteTramites(){
        $resumenTramites = ResumenTramite::join('tramites', 'tramites.id', '=', 'resumen_tramites.id_tipoTramite')->groupBy("id_tipoTramite")
        ->selectRaw("count(id_tipoTramite) as value, nombre as label")
        ->get();
        $color =     ["#f56954", "#00a65a", "#f39c12", "#00c0ef", "#3c8dbc", "#d2d6de"];
        $highlight = ["#f56954", "#00a65a", "#f39c12", "#00c0ef", "#3c8dbc", "#d2d6de"];
        /*
        $color =     ["#f44336", "#3f51b5"];
        $highlight = ["#c62828", "#283593"];
        */
        for ($i=0; $i<count($resumenTramites); $i++){
            $resumenTramites[$i]->color = $color[$i];
            $resumenTramites[$i]->highlight = $highlight[$i];
        }

        return $resumenTramites;
    }
}
