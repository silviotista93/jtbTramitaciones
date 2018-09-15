<?php

namespace App\Http\Controllers\Admin;

use App\ResumenTramite;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){
        $cantidadClientes = User::role(['Cliente'])->count('id');
        $cantidadTramiPendiente = ResumenTramite::with('segurosTramite','idcliente','tipoTramite','idVendedor','tramitesAbono')->where('estado', '=','En tramite')->count('id');
        $ultimosTramites = ResumenTramite::with('segurosTramite','idcliente','tipoTramite','idVendedor','tramitesAbono')->orderby('created_at','DESC')->take(5)->get();

        return view('admin.inicio',compact('cantidadClientes','cantidadTramiPendiente','ultimosTramites'));
    }
}
