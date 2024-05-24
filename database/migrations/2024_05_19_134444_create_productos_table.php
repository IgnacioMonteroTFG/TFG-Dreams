<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('ID_Producto');
            $table->string('Nombre', 100);
            $table->decimal('Precio', 10, 2);
            $table->string('Imagen', 255)->nullable();
            $table->text('Descripcion')->nullable();
            $table->string('N_Marca', 100)->nullable();
            $table->string('N_Categoria', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
