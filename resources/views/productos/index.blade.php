<div class="container">
    @php
        use Illuminate\Support\Facades\Request;
        use App\Models\Producto;

        $ruta = Request::path();
        $categoria = null;
        $pagina = null;

        // Determinar la página y la categoría basadas en la URL
        if (strpos($ruta, 'peluqueria') !== false) {
            $pagina = 'Peluqueria';
            $segmentos = explode('/', $ruta);
            if (count($segmentos) > 1) {
                $categoria = $segmentos[1];
            }
        } elseif (strpos($ruta, 'cosmetica') !== false) {
            $pagina = 'Cosmetica';
            $segmentos = explode('/', $ruta);
            if (count($segmentos) > 1) {
                $categoria = $segmentos[1];
            }
        }

        // Construir la consulta basada en la página y la categoría
        $query = Producto::where('Pagina', $pagina);
        if ($categoria) {
            $query->where('N_Categoria', $categoria);
        }

        // Obtener los productos con paginación
        $productos_por_pagina = 28;
        $productos = $query->paginate($productos_por_pagina);
    @endphp

    <h1 class="text-center my-4">
        @if ($categoria)
            {{ ucfirst($categoria) }} - {{ ucfirst($pagina) }}
        @else
            {{ ucfirst($pagina) }}
        @endif
    </h1>

    <div class="row">
        @foreach ($productos as $producto)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4"> 
            <div class="card h-100 producto-card" data-nombre="{{ $producto->Nombre }}" data-descripcion="{{ $producto->Descripcion }}" data-marca="{{ $producto->N_Marca }}" data-precio="{{ $producto->Precio }}" data-imagen="{{ $producto->Imagen }}">
                <img src="{{ $producto->Imagen }}" class="card-img-top" alt="{{ $producto->Nombre }}">
                <div class="card-body clickable">
                    <h5 class="card-title">{{ $producto->Nombre }}</h5>
                    <p class="card-text">{{ Str::limit($producto->Descripcion, 100) }}</p>
                    <p class="card-text"><strong>Marca:</strong> {{ $producto->N_Marca }}</p>
                    <p class="card-text"><strong>Precio:</strong> {{ number_format($producto->Precio, 2) }} €</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-success addToCartBtn" data-name="{{ $producto->Nombre }}" data-image="{{ $producto->Imagen }}" data-price="{{ $producto->Precio }}">Añadir a la cesta</button>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Enlaces de Paginación -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-4">
            @if ($productos->onFirstPage())
                <li class="page-item disabled"><span class="page-link">Anterior</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $productos->previousPageUrl() }}">Anterior</a></li>
            @endif

            <li class="page-item disabled">
                <span class="page-link">
                    Página {{ $productos->currentPage() }} de {{ $productos->lastPage() }} - 
                    Mostrando {{ $productos->count() }} de {{ $productos->total() }} productos
                </span>
            </li>

            @if ($productos->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $productos->nextPageUrl() }}">Siguiente</a></li>
            @else
                <li class="page-item disabled"><span class="page-link">Siguiente</span></li>
            @endif
        </ul>
    </nav>
</div>

<!-- Modal -- Desplegable -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Detalles del Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" id="modal-product-image" class="img-fluid mb-3" alt="Producto">
                <h5 id="modal-product-name"></h5>
                <p id="modal-product-description"></p>
                <p><strong>Marca:</strong> <span id="modal-product-brand"></span></p>
                <p><strong>Precio:</strong> <span id="modal-product-price"></span> €</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var productCards = document.querySelectorAll('.producto-card .card-body');

        productCards.forEach(function(cardBody) {
            cardBody.addEventListener('click', function() {
                var card = this.closest('.producto-card');
                var nombre = card.getAttribute('data-nombre');
                var descripcion = card.getAttribute('data-descripcion');
                var marca = card.getAttribute('data-marca');
                var imagen = card.getAttribute('data-imagen');
                var precio = card.getAttribute('data-precio');

                document.getElementById('modal-product-name').innerText = nombre;
                document.getElementById('modal-product-description').innerText = descripcion;
                document.getElementById('modal-product-brand').innerText = marca;
                document.getElementById('modal-product-price').innerText = parseFloat(precio).toFixed(2);
                document.getElementById('modal-product-image').setAttribute('src', imagen);

                $('#productModal').modal('show');
            });
        });
    });
</script>
