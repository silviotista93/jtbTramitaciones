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
        $tipoVehiculo->nombre = 'Motos';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'Camperos y Camionetas';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'Carga o Mixto';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'Ofi Especiales Ambulancias Transporte Valores';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'Autos Familiares';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'Vehiculos con capacidad de 6 o mas personas';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'Autos de alquiler enseñanza funebres taxis microbuses';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'Buses y Busetas';
        $tipoVehiculo->save();

        $tipoVehiculo = new TipoVehiculo;
        $tipoVehiculo->nombre = 'Servicio publico intermunicipal';
        $tipoVehiculo->save();
    }

}
