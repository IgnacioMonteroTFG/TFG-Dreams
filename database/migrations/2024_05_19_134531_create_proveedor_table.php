<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorTable extends Migration
{
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments('ID_Proveedor');
            $table->string('Nombre', 100);
            $table->string('Direccion', 255);
            $table->string('Ciudad', 50);
            $table->string('CodigoPostal', 10)->nullable();
            $table->string('Pais', 50)->nullable();
            $table->string('Telefono', 20)->nullable();
            $table->string('Fax', 20)->nullable();
            $table->string('Email', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proveedor');
    }
}
