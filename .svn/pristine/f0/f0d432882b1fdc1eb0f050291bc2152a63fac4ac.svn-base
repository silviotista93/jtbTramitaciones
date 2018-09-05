<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonos', function (Blueprint $table) {
            $table->increments('id');
            $table->double('valor_abono');
            $table->double('saldo');
            $table->enum('estado',['Cancelado','Debe'])->default('Cancelado');
            $table->string('metodo_pago')->nullable();
            $table->longText('nota')->nullable();
            $table->unsignedInteger('resumen_tramite_id');
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
        Schema::dropIfExists('abonos');
    }
}
