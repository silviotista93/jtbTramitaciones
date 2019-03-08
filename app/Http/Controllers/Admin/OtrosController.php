<?php

namespace App\Http\Controllers\Admin;

use App\Escuela;
use App\Medico;
use App\Recibo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtrosController extends Controller
{
    public function index(){
        $valor_medico = Medico::first();
        $valor_escuela = Escuela::first();
        $valor_derechos= Recibo::first();
        return view('admin.otros.otros',compact('valor_medico','valor_escuela','valor_derechos'));
    }

    public function update(Request $request, Medico $medico){

        $data = $request->validate([
            'valor' => 'required'
        ]);

        $medico->update($data);
        return back()->with('flash','Descuento examen médico actualizado');
    }
    public function updateEscuela(Request $request, Escuela $escuela){

        $data = $request->validate([
            'valor' => 'required'
        ]);

        $escuela->update($data);
        return back()->with('flash','Descuento escuela conduccion actualizado');
    }


     public function updateRecibo(Request $request, Recibo $recibo){

        $this->validate($request,[
            'valor' => 'required'
        ]);

       Recibo::where('id',1)->update(['valor' => $request->get('valor')]);

       return back()->with('flash','Descuento recibos de transito actualizado');

     }
}
