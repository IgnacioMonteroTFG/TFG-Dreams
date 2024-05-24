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
        margin-top: 20px;
    }

    button[type="submit"] {
        background-color: #dc3545;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #c82333;
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
    <h1>Borrar Productos</h1>   
    <h2>¿Estás seguro de que deseas borrar este producto?</h2>
    <p><strong>Nombre:</strong> <!-- Aquí iría el nombre del producto --></p>
    <p><strong>Descripción:</strong> <!-- Aquí iría la descripción del producto --></p>
    <p><strong>Precio:</strong> <!-- Aquí iría el precio del producto --></p>
    <p><strong>Categoría:</strong> <!-- Aquí iría la categoría del producto --></p>
    <p><strong>Marca:</strong> <!-- Aquí iría la marca del producto --></p>

    <form method="POST">
        @csrf <!-- Agrega el token CSRF para protección contra CSRF -->
        @method('DELETE') <!-- Usa el método DELETE para enviar la solicitud de eliminación -->

        <button type="submit">Confirmar Borrado</button>
    </form>
</main>