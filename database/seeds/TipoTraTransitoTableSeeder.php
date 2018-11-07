<?php

use Illuminate\Database\Seeder;
use \App\TipoTramTransito;

class TipoTraTransitoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoTramTransito::truncate();

        //Tramites de transito
        $trTransito = new  TipoTramTransito;
        $trTransito->nombre = 'Matricula Inicial';
        $trTransito->tramite_id = 3;
        $trTransito->save();

        $trTransito = new  TipoTramTransito;
        $trTransito->nombre = 'Traspaso';
        $trTransito->tramite_id = 3;
        $trTransito->save();

        $trTransito = new  TipoTramTransito;
        $trTransito->nombre = 'Traslado';
        $trTransito->tramite_id = 3;
        $trTransito->save();

        $trTransito = new  TipoTramTransito;
        $trTransito->nombre = 'Radicacion de Cuenta';
        $trTransito->tramite_id = 3;
        $trTransito->save();

        $trTransito = new  TipoTramTransito;
        $trTransito->nombre = 'Certificado de Tradición';
        $trTransito->tramite_id = 3;
        $trTransito->save();

        $trTransito = new  TipoTramTransito;
        $trTransito->nombre = 'Prenda';
        $trTransito->tramite_id = 3;
        $trTransito->save();

        $trTransito = new  TipoTramTransito;
        $trTransito->nombre = 'Duplicado LT';
        $trTransito->tramite_id = 3;
        $trTransito->save();

        $trTransito = new  TipoTramTransito;
        $trTransito->nombre = 'Tarjeta de Propiedad';
        $trTransito->tramite_id = 3;
        $trTransito->save();

    }
}
