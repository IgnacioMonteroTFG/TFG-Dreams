<?php

// check-login.php

// Incluye el autoload de Laravel para cargar las clases de Eloquent
require __DIR__.'/vendor/autoload.php';

// Inicializa la aplicación de Laravel
$app = require_once __DIR__.'/bootstrap/app.php';

// Ejecuta la aplicación de Laravel para cargar la configuración
$app->make('Illuminate\Contracts\Http\Kernel')
    ->handle(Illuminate\Http\Request::capture());

// Importa el modelo Persona
use App\Models\Persona;

// Verifica si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtiene los datos del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Busca en la base de datos el usuario con el correo proporcionado
    $usuario = Persona::where('User', $usuario)->first();

    // Verifica si se encontró un usuario y si la contraseña es correcta
    if ($usuario && password_verify($contrasena, $usuario->Password)) {
        // Retorna un JSON con el éxito y el rol del usuario
        echo json_encode([
            'success' => true,
            'role' => $usuario->Rol
        ]);
    } else {
        // Retorna un JSON con un mensaje de error
        echo json_encode([
            'success' => false,
            'message' => 'Credenciales incorrectas. Por favor, inténtelo de nuevo.'
        ]);
    }
}
?>
