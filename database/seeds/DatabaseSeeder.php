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
       // $this->call(TramitesTableSeeder::class);
       // $this->call(TipoVehiculoTableSeeder::class);
       // $this->call(TipoDocumentoTableSeeder::class);
       // $this->call(SeguroTableSeeder::class);
       // $this->call(TipoTraTransitoTableSeeder::class);
       // $this->call(LicenciaTableSeeder::class);
       // $this->call(PrecioMedicoTableSeeder::class);
       // $this->call(PrecioEscuelaTableSeeder::class);
       // $this->call(TransitosTableSeeder::class);
       // $this->call(ServicioVehiTableSeeder::class);
       // $this->call(PrecioRecibosTableSeeder::class);
       // $this->call(TipoGastoTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        factory(\App\User::class, 20)->create()
            ->each(function (\App\User $u){
               $u->assignRole('3');
            });
    }

}
