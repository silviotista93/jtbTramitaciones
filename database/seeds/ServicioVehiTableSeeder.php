<?php

use Illuminate\Database\Seeder;
use \App\ServicioVehicular;

class ServicioVehiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServicioVehicular::truncate();

        $servicio = new ServicioVehicular;
        $servicio->servicio = 'PARTICULAR';
        $servicio->save();

        $servicio = new ServicioVehicular;
        $servicio->servicio = 'PÚBLICO';
        $servicio->save();
    }
}
