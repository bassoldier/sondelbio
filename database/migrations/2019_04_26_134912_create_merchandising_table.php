<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchandisingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchandising', function (Blueprint $table) {
            $table->bigIncrements('id_mer');
            $table->string('nombre_mer');
            $table->longText('descripcion_mer');
            $table->integer('precio_mer');
            $table->integer('cantidad_mer');
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
        Schema::dropIfExists('merchandising');
    }
}
