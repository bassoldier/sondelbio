<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicoRecibeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musico_recibe', function (Blueprint $table) {
            $table->bigInteger('id_m')->unsigned();
            $table->bigInteger('id_pa')->unsigned();
            $table->foreign('id_m')->references('id_m')->on('musico');
            $table->foreign('id_pa')->references('id_pa')->on('pago');
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
        Schema::dropIfExists('musico_recibe');
    }
}
