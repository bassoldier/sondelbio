<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banda', function (Blueprint $table) {
            $table->bigIncrements('id_b');
            $table->string('nombre_b');
            $table->date('fecha_creacion_b');
            $table->string('correo_b')->unique();
            $table->string('telefono_b');
            $table->longText('descripcion_b');
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
        Schema::dropIfExists('banda');
    }
}
