<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class PeluqueriaController extends Controller
{
    public function index()
    {   
        $productos = Producto::where('Pagina', 'Peluqueria')->get();
        return view('peluqueria.index', compact('productos'));
    }

    public function categoria($categoria) // Este es la función para mostrar los productos de peluquería por categoría
    {
        $productos = Producto::where('Pagina', 'Peluqueria')
                             ->where('N_Categoria', $categoria)
                             ->get();
        return view('peluqueria.index', compact('productos'));
    }


}
