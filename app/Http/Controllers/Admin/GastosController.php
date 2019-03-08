<?php

namespace App\Http\Controllers\Admin;

use App\Gasto;
use App\TipoGasto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GastosController extends Controller
{
    public function index(){
        $tipo_gastos = TipoGasto::all();
        return view('admin.gastos.gastos',compact('tipo_gastos'));
    }

    /**
     *
     */
    public function store(Request $request){
        $this->validate($request,[
           'detalle' => 'required',
           'tipo_gasto' => 'required',
           'valor_gasto' => 'required'
        ]);

        Gasto::create([
           'detalle' => strtoupper($request->get('detalle')),
           'valor' => $request->get('valor'),
           'id_tipo_gasto' => $request->get('tipo_gasto')
        ]);

        return back()->with('flash','Gasto ingresado correctamente');
    }
}
