<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductorRecibeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productor_recibe', function (Blueprint $table) {
            $table->bigInteger('id_pr')->unsigned();
            $table->bigInteger('id_pa')->unsigned();
            $table->foreign('id_pr')->references('id_pr')->on('productor');
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
        Schema::dropIfExists('productor_recibe');
    }
}
