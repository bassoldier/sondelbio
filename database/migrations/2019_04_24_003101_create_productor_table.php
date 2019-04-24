<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productor', function (Blueprint $table) {
            $table->bigIncrements('id_pr');
            $table->string('nombre_pr');
            $table->string('apellido_pr');
            $table->string('nombre_productora_pr');
            $table->string('ndireccion_productora_pr');
            $table->string('correo_pr')->unique();
            $table->string('telefono_pr');
            $table->longText('descripcion_pr');
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
        Schema::dropIfExists('productor');
    }
}
