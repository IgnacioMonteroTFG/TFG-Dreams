<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos CSS personalizados para la ventana emergente */
        #newPedidoModal .modal-dialog, #editPedidoModal .modal-dialog {
            max-width: 600px;
            margin: auto; /* Para centrar la ventana emergente */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Dreams - Pedidos</h1>

        <!-- Mensajes de éxito y error -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Botón para insertar nuevo pedido -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPedidoModal">
            Insertar Nuevo Pedido
        </button>

        <div class="row">
            <?php
                use App\Models\Pedido;

                $pedidos = Pedido::all();

                $Pedidos_por_pagina = 28;
                $pedidos = Pedido::paginate($Pedidos_por_pagina);
            ?>
            @foreach ($pedidos as $pedido)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <!-- Muestra los detalles del pedido aquí -->
                        <div class="card-body">
                            <!-- Detalles del pedido -->
                            <p><strong>ID:</strong> {{ $pedido->ID_Pedidos }}</p>
                            <p><strong>Pago:</strong> {{ $pedido->Pago }}</p>
                            <p><strong>Fecha:</strong> {{ $pedido->Fecha }}</p>
                            <p><strong>DNI Persona:</strong> {{ $pedido->DNI_Persona }}</p>
                            <p><strong>ID Proveedor:</strong> {{ $pedido->ID_Proveedores }}</p>
                            <p><strong>ID Dirección:</strong> {{ $pedido->ID_Direccion }}</p>
                            <!-- Agrega más detalles del pedido según tu modelo -->
                        </div>
                        <div class="card-footer text-center">
                            <form action="{{ route('delete.destroy', $pedido->ID_Pedidos) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este pedido?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                            </form>
                            <button type="button" class="btn btn-warning btn-modify" data-toggle="modal" data-target="#editPedidoModal-{{ $pedido->ID_Pedidos }}">Editar</button>
                        </div>
                    </div>
                </div>

                <!-- Modal para editar pedido -->
                <div class="modal fade" id="editPedidoModal-{{ $pedido->ID_Pedidos }}" tabindex="-1" role="dialog" aria-labelledby="editPedidoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editPedidoModalLabel">Editar Pedido</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('pedido.update', $pedido->ID_Pedidos) }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="pago-{{ $pedido->ID_Pedidos }}">Pago:</label>
                                        <input type="text" class="form-control" id="pago-{{ $pedido->ID_Pedidos }}" name="pago" value="{{ $pedido->Pago }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha-{{ $pedido->ID_Pedidos }}">Fecha:</label>
                                        <input type="date" class="form-control" id="fecha-{{ $pedido->ID_Pedidos }}" name="fecha" value="{{ $pedido->Fecha }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="dni_persona-{{ $pedido->ID_Pedidos }}">DNI Persona:</label>
                                        <input type="text" class="form-control" id="dni_persona-{{ $pedido->ID_Pedidos }}" name="dni_persona" value="{{ $pedido->DNI_Persona }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_proveedores-{{ $pedido->ID_Pedidos }}">ID Proveedor:</label>
                                        <input type="number" class="form-control" id="id_proveedores-{{ $pedido->ID_Pedidos }}" name="id_proveedores" value="{{ $pedido->ID_Proveedores }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_direccion-{{ $pedido->ID_Pedidos }}">ID Dirección:</label>
                                        <input type="number" class="form-control" id="id_direccion-{{ $pedido->ID_Pedidos }}" name="id_direccion" value="{{ $pedido->ID_Direccion }}" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal para nuevo pedido -->
    <div class="modal fade" id="newPedidoModal" tabindex="-1" role="dialog" aria-labelledby="newPedidoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newPedidoModalLabel">Nuevo Pedido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('pedido.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="pago">Pago:</label>
                            <input type="text" class="form-control" id="pago" name="pago" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                        </div>
                        <div class="form-group">
                            <label for="dni_persona">DNI Persona:</label>
                            <input type="text" class="form-control" id="dni_persona" name="dni_persona" required>
                        </div>
                        <div class="form-group">
                            <label for="id_proveedores">ID Proveedor:</label>
                            <input type="number" class="form-control" id="id_proveedores" name="id_proveedores" required>
                        </div>
                        <div class="form-group">
                            <label for="id_direccion">ID Dirección:</label>
                            <input type="number" class="form-control" id="id_direccion" name="id_direccion" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Pedido</button>
                    </div>
                </form>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $pedidos->links() }}
            </ul>
        </nav>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>