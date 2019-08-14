<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaTramitadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_tramitadors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_categoria');
            $table->unsignedInteger('id_usuario');
            $table->float('porcentaje_curso')->nullable();;
            $table->float('porcentaje_sincurso')->nullable();;
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
        Schema::dropIfExists('categoria_tramitadors');
    }
}
