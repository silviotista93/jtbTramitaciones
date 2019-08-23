<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumenLicenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumen_licencia', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_categoria_tramitador');
            $table->unsignedInteger('id_resumen_tramite');
            $table->unsignedInteger('id_tipo_licencia');
            $table->unsignedInteger('validar_curso')->default(0);
            $table->unsignedInteger('validar_examen')->default(0);
            $table->unsignedInteger('validar_recibo')->default(0);
            $table->unsignedInteger('cantidad');
            $table->double('precio_venta');
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
        Schema::dropIfExists('resumen_licencia');
    }
}
