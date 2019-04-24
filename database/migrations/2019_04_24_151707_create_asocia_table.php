<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsociaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asocia', function (Blueprint $table) {
            $table->bigInteger('id_pr')->unsigned();
            $table->bigInteger('id_m')->unsigned();
            $table->foreign('id_pr')->references('id_pr')->on('productor');
            $table->foreign('id_m')->references('id_m')->on('musico');
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
        Schema::dropIfExists('asocia');
    }
}
