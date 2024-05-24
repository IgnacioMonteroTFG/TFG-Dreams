<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionTable extends Migration
{
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->increments('ID_Direccion');
            $table->string('DNI_Persona', 50);
            $table->string('Ciudad', 50);
            $table->string('Direccion', 255);
            $table->foreign('DNI_Persona')->references('DNI_Persona')->on('personas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('direccion');
    }
}

