<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LineaPedidosSeeder extends Seeder
{
    public function run()
    {
        DB::table('lineapedidos')->insert([
            ['Numero_Pedido' => 26, 'ID_Producto' => 12, 'Cantidad' => 1],
            ['Numero_Pedido' => 20, 'ID_Producto' => 20, 'Cantidad' => 2],
            ['Numero_Pedido' => 1, 'ID_Producto' => 22, 'Cantidad' => 3],
            ['Numero_Pedido' => 16, 'ID_Producto' => 22, 'Cantidad' => 4],
            ['Numero_Pedido' => 28, 'ID_Producto' => 40, 'Cantidad' => 5],
            ['Numero_Pedido' => 14, 'ID_Producto' => 23, 'Cantidad' => 6],
            ['Numero_Pedido' => 12, 'ID_Producto' => 24, 'Cantidad' => 7],
            ['Numero_Pedido' => 6, 'ID_Producto' => 17, 'Cantidad' => 8],
            ['Numero_Pedido' => 34, 'ID_Producto' => 49, 'Cantidad' => 9],
            ['Numero_Pedido' => 13, 'ID_Producto' => 19, 'Cantidad' => 10],
            ['Numero_Pedido' => 25, 'ID_Producto' => 41, 'Cantidad' => 11],
            ['Numero_Pedido' => 2, 'ID_Producto' => 24, 'Cantidad' => 12],
            ['Numero_Pedido' => 20, 'ID_Producto' => 16, 'Cantidad' => 13],
            ['Numero_Pedido' => 1, 'ID_Producto' => 13, 'Cantidad' => 14],
            ['Numero_Pedido' => 4, 'ID_Producto' => 9, 'Cantidad' => 15],
            ['Numero_Pedido' => 13, 'ID_Producto' => 39, 'Cantidad' => 16],
            ['Numero_Pedido' => 37, 'ID_Producto' => 34, 'Cantidad' => 17],
            ['Numero_Pedido' => 4, 'ID_Producto' => 34, 'Cantidad' => 18],
            ['Numero_Pedido' => 18, 'ID_Producto' => 40, 'Cantidad' => 19],
            ['Numero_Pedido' => 37, 'ID_Producto' => 35, 'Cantidad' => 20],
            ['Numero_Pedido' => 35, 'ID_Producto' => 23, 'Cantidad' => 21],
            ['Numero_Pedido' => 10, 'ID_Producto' => 5, 'Cantidad' => 22],
            ['Numero_Pedido' => 22, 'ID_Producto' => 21, 'Cantidad' => 23],
            ['Numero_Pedido' => 17, 'ID_Producto' => 50, 'Cantidad' => 24],
            ['Numero_Pedido' => 12, 'ID_Producto' => 18, 'Cantidad' => 25],
            ['Numero_Pedido' => 23, 'ID_Producto' => 6, 'Cantidad' => 26],
            ['Numero_Pedido' => 6, 'ID_Producto' => 30, 'Cantidad' => 27],
            ['Numero_Pedido' => 17, 'ID_Producto' => 29, 'Cantidad' => 28],
            ['Numero_Pedido' => 22, 'ID_Producto' => 29, 'Cantidad' => 29],
            ['Numero_Pedido' => 7, 'ID_Producto' => 12, 'Cantidad' => 30],
            ['Numero_Pedido' => 9, 'ID_Producto' => 5, 'Cantidad' => 31],
            ['Numero_Pedido' => 20, 'ID_Producto' => 33, 'Cantidad' => 32],
            ['Numero_Pedido' => 24, 'ID_Producto' => 46, 'Cantidad' => 33],
            ['Numero_Pedido' => 40, 'ID_Producto' => 33, 'Cantidad' => 34],
            ['Numero_Pedido' => 24, 'ID_Producto' => 2, 'Cantidad' => 35],
        ]);
    }
}
