<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donacion', function (Blueprint $table) {
            $table->bigIncrements('id_d');
            $table->integer('monto_d');
            $table->datetime('fecha_hora_d');
            $table->longtext('descripcion_d');
            $table->bigInteger('id_ma')->unsigned();
            $table->foreign('id_ma')->references('id_ma')->on('material');
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
        Schema::dropIfExists('donacion');
    }
}
