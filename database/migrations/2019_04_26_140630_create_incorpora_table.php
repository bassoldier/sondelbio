<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncorporaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incorpora', function (Blueprint $table) {
            $table->bigInteger('id_mer')->unsigned();
            $table->bigInteger('id_p')->unsigned();
            $table->foreign('id_mer')->references('id_mer')->on('merchandising');
            $table->foreign('id_p')->references('id_p')->on('pedido');
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
        Schema::dropIfExists('incorpora');
    }
}
