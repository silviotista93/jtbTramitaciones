<?php

namespace App\Http\Controllers\Admin;

use App\Medico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtrosController extends Controller
{
    public function index(){
        $valor_medico = Medico::all()->first();
        return view('admin.otros.otros',compact('valor_medico'));
    }

    public function update(Request $request, Medico $medico){

        $data = $request->validate([
            'valor' => 'required'
        ]);

        $medico->update($data);
        return back()->with('flash','Descuento examen médico actualizado');
    }
}
