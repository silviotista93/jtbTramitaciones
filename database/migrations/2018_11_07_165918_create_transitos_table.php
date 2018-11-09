<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transitos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departamento');
            $table->mediumText('telefono')->nullable();
            $table->mediumText('telefono_2')->nullable();
            $table->string('email')->nullable();
            $table->mediumText('direccion')->nullable();
            $table->string('ciudad');
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
        Schema::dropIfExists('transitos');
    }
}
