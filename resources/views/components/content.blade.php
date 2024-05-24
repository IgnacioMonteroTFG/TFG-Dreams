    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <style>
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-radius: 10px;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .carousel-caption h5,
        .carousel-caption p {
            color: white;
            margin: 5px 0;
        }

        .product-info {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-radius: 10px;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            width: 100%;
            transform: translateY(100%);
            transition: transform 0.5s ease;
        }

        .carousel-item:hover .product-info {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <main class="container mt-4">
        <section class="text-center">
            <!-- Carrusel de productos 1 -->
            <h1 class="mb-4">Productos de la categoría Aparatología</h1>
            <div id="carouselProductos1" class="carousel slide" data-ride="carousel" style="max-width: 500px; margin: 0 auto;">
                <ol class="carousel-indicators">
                    @php
                        use App\Models\Producto;
                        $categoria = 'Aparatología';
                        $productos_random1 = Producto::where('N_Categoria', $categoria)
                            ->inRandomOrder()
                            ->limit(5)
                            ->get();
                    @endphp
                    @foreach($productos_random1 as $key => $producto)
                        <li data-target="#carouselProductos1" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($productos_random1 as $key => $producto1)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img class="d-block w-100" src="{{ $producto1->Imagen }}" alt="{{ $producto1->Nombre }}" style="max-height: 300px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $producto1->Nombre }}</h5>
                                <p>Precio: {{ number_format($producto1['Precio'], 2) }} €</p>
                                <a href="#" class="btn btn-light">Comprar</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselProductos1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselProductos1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- Carrusel de productos 2 -->
            <h1 class="mt-5 mb-4">Productos de la categoría Extensiones Posticería</h1>
            <div id="carouselProductos2" class="carousel slide" data-ride="carousel" style="max-width: 500px; margin: 0 auto;">
                <ol class="carousel-indicators">
                        @php
                            $categoria = 'Extensiones';
                            $productos_random2= Producto::where('N_Categoria', $categoria)
                                ->inRandomOrder()
                                ->limit(5)
                                ->get();
                        @endphp
                        @foreach($productos_random2 as $key => $producto)
                            <li data-target="#carouselProductos2" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($productos_random2 as $key => $producto2)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img class="d-block w-100" src="{{ $producto2->Imagen }}" alt="{{ $producto2->Nombre }}" style="max-height: 300px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $producto2->Nombre }}</h5>
                                    <p>Precio: {{ number_format($producto2['Precio'], 2) }} €</p>
                                    <a href="#" class="btn btn-light">Comprar</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselProductos2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselProductos2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#carouselProductos1').carousel();
            $('#carouselProductos2').carousel();
        });
    </script>
</body>
</html>

