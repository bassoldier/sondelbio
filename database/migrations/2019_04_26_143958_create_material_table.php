<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {
            $table->bigIncrements('id_ma');
            $table->date('fecha_ma');
            $table->string('nombre_ma');
            $table->integer('precio_ma');
            $table->string('sello_ma');
            $table->string('genero_ma');
            $table->string('tipo_ma');
            $table->time('duracion_ma');
            $table->integer('cantidad_canciones_ma');
            $table->longText('descripcion_mer');
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
        Schema::dropIfExists('material');
    }
}
