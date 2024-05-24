<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CosmeticaController extends Controller
{
    public function index()
    {   
        $productos = Producto::where('Pagina', 'Cosmetica')->get();
        return view('cosmetica.index', compact('productos'));
    }

    public function categoria($categoria) // Este es la función para mostrar los productos de peluquería por categoría
    {
        $productos = Producto::where('Pagina', 'Cosmetica')
                             ->where('N_Categoria', $categoria)
                             ->get();
        return view('cosmetica.index', compact('productos'));
    }
}
