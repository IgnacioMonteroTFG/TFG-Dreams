<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Administrador</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"],
input[type="password"],
button {
    padding: 10px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

#message {
    color: #dc3545;
    font-size: 14px;
    margin-top: 10px;
}

</style>

<body>
    <div class="container">
        <h2>Iniciar Sesión - Administrador</h2>
        <form id="loginForm" >
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <div id="message"></div>
    </div>
</body>
</html>

<script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe de forma predeterminada

    // Obtener los valores del usuario y la contraseña
    var usuario = document.getElementById("usuario").value;
    var contrasena = document.getElementById("contrasena").value;

    // Enviar los datos del formulario al controlador utilizando fetch
    fetch("admin.login", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            usuario: usuario,
            contrasena: contrasena
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error en la solicitud');
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            if (data.role === 'Admin') {
                window.location.href = '/admin'; // Redirigir al panel de administrador si el inicio de sesión es exitoso
            } else {
                // Manejar otros roles si es necesario
            }
        } else {
            document.getElementById("message").innerText = data.message;
        }
    })
    .catch(error => {
        console.error("Error al iniciar sesión:", error);
        document.getElementById("message").innerText = 'Error al iniciar sesión. Por favor, inténtelo de nuevo.';
    });
});
</script>