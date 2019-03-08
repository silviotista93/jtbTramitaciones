<?php

use Illuminate\Database\Seeder;
use  \App\Escuela;

class PrecioEscuelaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escuela::truncate();

        $escuela = new Escuela;
        $escuela->valor = 50000;
        $escuela->save();
    }
}
