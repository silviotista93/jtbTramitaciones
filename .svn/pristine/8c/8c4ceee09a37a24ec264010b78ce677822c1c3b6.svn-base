<?php

namespace App\Http\Controllers\Admin;

use App\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function agregarContacto(Request $request){

        $this->validate($request,[

            'nombresApellidos' => 'required',
            'telefono' => 'required',
            'descripcion' => 'required'

        ]);

        $contacto = new Agenda;

        $contacto->nombre = $request->get('nombresApellidos');
        $contacto->telefono = $request->get('telefono');
        $contacto->telefono_2 = $request->get('telefono_2');
        $contacto->email = $request->get('email');
        $contacto->direccion = $request->get('direccion');
        $contacto->descripcion = $request->get('descripcion');

        $contacto->save();

        return back()->with('flash','Contacto creado exitosamente');
    }
}
