<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            padding: 20px;
        }
        .my-5 {
            margin-top: 5rem !important;
            margin-bottom: 5rem !important;
        }
        .table-responsive {
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <form action="/admin/updatePersonas" method="POST">
                @csrf
                <table id="personas-table" class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Apellido1</th>
                            <th>Apellido2</th>
                            <th>Teléfono</th>
                            <th>Correo Electrónico</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="personas-body">
                        <?php
                        use App\Models\Persona;

                        $personas = Persona::all();

                        foreach ($personas as $persona) {
                            echo '<tr>';
                            echo '<td><input type="text" class="form-control" name="dni[]" value="' . $persona->DNI_Persona . '" readonly></td>';
                            echo '<td><input type="text" class="form-control" name="nombre[]" value="' . $persona->Nombre . '"></td>';
                            echo '<td><input type="text" class="form-control" name="apellido1[]" value="' . $persona->Apellido1 . '"></td>';
                            echo '<td><input type="text" class="form-control" name="apellido2[]" value="' . $persona->Apellido2 . '"></td>';
                            echo '<td><input type="text" class="form-control" name="telefono[]" value="' . $persona->Telefono . '"></td>';
                            echo '<td><input type="text" class="form-control" name="email[]" value="' . $persona->Email . '"></td>';
                            echo '<td><input type="text" class="form-control" name="rol[]" value="' . $persona->Rol . '"></td>';
                            echo '<td><button type="submit" class="btn btn-primary">Guardar Cambios</button></td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </form>
            <form action="/admin/updatePersonas" method="POST">
                @csrf
                <button type="button" class="btn btn-primary" id="btnIngresarDatos">Ingresar Datos</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('btnIngresarDatos').addEventListener('click', function() {
            var newRow = document.createElement('tr');
            newRow.innerHTML = `
            <form action="{{ route('admin.updatePersonas') }}" method="POST">
                @csrf
                <td><input type="text" class="form-control" name="new_dni[]" value=""></td>
                            <td><input type="text" class="form-control" name="new_nombre[]" value=""></td>
                            <td><input type="text" class="form-control" name="new_apellido1[]" value=""></td>
                            <td><input type="text" class="form-control" name="new_apellido2[]" value=""></td>
                            <td><input type="text" class="form-control" name="new_telefono[]" value=""></td>
                            <td><input type="text" class="form-control" name="new_email[]" value=""></td>
                            <td><input type="text" class="form-control" name="new_rol[]" value=""></td>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
            `;
            document.getElementById('personas-body').appendChild(newRow);
        });

        function borrarFila(button) {
            button.closest('tr').remove();
        }
    </script>
</body>
</html>
