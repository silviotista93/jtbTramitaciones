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
        $recibo->valor = 70000;
        $recibo->save();
    }
}
