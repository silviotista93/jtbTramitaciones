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

        $usuarios = User::role(['Administrador','Secretari@'])->get();
        $roles = Role::where("name", "=", "Administrador")->orWhere("name", "=", "Secretari@")->get()->sortBy('id');
        $editRoles = Role::pluck('name','id');

        return view('admin.usuarios', compact('usuarios', 'roles','editRoles'));
    }

    public function store(Request $request)
    {

        $rule = [

            'name' => 'required|string|max:255',
            'apellidos' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required',
            'foto' => 'required',

        ];

        $data = $request->validate($rule);


        //Contraseña Aletoria
        $password  =  str_random(8);
        $data['password'] = bcrypt($password);
        $user = User::create($data);
        $user->assignRole($request->rol);

        UserWasCreated::dispatch($user, $password);

        $latestUser = User::select('name','apellidos')->orderby('created_at','DESC')->take(1)->first();

        $nombre = $latestUser->name;
        $apellidos = $latestUser->apellidos;

        return back()->withFlash('Creado Existosamente. Hemos enviado un correo electronico a '.$nombre.' '.$apellidos.' con las credenciales para iniciar en el sistema');

    }

    public function destroy($id)
    {

        $usuario = User::findOrFail($id);
        $usuario->delete();

        return back()->with('eliminar', 'Empleado Eliminado Correctamente');
    }

    public function actualizarEstado(Request $request, User $usuario,$estado){

        if ($estado === "activo"){
            $usuario->estado = "activo";
        }else if ($estado == "inactivo"){
            $usuario->estado = "inactivo";
        }else{
            return false;
        }
        return json_encode($usuario->update());
    }

    //ACTUALIZAR  USUARIOS
    public function indexUpdateUser($id){
        $datosUsuario = User::find($id);
        $editRoles = Role::pluck('name','id');

        return view('admin.usuarios.actualizar_usuario',compact('datosUsuario','editRoles'));
    }


    public function actualizarUsuarios(Request $request, User $user){

        $data = $request->validate([
            'name' => 'required',
            'apellidos' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required',
            'telefono_2' => ''
        ]);
        $user->update($data);

        return back()->withFlash('Usuario Actualizado');
    }

    //CAMBIAR ROLES DEL USUARIO
    public function updateRoles(Request $request, User $user){
        $idUsuario= $request->get('idUsuario');
        $traerDatosUsuario = User::select('*')->where('id','=',$idUsuario)->first();
        $prueba = $request->get('roles');

        if ($traerDatosUsuario['password'] == null){


            if (in_array('Administrador',$prueba) or in_array('Secretari@',$prueba)){
                $password  =  str_random(8);
                $data['password'] = bcrypt($password);
                $user->update($data);

                $user->syncRoles($request->roles);

                UserWasCreated::dispatch($user, $password);
                return back()->with('flash','Roles actualizados, Hemos enviado un correo electronico con las credenciales para iniciar en el sistema');

            }else{
                $user->syncRoles($request->roles);
                return back()->with('flash','Roles actualizados');
            }
        }else{
            if (in_array('Administrador',$prueba) or in_array('Secretari@',$prueba)){

                $user->syncRoles($request->roles);
                return back()->with('flash','Roles actualizados, ya puede iniciar en el sistema.Si no recuerda su contraseña, vaya a Login, y luego a "Olvidé mi contraseña"');
            }else{
                $user->syncRoles($request->roles);
                return back()->with('flash','Roles actualizados');
            }


        }

    }

    //EDITAR PERFIL DE LOS USUARIOS

    public function editarPerfil(){

        return view('admin.usuarios.perfil');
    }

    public function updatePassword(Request $request, User $user){

        if ($request->filled('password')){

            $this->validate($request,[

                'password' => 'confirmed|min:6'

            ]);
            $password = $request->get('password');
            $user->password = bcrypt($password);

            $user->update();

            return back()->with('flash', 'Contraseña actualizada');
        }else{

            return back()->with('eliminar', 'Ningún Cambio');
        }
    }

    public function fotoPerfil(Request $request)
    {

        $foto = $request->file('foto');
        $fotoUrl = $foto->store('public/usuarios');

        return $urlFinal = Storage::url($fotoUrl);

    }
    public function guardarFoto(Request $request, User $user){

        if ($request->filled('foto')){

            $user->foto = $request->get('foto');
            $user->save();
            return back()->with('flash', 'Foto de perfil actualizada');
        }else{

            return back()->with('eliminar', 'Ningún Cambio');
        }
    }


    //AGREGAR CLIENTES
    public function AgregarCliente(Request $request){


        $rule = [
            'name' => 'required',
            'apellidos' => 'required',
            'identificacion' => 'required|unique:users',
            'id_tipoIdentificacion' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required',
            'telefono_2' => ''

        ];

        $data = $request->validate($rule);

        $user = User::create($data);
        $user->assignRole($request->rol);

        return back()->withFlash('Cliente Creado Existosamente');;

    }

    //ACTUALIZAR CLIENTES
    public function actualizarCliente( Request $request, User $user){

            $data = $request->validate([
                'name' => 'required',
                'apellidos' => 'required',
                'identificacion' => 'required',
                'id_tipoIdentificacion' => 'required',
                'email' => 'required',
                'telefono' => 'required',
                'telefono_2' => ''
            ]);

            $user->update($data);

            return back()->withFlash('Cliente Actualizado');

    }

    //ACTUALIZAR ROLES DEL CLIENTE
    public function updateRolCliente(Request $request, User $user){
        $user->assignRole($request->roles);
        return back()->with('flash','Roles actualizados');
    }

    //TRAMITADORES
    public function indexTramitadores()
    {

        $usuarios = User::role(['Tramitador'])->get();
        return view('admin.tramitadores', compact('usuarios'));
    }

    public function agregarTramitador(Request $request){
        $rule = [

            'name' => 'required|string|max:255',
            'apellidos' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required',
            'telefono_2' => ''

        ];

        $data = $request->validate($rule);
        $user = User::create($data);
        $user->assignRole($request->rol);

        return back()->withFlash('Tramitador Creado Existosamente');
    }

    public function editarTramitador(Request $request, User $user){

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'apellidos' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'telefono_2' => ''
        ]);

        $user->update($data);

        return back()->withFlash('Cambios realizados Correctamente');
    }
    public function eliminarTramitador($id){

        $tramitador = User::findOrFail($id);
        $tramitador->delete();

        return back()->with('eliminar', 'Tramitador Eliminado Correctamente');
    }

}
