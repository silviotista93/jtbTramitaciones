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
        $this->call(LicenciaTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
