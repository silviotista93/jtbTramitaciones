<?php

use Illuminate\Database\Seeder;
use \App\Recibo;

class PrecioRecibosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recibo::truncate();

        $recibo = new Recibo;
        $recibo->precio_unico = 72000;
        $recibo->precio_doble = 144000;
        $recibo->id_transito = 1;
        $recibo->save();

        $recibo = new Recibo;
        $recibo->precio_unico = 72000;
        $recibo->precio_doble = 115000;
        $recibo->id_transito = 2;
        $recibo->save();
    }
}
