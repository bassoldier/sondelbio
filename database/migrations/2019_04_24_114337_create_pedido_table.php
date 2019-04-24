<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->bigIncrements('id_p');
            $table->integer('cantidad_p');
            $table->datetime('fecha_hora_p');
            $table->integer('total_p');
            $table->string('direccion_envío_p');
            $table->bigInteger('id_c')->unsigned();
            $table->foreign('id_c')->references('id_c')->on('consumidor');
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
        Schema::dropIfExists('pedido');
    }
}
