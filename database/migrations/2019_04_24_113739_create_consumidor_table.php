<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidor', function (Blueprint $table) {
            $table->bigIncrements('id_c');
            $table->string('nombre_c');
            $table->string('apellido_c');
            $table->date('fecha_nac_c');
            $table->string('direccion_c');
            $table->string('correo_c')->unique();
            $table->string('telefono_c');
            $table->longText('descripcion_c')->nullable();
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
        Schema::dropIfExists('consumidor');
    }
}
