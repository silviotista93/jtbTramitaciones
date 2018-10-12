<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumenTramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumen_tramites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('metodo_pago');
            $table->double('total');
            $table->unsignedInteger('idTramitador')->nullable();
            $table->unsignedInteger('idUsuario');
            $table->unsignedInteger('idVendedor');
            $table->unsignedInteger('id_tipoTramite');
            $table->unsignedInteger('descuento');
            $table->enum('estado',['Recibido','En tramite','Entregado'])->default('Recibido');
            $table->enum('examen_medico',['Realizado','Pendiente'])->default('Pendiente');
            $table->enum('escuela_conduccion',['Realizado','Pendiente'])->default('Pendiente');
            $table->enum('derechos_transito',['Realizado','Pendiente'])->default('Pendiente');
            $table->longText('nota')->nullable();
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
        Schema::dropIfExists('resumen_tramites');
    }
}
