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
        $tipo_gasto->tipo_gasto = "Doña Pastora";
        $tipo_gasto->save();

        $tipo_gasto = new TipoGasto;
        $tipo_gasto->tipo_gasto = "Gasolina Motos";
        $tipo_gasto->save();

        $tipo_gasto = new TipoGasto;
        $tipo_gasto->tipo_gasto = "Gasolina Carros";
        $tipo_gasto->save();

        $tipo_gasto = new TipoGasto;
        $tipo_gasto->tipo_gasto = "Serivicios Publicos";
        $tipo_gasto->save();
    }
}
