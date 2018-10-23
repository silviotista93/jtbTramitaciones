<?php

use Illuminate\Database\Seeder;
use App\Licencia;
class LicenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Licencia::truncate();

        //PRECIOS PUBLICO

        //Primera Vez...............
        $licencia = new Licencia;

        $licencia->categoria = 'A2';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'PRIMERA VEZ';
        $licencia->precio = 750000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 700000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'B1';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'PRIMERA VEZ';
        $licencia->precio = 1100000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 900000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C1';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'PRIMERA VEZ';
        $licencia->precio = 1150000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 950000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C2';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'PRIMERA VEZ';
        $licencia->precio = 1200000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 1100000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C3';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'PRIMERA VEZ';
        $licencia->precio = 1500000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 1400000;
        $licencia->save();

        //Refrendacion...............

        $licencia = new Licencia;

        $licencia->categoria = 'A2';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'REFRENDACIÓN';
        $licencia->precio = 200000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 170000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'B1';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'REFRENDACIÓN';
        $licencia->precio = 210000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 180000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C1';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'REFRENDACIÓN';
        $licencia->precio = 220000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 200000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C2';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'REFRENDACIÓN';
        $licencia->precio = 230000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 210000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C3';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'REFRENDACIÓN';
        $licencia->precio = 230000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 210000;
        $licencia->save();

        //Recategorizar...............

        $licencia = new Licencia;

        $licencia->categoria = 'A2';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'RECATEGORIZAR';
        $licencia->precio = 300000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 200000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'B1';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'RECATEGORIZAR';
        $licencia->precio = 250000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 230000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C1';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'RECATEGORIZAR';
        $licencia->precio = 280000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 250000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C2';
        $licencia->tipo_precio = 'PUBLICO';
        $licencia->tipo_licencia = 'RECATEGORIZAR';
        $licencia->precio = 290000;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 260000;
        $licencia->save();

        //PRECIOS TRAMITADOR

        //Primera Vez...............
        $licencia = new Licencia;

        $licencia->categoria = 'A2';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'PRIMERA VEZ';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'B1';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'PRIMERA VEZ';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C1';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'PRIMERA VEZ';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C2';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'PRIMERA VEZ';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C3';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'PRIMERA VEZ';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        //Refrendacion...............

        $licencia = new Licencia;

        $licencia->categoria = 'A2';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'REFRENDACIÓN';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'B1';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'REFRENDACIÓN';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C1';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'REFRENDACIÓN';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C2';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'REFRENDACIÓN';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C3';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'REFRENDACIÓN';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        //Recategorizar...............

        $licencia = new Licencia;

        $licencia->categoria = 'A2';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'RECATEGORIZAR';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'B1';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'RECATEGORIZAR';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C1';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'RECATEGORIZAR';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C2';
        $licencia->tipo_precio = 'TRAMITADOR';
        $licencia->tipo_licencia = 'RECATEGORIZAR';
        $licencia->precio = 0;
        $licencia->id_tipo_tramite = 2;
        $licencia->descuento = 0;
        $licencia->save();


    }
}
