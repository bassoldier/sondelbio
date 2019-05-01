<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicoRealizaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musico_realiza', function (Blueprint $table) {
            $table->bigInteger('id_m')->unsigned();
            $table->bigInteger('id_pre')->unsigned();
            $table->foreign('id_m')->references('id_m')->on('musico');
            $table->foreign('id_pre')->references('id_pre')->on('presentacion');
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
        Schema::dropIfExists('musico_realiza');
    }
}
