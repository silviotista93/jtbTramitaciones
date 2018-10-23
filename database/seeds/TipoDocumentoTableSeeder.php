<?php

use Illuminate\Database\Seeder;
use \App\TipoDocumento;

class TipoDocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoDocumento::truncate();

        $tipoDocumento = new TipoDocumento;
        $tipoDocumento->documento = 'CÉDULA DE CIUDADANIA';
        $tipoDocumento->save();

        $tipoDocumento = new TipoDocumento;
        $tipoDocumento->documento = 'TARJETA DE IDENTIDAD';
        $tipoDocumento->save();

        $tipoDocumento = new TipoDocumento;
        $tipoDocumento->documento = 'CÉDULA DE EXTRANJERIA';
        $tipoDocumento->save();

        $tipoDocumento = new TipoDocumento;
        $tipoDocumento->documento = 'PASAPORTE';
        $tipoDocumento->save();
    }
}
