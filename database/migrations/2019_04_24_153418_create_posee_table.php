<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoseeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posee', function (Blueprint $table) {
            $table->bigInteger('id_e')->unsigned();
            $table->bigInteger('id_pr')->unsigned();
            $table->foreign('id_e')->references('id_e')->on('escenario');
            $table->foreign('id_pr')->references('id_pr')->on('productor');
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
        Schema::dropIfExists('posee');
    }
}
