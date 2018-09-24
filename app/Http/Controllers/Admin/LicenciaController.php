<?php

namespace App\Http\Controllers\Admin;

use App\Licencia;
use App\ResumenTramite;
use App\TipoDocumento;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class LicenciaController extends Controller
{
    public function index(){
        $tipoDocumento = TipoDocumento::all();
        $clientes = User::role(['Cliente'])->orderBy('id','DESC')->get();
        $tramitadores = User::role(['Tramitador'])->orderBy('id','DESC')->get();
        $roles = Role::where("name", "=", "Cliente")->first();
        $codigoFactura = ResumenTramite::select('id')->orderby('created_at','DESC')->first();
        return view('admin.licencia.licencia',compact('tipoDocumento','clientes','codigoFactura','tramitadores','roles'));
    }

    //ADMINISTRAR LICENCIA........................................
    public function administrarLicencia(){

        $licenciasPublico = Licencia::where('tipo_precio','=','PUBLICO')->get();
        $licenciasTramitador = Licencia::where('tipo_precio','=','TRAMITADOR')->get();
        return view('admin.licencia.admin-licencia',compact('licenciasPublico','licenciasTramitador'));
    }

    public function actaulizarPrecioLicencia(Request $request, Licencia $licencia){
        $data = $request->validate([

            'categoria' => 'required',
            'tipoLicencia' => 'required',
            'precio' => 'required',
            'descuento' => 'required'
        ]);

        $licencia->update($data);

        return back()->withFlash('Precio licencia actualizado');
    }

}
