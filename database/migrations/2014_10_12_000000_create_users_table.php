<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificacion')->unique()->nullable();
            $table->integer('id_tipoIdentificacion')->nullable();
            $table->string('name');
            $table->string('apellidos');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->mediumText('direccion')->nullable();
            $table->string('telefono');
            $table->string('telefono_2')->nullable();
            $table->string('foto')->nullable();
            $table->enum('estado',[
                \App\User::ACTIVE,
                \App\User::INACTIVE])->default(\App\User::ACTIVE);
            $table->enum('genero',["masculino","femenino"])->nullable();
            $table->timestamp('fecha_nacimiento')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
