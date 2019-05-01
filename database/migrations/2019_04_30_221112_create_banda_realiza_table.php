<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandaRealizaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banda_realizaza', function (Blueprint $table) {
            $table->bigInteger('id_b')->unsigned();
            $table->bigInteger('id_pre')->unsigned();
            $table->foreign('id_b')->references('id_b')->on('banda');
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
        Schema::dropIfExists('banda_realizaza');
    }
}
