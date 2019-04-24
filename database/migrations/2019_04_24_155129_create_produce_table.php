<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produce', function (Blueprint $table) {
            $table->bigInteger('id_pr')->unsigned();
            $table->bigInteger('id_ev')->unsigned();
            $table->foreign('id_pr')->references('id_pr')->on('productor');
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
        Schema::dropIfExists('produce');
    }
}
