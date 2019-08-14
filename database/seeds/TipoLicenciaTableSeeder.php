<?php

use Illuminate\Database\Seeder;
use \App\TipoLicencia;

class TipoLicenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoLicencia::truncate();

        $tipo_licencia = new TipoLicencia;
        $tipo_licencia->tipo_licencia = 'PRIMERA VEZ';
        $tipo_licencia->save();

        $tipo_licencia = new TipoLicencia;
        $tipo_licencia->tipo_licencia = 'REFRENDACIÓN';
        $tipo_licencia->save();

        $tipo_licencia = new TipoLicencia;
        $tipo_licencia->tipo_licencia = 'RECATEGORIZAR HACIA ARRIBA';
        $tipo_licencia->save();

        $tipo_licencia = new TipoLicencia;
        $tipo_licencia->tipo_licencia = 'RECATEGORIZAR HACIA ABAJO';
        $tipo_licencia->save();
    }
}
