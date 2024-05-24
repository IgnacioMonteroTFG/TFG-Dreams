<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->string('DNI_Persona', 50)->primary();
            $table->string('Apellido1', 50)->nullable();
            $table->string('Apellido2', 50)->nullable();
            $table->string('Nombre', 50);
            $table->string('Telefono', 20)->nullable();
            $table->string('Email', 100)->nullable();
            $table->enum('Rol', ['Admin', 'Cliente']);
            $table->string('User', 50)->nullable();
            $table->string('Password', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
}