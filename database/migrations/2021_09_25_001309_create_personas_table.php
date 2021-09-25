<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("apellidos");
            $table->string("correo");
            $table->string("cedula");
            $table->date("fecha_de_inicio");
            $table->bigInteger("dias_disponibles");
            $table->string("contrasenna");
            $table->tinyInteger("activo");
            $table->bigInteger("id_departamento")->unsigned();
            $table->foreign("id_departamento")->references("id")->on("departamento");
            $table->bigInteger("id_rol")->unsigned();
            $table->foreign("id_rol")->references("id")->on("rol");
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
        Schema::dropIfExists('personas');
    }
}
