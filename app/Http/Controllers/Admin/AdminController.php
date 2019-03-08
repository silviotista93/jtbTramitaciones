<?php

namespace App\Http\Controllers\Admin;

use App\Gasto;
use App\ResumenTramite;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){
        $cantidadClientes = User::role(['Cliente'])->count('id');
        $cantidadTramiPendiente = ResumenTramite::with('segurosTramite','idcliente','tipoTramite','idVendedor','tramitesAbono')->where('estado', '=','En tramite')->count('id');
        $ultimosTramites = ResumenTramite::with('segurosTramite','idcliente','tipoTramite','idVendedor','tramitesAbono')->orderby('created_at','DESC')->take(5)->get();
        $cantidadGastos = Gasto::whereDate('created_at',Carbon::today())->count('id');

        return view('admin.inicio',compact('cantidadClientes','cantidadTramiPendiente','ultimosTramites','cantidadGastos'));
    }
}
