<?php

use Illuminate\Database\Seeder;
use \App\TipoVehiculo;

class TipoVehiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoVehiculo::truncate();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'MOTOS';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'CAMPEROS Y CAMIONETAS';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'CARGAR O MIXTO';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'OFI ESPECIALES AMBULANCIAS TRANSPORTE VALORES';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'AUTOS FAMILIARES';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'VEHICULOS CON CAPACIDAD DE 6 O MAS PERSONAS';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'AUTOS DE ALQUILER ENSEÑANZA FUNEBRES TAXIS MICROBUSES';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'BUSES Y BUSETAS';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'SERVICIOS PUBLICO INTERMUNICIPAL';
        $tipoVehiculo->save();
    }

}
