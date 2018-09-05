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
        $tipoDocumento->documento = 'Cédula Ciudadania';
        $tipoDocumento->save();

        $tipoDocumento = new TipoDocumento;
        $tipoDocumento->documento = 'Tarjeta de Identidad';
        $tipoDocumento->save();

        $tipoDocumento = new TipoDocumento;
        $tipoDocumento->documento = 'Cédula de Extranjeria';
        $tipoDocumento->save();

        $tipoDocumento = new TipoDocumento;
        $tipoDocumento->documento = 'Pasaporte';
        $tipoDocumento->save();
    }
}
