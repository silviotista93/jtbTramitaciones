<?php

namespace App\Http\Controllers\Admin;

use App\TipoDocumento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class ClienteController extends Controller
{
    public function indexClientes(){

        $tipoDocumento = TipoDocumento::all();
        $roles = Role::where("name", "=", "Cliente")->first();
        return view('admin.clientes.lista-clientes',compact('tipoDocumento','roles'));
    }
}
