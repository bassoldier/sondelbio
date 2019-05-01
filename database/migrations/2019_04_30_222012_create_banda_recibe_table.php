<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandaRecibeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banda_recibe', function (Blueprint $table) {
            $table->bigInteger('id_b')->unsigned();
            $table->bigInteger('id_pa')->unsigned();
            $table->foreign('id_b')->references('id_b')->on('banda');
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
        Schema::dropIfExists('banda_recibe');
    }
}
