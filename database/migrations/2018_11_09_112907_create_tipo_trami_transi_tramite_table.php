<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoTramiTransiTramiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoTramiTransi_tramite', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_tramite');
            $table->unsignedInteger('id_tipoTramTrans');
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
        Schema::dropIfExists('tipoTramiTransi_tramite');
    }
}
