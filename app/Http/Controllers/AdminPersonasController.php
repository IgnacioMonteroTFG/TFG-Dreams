<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class AdminPersonasController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('admin.personas.index', compact('personas'));
    }
    
    public function update(Request $request)
    {
        // Procesar datos de filas existentes
        $existingData = $request->only(['dni', 'nombre', 'apellido1', 'apellido2', 'telefono', 'email', 'rol']);
    
        // Verificar si hay datos de filas existentes
        if ($existingData) {
            // Guardar datos de filas existentes en la base de datos
            foreach ($existingData['dni'] as $key => $dni) {
                $persona = Persona::where('DNI_Persona', $dni)->first();
                $persona->Nombre = $existingData['nombre'][$key];
                $persona->Apellido1 = $existingData['apellido1'][$key];
                $persona->Apellido2 = $existingData['apellido2'][$key];
                $persona->Telefono = $existingData['telefono'][$key];
                $persona->Email = $existingData['email'][$key];
                $persona->Rol = $existingData['rol'][$key];
                $persona->save();
            }
        }
    
        // Procesar datos de filas nuevas
        $newData = [];
        $newDni = $request->input('new_dni');
        $newNombre = $request->input('new_nombre');
        $newApellido1 = $request->input('new_apellido1');
        $newApellido2 = $request->input('new_apellido2');
        $newTelefono = $request->input('new_telefono');
        $newEmail = $request->input('new_email');
        $newRol = $request->input('new_rol');
    
        // Verificar si hay datos de filas nuevas
        if ($newDni) {
            foreach ($newDni as $key => $dni) {
                // Validar si el DNI está presente y no está vacío
                if (!empty($dni)) {
                    // Crear un nuevo array para cada fila nueva
                    $newData[] = [
                        'dni' => $dni,
                        'nombre' => $newNombre[$key],
                        'apellido1' => $newApellido1[$key],
                        'apellido2' => $newApellido2[$key],
                        'telefono' => $newTelefono[$key],
                        'email' => $newEmail[$key],
                        'rol' => $newRol[$key],
                    ];
                }
            }
        }
    
        // Guardar datos de filas nuevas en la base de datos
        foreach ($newData as $data) {
            $persona = new Persona();
            $persona->DNI_Persona = $data['dni'];
            $persona->Nombre = $data['nombre'];
            $persona->Apellido1 = $data['apellido1'];
            $persona->Apellido2 = $data['apellido2'];
            $persona->Telefono = $data['telefono'];
            $persona->Email = $data['email'];
            $persona->Rol = $data['rol'];
            $persona->save();
        }
    
        return redirect()->back()->with('success', 'Datos guardados exitosamente.');
    }
    
    

    public function destroy($dni)
    {
        // Buscar la persona por su DNI y eliminarla
        $delete = Persona::findOrFail($dni)->delete();
        return view ('admin.usuarios.index',compact('delete'));
    }

}
