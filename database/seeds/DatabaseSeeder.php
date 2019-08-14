<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UserTableSeeder::class);
        $this->call(TramitesTableSeeder::class);
        $this->call(TipoVehiculoTableSeeder::class);
        $this->call(TipoDocumentoTableSeeder::class);
        $this->call(SeguroTableSeeder::class);
        $this->call(TipoTraTransitoTableSeeder::class);
        $this->call(TipoLicenciaTableSeeder::class);
        $this->call(LicenciaTableSeeder::class);
        $this->call(PrecioMedicoTableSeeder::class);
        $this->call(PrecioEscuelaTableSeeder::class);
        $this->call(TransitosTableSeeder::class);
        $this->call(ServicioVehiTableSeeder::class);
        $this->call(PrecioRecibosTableSeeder::class);
        $this->call(TipoGastoTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        factory(\App\User::class, 1)->create([
            'name' => 'John Bolaños',
            'email' => 'john@gmail.com',

        ])->each(function (\App\User $u) {
            $u->assignRole('3');

            $categorias = \App\Licencia::all();
            foreach ($categorias as $categoria) {
                factory(\App\CategoriaTramitador::class, 1)->create(['id_categoria' => $categoria->id, 'id_usuario' => $u->id]);
            }
            $medicos = \App\Medico::all();
            foreach ($medicos as $medico) {
                factory(\App\MedicoTramitador::class, 1)->create(['id_medico' => $medico->id, 'id_usuario' => $u->id]);
            }
        });


        factory(\App\User::class, 20)->create()
            ->each(function (\App\User $u) {
                $u->assignRole('3');

                $categorias = \App\Licencia::all();
                foreach ($categorias as $categoria) {
                    factory(\App\CategoriaTramitador::class, 1)->create(['id_categoria' => $categoria->id, 'id_usuario' => $u->id]);
                }
                $medicos = \App\Medico::all();
                foreach ($medicos as $medico) {
                    factory(\App\MedicoTramitador::class, 1)->create(['id_medico' => $medico->id, 'id_usuario' => $u->id]);
                }
            });
        /*=============================================
             CREANDO CLIENTES
         =============================================*/
        factory(\App\User::class, 100)->create()
            ->each(function (\App\User $u) {
                $u->assignRole('4');
            });


    }

}
