<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('ID_Pedidos');
            $table->decimal('Pago', 10, 2);
            $table->date('Fecha');
            $table->string('DNI_Persona', 50);
            $table->integer('ID_Proveedores')->unsigned();
            $table->integer('ID_Direccion')->unsigned();
            $table->foreign('DNI_Persona')->references('DNI_Persona')->on('personas')->onDelete('cascade');
            $table->foreign('ID_Proveedores')->references('ID_Proveedor')->on('proveedor')->onDelete('cascade');
            $table->foreign('ID_Direccion')->references('ID_Direccion')->on('direccion')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}