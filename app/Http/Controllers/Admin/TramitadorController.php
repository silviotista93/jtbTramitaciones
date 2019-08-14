<?php

namespace App\Http\Controllers\Admin;

use App\CategoriaTramitador;
use App\Licencia;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class TramitadorController extends Controller
{

    //TRAMITADORES
    public function indexTramitadores()
    {
        $rolesTramitador = Role::where("name", "=", "Tramitador")->first();
        $usuarios = User::role(['Tramitador'])->get();
        return view('admin.tramitadores', compact('usuarios', 'rolesTramitador'));
    }

    public function index_editar_tramitador($id){
        $tramitador = User::where('id', $id)->with('categorias_tramitador')->first();
        $categorias = Licencia::all();
        return view('admin.tramitadores.editar-tramitador', compact('tramitador','categorias'));
    }

    public function agregarTramitador(Request $request)
    {
        session(['type' => 'tramitador']);
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'apellidos' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required',
            'telefono_2' => '',
        ]);

        $data = User::create([
            'name' => strtoupper($request->get('name')),
            'apellidos' => strtoupper($request->get('apellidos')),
            'email' => $request->get('email'),
            'telefono' => $request->get('telefono'),
            'telefono_2' => $request->get('telefono_2'),
            'direccion' => $request->get('direccion'),
        ]);
        $user = $data;
        $user->assignRole($request->rol);

        $categorias = Licencia::all();
        foreach ($categorias as $categoria){
            CategoriaTramitador::create([
               'id_categoria' => $categoria->id,
               'id_usuario' => $user->id
            ]);
        }

        return redirect(route('editar.tramitador', $user->id))->withFlash('Tramitador creado existosamente, ahora actualiza los precios por categoria');
    }

}
