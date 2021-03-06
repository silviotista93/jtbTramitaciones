<?php

namespace App\Http\Controllers\Admin;

use App\ResumenTramite;
use App\Seguro;
use App\TipoDocumento;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\TipoVehiculo;
use Spatie\Permission\Models\Role;

class SeguroController extends Controller
{
    public function index(){
        $tipoDocumento = TipoDocumento::all();
        $clientes = User::role(['Cliente'])->orderBy('id','DESC')->get();
        $seguros = Seguro::all();
        $roles = Role::where("name", "=", "Cliente")->first();
        $codigoFactura = ResumenTramite::select('id')->orderby('created_at','DESC')->first();
        return view('admin.seguro.seguro',compact('seguros','tipoDocumento','clientes','codigoFactura','roles'));
    }


    //ADMINISTRAR SEGURO........................................

    public function administrarSeguro(){

        $seguros = Seguro::all();

        return view('admin.seguro.admin_seguro',compact('seguros'));
    }

    public function actualizarPrecioSeguro(Request $request, Seguro $seguro){

        $data = $request->validate([

            'cilindraje' => 'required',
            'precio' => 'required',
            'ultima_actualizacion' => 'required'
        ]);

        $seguro->update($data);

        return back()->withFlash('Precio seguro actaulizado');

    }




}
