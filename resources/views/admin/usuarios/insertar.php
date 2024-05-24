<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #343a40;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    main {
        padding: 20px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    textarea {
        height: 150px;
        resize: none;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    footer {
        background-color: #343a40;
        color: #fff;
        text-align: center;
        padding: 20px;
        position: fixed;
        width: 100%;
        bottom: 0;
    }
</style>

<main>
    <h1>Añadir Productos</h1>
    <form method="POST" enctype="multipart/form-data">
        @csrf <!-- Agrega el token CSRF para protección contra CSRF -->
        @method('PUT') <!-- Usa el método PUT para enviar la solicitud de modificación -->
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>
        </div>
        <div>
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*">
        </div>
        <div>
            <label for="categoria">Categoría:</label>
            <input type="text" id="categoria" name="categoria" required>
        </div>
        <div>
            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" required>
        </div>
        <button type="submit">Guardar Cambios</button>
    </form>
</main>