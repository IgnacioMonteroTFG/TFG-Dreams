<?php

use App\Models\Producto;

// Obtener el ID del producto de la URL
$producto_id = $_GET['producto_id'];

// Obtener el producto de la base de datos
$producto = Producto::find($producto_id);

// Devolver el producto como JSON
echo json_encode(['producto' => $producto]);
