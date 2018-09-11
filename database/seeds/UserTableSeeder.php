<?php

use Illuminate\Database\Seeder;
use \Spatie\Permission\Models\Role;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        User::truncate();

        $adminRole = Role::create(['name' => 'Administrador']);
        $secreRole = Role::create(['name' => 'Secretari@']);
        $tramitadorRole = Role::create(['name' => 'Tramitador']);
        $clienteRole = Role::create(['name' => 'Cliente']);

        $admin = new User;
        $admin->identificacion = '1061759221';
        $admin->id_tipoIdentificacion = 1;
        $admin->name = 'Silvio Mauricio';
        $admin->apellidos = 'Gutierrez Quiñones';
        $admin->email = 'silviotista93@gmail.com';
        $admin->password = bcrypt('cantare.de.2310');
        $admin->telefono = '318564382';
        $admin->foto = '';
        $admin->save();
        $admin->assignRole($adminRole);

    }
}
