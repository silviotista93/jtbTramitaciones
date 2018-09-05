<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumenTramiteSeguroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumenTramite_seguro', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_seguro');
            $table->unsignedInteger('id_resumen_tramite');
            $table->unsignedInteger('cantidad');
            $table->double('precio_cantidad');
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
        Schema::dropIfExists('resumenTramite_seguro');
    }
}
