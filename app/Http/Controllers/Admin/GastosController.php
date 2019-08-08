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
           'valor_gasto' => 'required',
           'persona' => 'required',
        ]);
        Gasto::create([
           'detalle' => strtoupper($request->get('detalle')),
           'valor' => $request->get('valor'),
           'id_tipo_gasto' => $request->get('tipo_gasto'),
           'persona' => $request->get('persona'),
           'codigo' => $request->get('codigo'),
        ]);

        return back()->with('flash','Gasto ingresado correctamente');
    }

    public function crear_tipo_gasto (Request $request){
        $this->validate($request,[
           'tipo_gasto' => 'required'
        ]);

        $tipo_gasto = new TipoGasto();
        $tipo_gasto->tipo_gasto = $request->get('tipo_gasto');
        $tipo_gasto->estado = '1';
        $tipo_gasto->save();

        return back()->with('flash','Tipo gasto creado correctamente');
    }
}
