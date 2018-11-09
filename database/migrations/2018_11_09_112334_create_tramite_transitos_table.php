<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTramiteTransitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramite_transitos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa');
            $table->unsignedInteger('id_transito');
            $table->unsignedInteger('id_vehiculo');
            $table->unsignedInteger('id_servicio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tramite_transitos');
    }
}
