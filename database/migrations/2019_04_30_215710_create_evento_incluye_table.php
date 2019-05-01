<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoIncluyeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_incluye', function (Blueprint $table) {
            $table->bigInteger('id_pre')->unsigned();
            $table->bigInteger('id_ev')->unsigned();
            $table->foreign('id_pre')->references('id_pre')->on('presentacion');
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
        Schema::dropIfExists('evento_incluye');
    }
}
