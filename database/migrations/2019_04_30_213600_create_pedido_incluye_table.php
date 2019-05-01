<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoIncluyeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_incluye', function (Blueprint $table) {
            $table->bigInteger('id_p')->unsigned();
            $table->bigInteger('id_ma')->unsigned();
            $table->foreign('id_p')->references('id_p')->on('pedido');
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
        Schema::dropIfExists('pedido_incluye');
    }
}
