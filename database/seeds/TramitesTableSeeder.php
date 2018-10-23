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
        $tramites->nombre = 'SEGURO';
        $tramites->save();

        $tramites = new Tramite;
        $tramites->nombre = 'LICENCIA';
        $tramites->save();

        $tramites = new Tramite;
        $tramites->nombre = 'MATRICULA';
        $tramites->save();
    }
}
