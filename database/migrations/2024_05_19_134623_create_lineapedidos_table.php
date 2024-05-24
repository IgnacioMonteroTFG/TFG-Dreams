<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaPedidosTable extends Migration
{
    public function up()
    {
        Schema::create('lineapedidos', function (Blueprint $table) {
            $table->integer('Numero_Pedido')->unsigned();
            $table->integer('ID_Producto')->unsigned();
            $table->integer('Cantidad');
            $table->primary(['Numero_Pedido', 'ID_Producto']);
            $table->foreign('Numero_Pedido')->references('ID_Pedidos')->on('pedidos')->onDelete('cascade');
            $table->foreign('ID_Producto')->references('ID_Producto')->on('productos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lineapedidos');
    }
}
