<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container mt-5">
        <h1>Dreams - Productos</h1>
        
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

        <!-- Botón para insertar nuevo producto -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newProductoModal" id="insertProductBtn">
            Insertar Nuevo Producto
        </button>        
        <br>
        <div class="row">
            <?php
                use App\Models\Producto;

                $productos = Producto::all();
                
                $productos_por_pagina = 28;
                $productos = Producto::paginate($productos_por_pagina);
            ?>
            @foreach ($productos as $producto)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ $producto->Imagen }}" class="card-img-top" alt="{{ $producto->Nombre }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->Nombre }}</h5>
                            <p class="card-text">{{ Str::limit($producto->Descripcion, 100) }}</p>
                            <p class="card-text"><strong>Marca:</strong> {{ $producto->N_Marca }}</p>
                            <p class="card-text"><strong>Precio:</strong> {{ number_format($producto->Precio, 2) }} €</p>
                        </div>
                        <div class="card-footer text-center">
                            <form action="{{ route('delete.destroy', $producto->ID_Producto) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                            </form>
                            <button type="button" class="btn btn-primary btn-modify" data-toggle="modal" data-target="#editProductModal">Modificar</button>
                        </div>
                    </div>
                </div>

                <!-- Modales de editar productos -->
                <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editProductModalLabel">Modificar Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('update.productos', $producto->ID_Producto) }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nombre{{$producto->ID_Producto}}">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre{{$producto->ID_Producto}}" name="nombre" value="{{$producto->Nombre}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="precio{{$producto->ID_Producto}}">Precio:</label>
                                        <input type="text" class="form-control" id="precio{{$producto->ID_Producto}}" name="precio" value="{{$producto->Precio}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="imagen{{$producto->ID_Producto}}">Imagen URL:</label>
                                        <input type="text" class="form-control" id="imagen{{$producto->ID_Producto}}" name="imagen" value="{{$producto->Imagen}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion{{$producto->ID_Producto}}">Descripción:</label>
                                        <textarea class="form-control" id="descripcion{{$producto->ID_Producto}}" name="descripcion" rows="3">{{$producto->Descripcion}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="marca{{$producto->ID_Producto}}">Marca:</label>
                                        <input type="text" class="form-control" id="marca{{$producto->ID_Producto}}" name="n_marca" value="{{$producto->N_Marca}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="categoria{{$producto->ID_Producto}}">Categoría:</label>
                                        <input type="text" class="form-control" id="categoria{{$producto->ID_Producto}}" name="n_categoria" value="{{$producto->N_Categoria}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pagina{{$producto->ID_Producto}}">Página:</label>
                                        <input type="text" class="form-control" id="pagina{{$producto->ID_Producto}}" name="pagina" value="{{$producto->Pagina}}">
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
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $productos->links() }}
            </ul>
        </nav>
    </div>

    <!-- Modal de inserción de nuevo producto -->
    <div class="modal fade" id="insertProductModal" tabindex="-1" role="dialog" aria-labelledby="insertProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertProductModalLabel">Insertar Nuevo Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('productos.store') }}" method="POST" id="insertProductForm">
                    @csrf
                    @method('PUT')
                        <!-- Campo Nombre -->
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <!-- Campo Precio -->
                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input type="text" class="form-control" id="precio" name="precio">
                        </div>
                        <!-- Campo Imagen -->
                        <div class="form-group">
                            <label for="imagen">Imagen URL:</label>
                            <input type="text" class="form-control" id="imagen" name="imagen">
                        </div>
                        <!-- Campo Descripción -->
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                        </div>
                        <!-- Campo Marca -->
                        <div class="form-group">
                            <label for="marca">Marca:</label>
                            <input type="text" class="form-control" id="marca" name="marca">
                        </div>
                        <!-- Campo Categoría -->
                        <div class="form-group">
                            <label for="categoria">Categoría:</label>
                            <input type="text" class="form-control" id="categoria" name="categoria">
                        </div>
                        <!-- Campo Página -->
                        <div class="form-group">
                            <label for="pagina">Página:</label>
                            <input type="text" class="form-control" id="pagina" name="pagina">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        $('#insertProductBtn').click(function(){
            $('#insertProductModal').modal('show');
        });
    });
</script>

</body>
</html>
