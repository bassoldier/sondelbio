<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crea', function (Blueprint $table) {
            $table->bigInteger('id_e')->unsigned();
            $table->bigInteger('id_ev')->unsigned();
            $table->foreign('id_e')->references('id_e')->on('escenario');
            $table->foreign('id_ev')->references('id_ev')->on('evento');
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
        Schema::dropIfExists('crea');
    }
}
