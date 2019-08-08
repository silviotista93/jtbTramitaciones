<?php

use Illuminate\Database\Seeder;
use \App\TipoGasto;

class TipoGastoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoGasto::truncate();

        $tipo_gasto = new TipoGasto;
        $tipo_gasto->tipo_gasto = "Comisiones";
        $tipo_gasto->save();
    }
}
