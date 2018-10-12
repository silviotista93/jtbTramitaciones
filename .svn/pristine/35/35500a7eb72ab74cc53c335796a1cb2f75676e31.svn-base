<?php

use Illuminate\Database\Seeder;
Use \App\Tramite;

class TramitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Tramite::truncate();

        $tramites = new Tramite;
        $tramites->nombre = 'Seguro';
        $tramites->save();

        $tramites = new Tramite;
        $tramites->nombre = 'Licencia';
        $tramites->save();

        $tramites = new Tramite;
        $tramites->nombre = 'Matricula';
        $tramites->save();
    }
}
