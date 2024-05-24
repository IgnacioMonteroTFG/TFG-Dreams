<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\URL;

class AdminProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('admin.productos.index', compact('productos'));
    }

    public function edit($id)
    {
        $pedido = Producto::findOrFail($id);
        return view('admin.productos.index', compact('productos')); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'imagen' => 'required|url',
            'descripcion' => 'required|string',
            'marca' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'pagina' => 'required|integer',
        ]);

        $producto = new Producto();

        $producto->Nombre = $request->input('nombre');
        $producto->Precio = $request->input('precio');
        $producto->Imagen = $request->input('imagen');
        $producto->Descripcion = $request->input('descripcion');
        $producto->N_Marca = $request->input('n_marca');
        $producto->N_Categoria = $request->input('n_categoria');
        $producto->Pagina = $request->input('pagina');

        $producto->save();

        return redirect()->intended(URL::previous())->with('success', 'Producto creado exitosamente');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'imagen' => 'required|url',
            'descripcion' => 'required|string',
            'marca' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'pagina' => 'required|integer',
        ]);

        $producto = Producto::findOnFail($id);
        
        $producto->Nombre = $request->input('nombre');
        $producto->Precio = $request->input('precio');
        $producto->Imagen = $request->input('imagen');
        $producto->Descripcion = $request->input('descripcion');
        $producto->N_Marca = $request->input('n_marca');
        $producto->N_Categoria = $request->input('n_categoria');
        $producto->Pagina = $request->input('pagina');

        $producto->save();

        return redirect()->intended(URL::previous())->with('success', 'Pedido actualizado exitosamente');
    }
    
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->intended(URL::previous())->with('success', 'Pedido borrado exitosamente');
    }
}