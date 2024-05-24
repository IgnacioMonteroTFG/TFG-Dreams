<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Persona;
use Illuminate\Support\Facades\URL;


class AdminPedidosController extends Controller
{
    public function index()
    {
        // Consulta para obtener todos los pedidos
        $pedidos = Pedido::all();
        
        // Retornar la vista de la página de inicio de administración con los pedidos
        return view('admin.pedidos.index', compact('pedidos'));
    }

    public function edit($id)
    {
        // Obtener el pedido a editar
        $pedido = Pedido::findOrFail($id);
        return view('admin.pedidos.index', compact('pedido')); // Ajuste para pasar el pedido a la vista principal
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'pago' => 'required|string|max:255',
            'fecha' => 'required|date',
            'dni_persona' => 'required|string|max:20',
            'id_proveedores' => 'required|integer',
            'id_direccion' => 'required|integer',
        ]);

        // Verificar si el DNI_Persona existe
        $persona = Persona::where('DNI_Persona', $request->input('dni_persona'))->first();
        
        if (!$persona) {
            // Si el DNI_Persona no existe, redirigir con un mensaje de error
            return redirect()->back()->with('error', 'El DNI de la persona no existe.');
        }

        // Obtener el pedido a actualizar
        $pedido = Pedido::findOrFail($id);
        $pedido->Pago = $request->input('pago');
        $pedido->Fecha = $request->input('fecha');
        $pedido->DNI_Persona = $request->input('dni_persona');
        $pedido->ID_Proveedores = $request->input('id_proveedores');
        $pedido->ID_Direccion = $request->input('id_direccion');
        
        // Guardar los cambios en la base de datos
        $pedido->save();

        // Redirigir a la página de pedidos con un mensaje de éxito
        return redirect()->intended(URL::previous())->with('success', 'Pedido actualizado exitosamente');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'pago' => 'required|string|max:255',
            'fecha' => 'required|date',
            'dni_persona' => 'required|string|max:20',
            'id_proveedores' => 'required|integer',
            'id_direccion' => 'required|integer',
        ]);

        // Verificar si el DNI_Persona existe
        $persona = Persona::where('DNI_Persona', $request->input('dni_persona'))->first();

        if (!$persona) {
            // Si el DNI_Persona no existe, redirigir con un mensaje de error
            return redirect()->back()->with('error', 'El DNI de la persona no existe.');
        }

        // Crear un nuevo pedido
        $pedido = new Pedido();
        $pedido->Pago = $request->input('pago');
        $pedido->Fecha = $request->input('fecha');
        $pedido->DNI_Persona = $request->input('dni_persona');
        $pedido->ID_Proveedores = $request->input('id_proveedores');
        $pedido->ID_Direccion = $request->input('id_direccion');
        
        // Guardar el nuevo pedido en la base de datos
        $pedido->save();

        // Redirigir a la página de pedidos con un mensaje de éxito
        return redirect()->intended(URL::previous())->with('success', 'Pedido creado exitosamente');
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return redirect()->back()->with('success', 'Pedido eliminado correctamente.');
    }
}
