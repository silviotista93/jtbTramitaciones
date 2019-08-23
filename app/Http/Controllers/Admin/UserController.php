<?php

namespace App\Http\Controllers\Admin;

use App\Events\UserWasCreated;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $rolUserAdmin = Role::where("name", "=", "Administrador")->first();
        $rolUserSecre = Role::where("name", "=", "Secretari@")->first();
        $usuarios = User::role(['Administrador', 'Secretari@'])->get();
        $roles = Role::where("name", "=", "Administrador")->orWhere("name", "=", "Secretari@")->get()->sortBy('id');
        $editRoles = Role::pluck('name', 'id');

        return view('admin.usuarios', compact('usuarios', 'roles', 'editRoles','rolUserAdmin','rolUserSecre'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'apellidos' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required',
            'foto' => 'required',

        ]);
        $password = str_random(8);
        $pass = bcrypt($password);
        $data = User::create([
            'name' => strtoupper($request->get('name')),
            'apellidos' => strtoupper($request->get('apellidos')),
            'email' => $request->get('email'),
            'telefono' => $request->get('telefono'),
            'foto' => $request->get('foto'),
            'password' => $pass,
        ]);

        $user = $data;
        $user->assignRole($request->rol);
        UserWasCreated::dispatch($user, $password);

        $latestUser = User::select('name', 'apellidos')->orderby('created_at', 'DESC')->take(1)->first();

        $nombre = $latestUser->name;
        $apellidos = $latestUser->apellidos;

        return back()->withFlash('Creado Existosamente. Hemos enviado un correo electronico a ' . $nombre . ' ' . $apellidos . ' con las credenciales para iniciar en el sistema');

    }

    public function destroy($id)
    {

        $usuario = User::findOrFail($id);
        $usuario->delete();

        return back()->with('eliminar', 'Empleado Eliminado Correctamente');
    }

    public function actualizarEstado(Request $request, User $usuario, $estado)
    {

        if ($estado === "activo") {
            $usuario->estado = "activo";
        } else if ($estado == "inactivo") {
            $usuario->estado = "inactivo";
        } else {
            return false;
        }
        return json_encode($usuario->update());
    }

    //ACTUALIZAR  USUARIOS
    public function indexUpdateUser($id)
    {
        $datosUsuario = User::find($id);
        $adminRoles = Role::where("name", "=", "Administrador")->first();
        $secreRoles = Role::where("name", "=", "Secretari@")->first();

        return view('admin.usuarios.actualizar_usuario', compact('datosUsuario', 'adminRoles', 'secreRoles'));
    }


    public function actualizarUsuarios(Request $request, User $user)
    {

        $this->validate($request, [
            'name' => 'required',
            'apellidos' => 'required',
            'email' => 'string|email|max:255',
            'telefono' => 'required',
            'telefono_2' => '',
        ]);

        $user->update([
            'name' => strtoupper($request->get('name')),
            'apellidos' => strtoupper($request->get('apellidos')),
            'email' => $request->get('email'),
            'telefono' => $request->get('telefono'),
            'telefono_2' => $request->get('telefono_2'),
        ]);

        return back()->withFlash('Usuario Actualizado');
    }

    //CAMBIAR ROLES DEL USUARIO
    public function updateRoles(Request $request, User $user)
    {
        $idUsuario = $request->get('idUsuario');
        $traerDatosUsuario = User::select('*')->where('id', '=', $idUsuario)->first();
        $prueba = $request->get('roles');

        if ($traerDatosUsuario['password'] == null) {

            $password = str_random(8);
            $data['password'] = bcrypt($password);
            $user->update($data);

            $user->assignRole($request->get('rol'));
            if ($request->get('rol') == 'Administrador') {
                $user->removeRole('Secretari@');
            } else {
                $user->removeRole('Administrador');
            }

            UserWasCreated::dispatch($user, $password);
            return back()->with('flash', 'Roles actualizados, Hemos enviado un correo electronico con las credenciales para iniciar en el sistema');


        } else {
            $user->assignRole($request->get('rol'));
            if ($request->get('rol') == 'Administrador') {
                $user->removeRole('Secretari@');
            } else {
                $user->removeRole('Administrador');
            }
            return back()->with('flash', 'Roles actualizados, ya puede iniciar en el sistema. Si no recuerda su contraseña, vaya a Login, y luego a "Olvidé mi contraseña"');

        }

    }

    //EDITAR PERFIL DE LOS USUARIOS

    public function editarPerfil()
    {

        return view('admin.usuarios.perfil');
    }

    public function updatePassword(Request $request, User $user)
    {

        if ($request->filled('password')) {

            $this->validate($request, [

                'password' => 'confirmed|min:6',

            ]);
            $password = $request->get('password');
            $user->password = bcrypt($password);

            $user->update();

            return back()->with('flash', 'Contraseña actualizada');
        } else {

            return back()->with('eliminar', 'Ningún Cambio');
        }
    }

    public function fotoPerfil(Request $request)
    {

        $foto = $request->file('foto');
        $fotoUrl = $foto->store('public/usuarios');

        return $urlFinal = Storage::url($fotoUrl);

    }

    public function guardarFoto(Request $request, User $user)
    {

        if ($request->filled('foto')) {

            $user->foto = $request->get('foto');
            $user->save();
            return back()->with('flash', 'Foto de perfil actualizada');
        } else {

            return back()->with('eliminar', 'Ningún Cambio');
        }
    }


    //AGREGAR CLIENTES
    public function AgregarCliente(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'apellidos' => 'required',
            'identificacion' => 'required|unique:users',
            'id_tipoIdentificacion' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required',
            'telefono_2' => '',
            'id_vendedor' => '',
        ]);


        $user = User::create([
            'name' => strtoupper($request->get('name')),
            'apellidos' => strtoupper($request->get('apellidos')),
            'identificacion' => $request->get('identificacion'),
            'id_tipoIdentificacion' => $request->get('id_tipoIdentificacion'),
            'email' => $request->get('email'),
            'telefono' => $request->get('telefono'),
            'telefono_2' => $request->get('telefono_2'),
            'id_vendedor' => $request->get('id_vendedor')
        ]);
        $user->assignRole($request->rol);

        return back()->withFlash('Cliente Creado Existosamente');

    }

    //ACTUALIZAR CLIENTES
    public function actualizarCliente(Request $request, User $user)
    {
        $this->validate($request,[
            'name' => 'required',
            'apellidos' => 'required',
            'identificacion' => 'required',
            'id_tipoIdentificacion' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'telefono_2' => '',
        ]);


        $user->update([
            'name'=>strtoupper($request->get('name')),
            'apellidos'=> strtoupper($request->get('apellidos')),
            'identificacion'=> $request->get('identificacion'),
            'id_tipoIdentificacion'=> $request->get('id_tipoIdentificacion'),
            'email'=> $request->get('email'),
            'telefono'=> $request->get('telefono'),
            'telefono_2'=> $request->get('telefono_2'),
        ]);

        return back()->withFlash('Cliente Actualizado');

    }


    //ACTUALIZAR ROLES DEL CLIENTE
    public function updateRolCliente(Request $request, User $user)
    {
        $id_vendedor = $request->validate([
            'id_vendedor' => '',
        ]);
        $user->update($id_vendedor);
        $user->assignRole($request->roles);
        return back()->with('flash', 'Roles actualizados');
    }

    //ACTUALIZAR ROLES PARA NUEVO USUARIO
    public function updateRolNuevoUsuario(Request $request, User $user)
    {
        $traerDatosUsuario = User::select('*')->where('id', '=', $user)->first();

        if ($traerDatosUsuario['password'] == null) {

            $password = str_random(8);
            $data['password'] = bcrypt($password);
            $user->update();
            $user->assignRole($request->roles);

            UserWasCreated::dispatch($user, $password);
            return back()->with('flash', 'Roles actualizados, Hemos enviado un correo electronico con las credenciales para iniciar en el sistema');

        } else {

            $user->update();
            $user->assignRole($request->roles);
        }

        return back()->with('flash', 'Roles actualizados');
    }


    public function editarTramitador(Request $request, User $user)
    {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'apellidos' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'telefono_2' => '',
        ]);

        $user->update([
            'name' => strtoupper($request->get('name')),
            'apellidos' => strtoupper($request->get('apellidos')),
            'email' => $request->get('email'),
            'telefono' => $request->get('telefono'),
            'telefono_2' => $request->get('telefono_2'),
        ]);

        return back()->withFlash('Cambios realizados Correctamente');
    }

    public function eliminarTramitador($id)
    {

        $tramitador = User::findOrFail($id);
        $tramitador->delete();

        return back()->with('eliminar', 'Tramitador Eliminado Correctamente');
    }

}
