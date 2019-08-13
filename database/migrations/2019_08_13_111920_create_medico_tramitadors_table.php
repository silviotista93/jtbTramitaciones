<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicoTramitadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico_tramitadors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_categoria');
            $table->unsignedInteger('id_medico');
            $table->float('porcentaje_unico');
            $table->float('porcentaje_doble');
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
        Schema::dropIfExists('medico_tramitadors');
    }
}
