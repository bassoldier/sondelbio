<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnlazaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enlaza', function (Blueprint $table) {
            $table->bigInteger('id_pr')->unsigned();
            $table->bigInteger('id_b')->unsigned();
            $table->foreign('id_pr')->references('id_pr')->on('productor');
            $table->foreign('id_b')->references('id_b')->on('banda');
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
        Schema::dropIfExists('enlaza');
    }
}
