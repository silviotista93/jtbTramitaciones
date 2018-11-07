<?php

namespace App\Http\Controllers\Admin;

use App\ResumenTramite;
use App\Seguro;
use App\ServicioVehicular;
use App\TipoDocumento;
use App\TipoTramTransito;
use App\TipoVehiculo;
use App\Transito;
use App\User;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class TramiTransitoController extends Controller
{
    public function index(){
        $tipoTrTransitos = TipoTramTransito::all();
        $tipoDocumento = TipoDocumento::all();
        $tipoVehiculos = TipoVehiculo:: where('id',1)->orWhere('id',10)->get();
        $tipoServicios = ServicioVehicular::all();
        $transitos = Transito::all();
        $clientes = User::role(['Cliente'])->orderBy('id','DESC')->get();
        $roles = Role::where("name", "=", "Cliente")->first();
        $codigoFactura = ResumenTramite::select('id')->orderby('created_at','DESC')->first();

        return view('admin.tramiTransito.tramiTransito',compact('tipoDocumento','transitos','clientes','roles','codigoFactura','tipoVehiculos','tipoServicios','tipoTrTransitos'));
    }
}
