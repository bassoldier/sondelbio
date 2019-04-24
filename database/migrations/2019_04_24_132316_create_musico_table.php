<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musico', function (Blueprint $table) {
            $table->bigIncrements('id_m');
            $table->string('nombre_m');
            $table->string('apellido_m');
            $table->string('direccion_m');
            $table->date('fecha_nac_m');    
            $table->string('correo_m')->unique();
            $table->string('telefono_m');
            $table->longText('descripcion_m')->nullable();
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
        Schema::dropIfExists('musico');
    }
}
