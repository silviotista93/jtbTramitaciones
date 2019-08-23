<?php

use Illuminate\Database\Seeder;
use \App\Medico;

class PrecioMedicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medico::truncate();

        $medico = new Medico;
        $medico->precio_unico = 140000;
        $medico->precio_doble = 194000;
        $medico->save();
    }
}
