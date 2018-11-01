<?php

namespace App\Http\Controllers\Admin;

use App\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function agregarContacto(Request $request){

        $this->validate($request,[

            'nombre' => 'required',
            'telefono' => 'required',
            'descripcion' => 'required'

        ]);

        $contacto = new Agenda;

        $contacto->nombre = $request->get('nombre');
        $contacto->telefono = $request->get('telefono');
        $contacto->telefono_2 = $request->get('telefono_2');
        $contacto->email = $request->get('email');
        $contacto->direccion = $request->get('direccion');
        $contacto->descripcion = $request->get('descripcion');

        $contacto->save();

        return back()->with('flash','Contacto creado exitosamente');
    }

    // actualizar agenda contacto 
     public function actualizarAgenda(Request $request, Agenda $agenda)
    {

        $data = $request->validate([

            'nombre' => 'required',
            'telefono' => 'required',
            'descripcion' => 'required',
            'telefono_2'=>'',
            'email'=>' ',
            'direccion'=>' '

        ]);

        $agenda->update($data);

        return back()->with('flash','Contacto actualizado correctamente');

    }
}
