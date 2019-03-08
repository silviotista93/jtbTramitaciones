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
        $medico->valor = 70000;
        $medico->save();
    }
}
