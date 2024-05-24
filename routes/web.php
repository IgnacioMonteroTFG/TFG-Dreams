<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CosmeticaController;
use App\Http\Controllers\PeluqueriaController;
use App\Http\Controllers\AdminProductosController;
use App\Http\Controllers\AdminPedidosController;
use App\Http\Controllers\AdminPersonasController;
use App\Http\Controllers\AuthController;


// Página para la zona principal
Route::get('/', function () {
    return view('layout');
});

// Página para la zona de inicio de sesión o registro de usuario.
Route::get('/usuario', function () {
    return view('user');
});

// Página para el error 404
Route::fallback(function () {
    return view('errors.404');
});

// Página para la parte de todos los productos de cosmetica.
Route::get('/cosmetica', function () {
    return view('cosmetica');
});

// Página para la parte de todos los productos de peluquería.
Route::get('/peluqueria', function () {
    return view('/peluqueria/index');
});

// Página para la parte de nosotros.
Route::get('/nosotros', function () {
    return view('nosotros');
});

// Página para la parte de contacto.
Route::get('/contacto', function () {
    return view('contacto');
});

// Página para la parte de descripción del producto
Route::get('/descripcion', function () {
    return view('descripcionProductos');
});

// Página para la parte del carrito
Route::get('/carrito', function () {
    return view('carrito');
});

// Página para la parte del administrador
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/login', function () {
    return view('admin.login');
});

// Ruta para probar la zona de administrador-Productos.
Route::get('/admin/Productos', function () {
    return view('admin.productos.index');
});

// Ruta para probar la zona de administrador-Usuarios.
Route::get('/admin/Usuarios', function () {
    return view('admin.usuarios.index');
});


Route::get('/peluqueria', [PeluqueriaController::class, 'index']);
Route::get('/peluqueria/{categoria}', [PeluqueriaController::class, 'categoria']);
Route::get('/cosmetica', [CosmeticaController::class, 'index']);
Route::get('/cosmetica/{categoria}', [CosmeticaController::class, 'categoria']);

Route::get('/admin/productos', [AdminProductosController::class, 'index'])->name('productos.index');
Route::put('/admin/productos', [AdminProductosController::class, 'store'])->name('productos.store');
Route::post('/admin/productos/{id}', [AdminProductosController::class, 'update'])->name('update.productos');
Route::delete('/admin/destroy/{id}', [AdminProductosController::class, 'destroy'])->name('destroy.productos');

Route::get('/admin/pedidos', [AdminPedidosController::class, 'index'])->name('pedido.index');
Route::post('/admin/pedidos', [AdminPedidosController::class, 'store'])->name('pedido.store');
Route::post('/admin/pedidos/{id}', [AdminPedidosController::class, 'update'])->name('pedido.update');
Route::delete('/admin/destroy/{id}', [AdminPedidosController::class, 'destroy'])->name('destroy.pedidos');

Route::post('/admin/updatePersonas', [AdminPersonasController::class, 'update'])->name('admin.updatePersonas');
Route::delete('/admin/destroy/{dni}', [AdminPersonasController::class, 'destroy'])->name('delete.destroy');
