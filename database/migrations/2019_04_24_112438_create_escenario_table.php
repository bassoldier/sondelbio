<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscenarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escenario', function (Blueprint $table) {
            $table->bigIncrements('id_e');
            $table->string('nombre_e');
            $table->string('direccion_e');
            $table->longText('descripcion_e');
            $table->string('correo_e')->unique();
            $table->string('telefono_e');
            $table->string('tipo_e');
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
        Schema::dropIfExists('escenario');
    }
}
