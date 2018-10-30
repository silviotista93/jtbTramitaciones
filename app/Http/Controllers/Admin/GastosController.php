<?php

namespace App\Http\Controllers\Admin;

use App\Gasto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GastosController extends Controller
{
    public function index(){

        return view('admin.gastos.gastos');
    }

    /**
     *
     */
    public function store(Request $request){
        $this->validate($request,[
           'detalle' => 'required',
           'valor_gasto' => 'required'
        ]);

        Gasto::create([
           'detalle' => strtoupper($request->get('detalle')),
           'valor' => $request->get('valor')
        ]);

        return back()->with('flash','Gasto ingresado correctamente');
    }
}
