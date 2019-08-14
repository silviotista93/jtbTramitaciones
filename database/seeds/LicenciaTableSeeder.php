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
        $licencia->precio_curso = 640000;
        $licencia->precio_sincurso = 470000;
        $licencia->id_tipo_tramite = 2;
        $licencia->precio_descuento_curso = 600000;
        $licencia->precio_descuento_sincurso = 400000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'B1';
        $licencia->precio_curso = 840000;
        $licencia->precio_sincurso = 700000;
        $licencia->id_tipo_tramite = 2;
        $licencia->precio_descuento_curso = 800000;
        $licencia->precio_descuento_sincurso = 650000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C1';
        $licencia->precio_curso = 1040000;
        $licencia->precio_sincurso = 850000;
        $licencia->id_tipo_tramite = 2;
        $licencia->precio_descuento_curso = 900000;
        $licencia->precio_descuento_sincurso = 800000;
        $licencia->save();
        $licencia = new Licencia;

        $licencia->categoria = 'C2';
        $licencia->precio_curso = 1100000;
        $licencia->precio_sincurso = 850000;
        $licencia->id_tipo_tramite = 2;
        $licencia->precio_descuento_curso = 1000000;
        $licencia->precio_descuento_sincurso = 800000;
        $licencia->save();

        $licencia = new Licencia;

        $licencia->categoria = 'C3';
        $licencia->precio_curso = 0;
        $licencia->precio_sincurso = 1400000;
        $licencia->id_tipo_tramite = 2;
        $licencia->precio_descuento_curso = 0;
        $licencia->precio_descuento_sincurso = 1000000;
        $licencia->save();

    }
}
