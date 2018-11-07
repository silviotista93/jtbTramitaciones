<?php

use Illuminate\Database\Seeder;
use \App\Transito;

class TransitosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transito::truncate();

        $transito = new Transito;
        $transito->ciudad = 'Popayán';
        $transito->save();

        $transito = new Transito;
        $transito->ciudad = 'Piendamo';
        $transito->save();

        $transito = new Transito;
        $transito->ciudad = 'El Tambo';
        $transito->save();

        $transito = new Transito;
        $transito->ciudad = 'Timbio';
        $transito->save();

        $transito = new Transito;
        $transito->ciudad = 'Cali';
        $transito->save();

        $transito = new Transito;
        $transito->ciudad = 'Pasto';
        $transito->save();

        $transito = new Transito;
        $transito->ciudad = 'Bogota';
        $transito->save();

        $transito = new Transito;
        $transito->ciudad = 'Neiva';
        $transito->save();

        $transito = new Transito;
        $transito->ciudad = 'Medellin';
        $transito->save();

        $transito = new Transito;
        $transito->ciudad = 'Piendamo';
        $transito->save();
    }
}
