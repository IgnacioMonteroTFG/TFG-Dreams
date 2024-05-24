<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .header-buttons {
            margin-left: 20px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .navbar-nav .nav-link {
            color: #333;
            font-weight: bold;
            text-transform: uppercase;
        }

        .navbar-nav .nav-link:hover {
            color: #666;
        }

        .logo {
            max-width: 120px;
            height: auto;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-toggler {
            border-color: #333;
        }

        .navbar-toggler-icon {
            background-color: #333;
        }

        .search-form {
            max-width: 400px;
            position: relative;
        }

        .search-input {
            width: 100%;
            border-radius: 20px;
            border: 1px solid #ccc;
            padding: 10px 15px;
            font-size: 14px;
        }

        .search-btn {
            border: none;
            background: none;
            cursor: pointer;
            padding: 20px;
        }

        .search-btn img {
            width: 40px;
            height: auto;
        }

        /* Estilos para el panel lateral del carrito */
        .cart-dropdown {
            display: none;
            position: absolute;
            top: 130px; /* Ajusta según la altura del botón del carrito */
            right: 20px; /* Ajusta según el margen deseado desde el borde derecho */
            width: 450px;
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            z-index: 1000;
            padding: 20px;
        }

        .cart-dropdown a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #333;
            display: block;
            transition: 0.3s;
        }

        .cart-dropdown a:hover {
            background-color: #ddd;
        }

        .cart-dropdown .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
        }

        .cart-dropdown-header {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 15px;
        }
        
        .cart-item-image {
            
            max-width: 50px; 
            height: auto;
        }
    </style>
</head>
<body>
    <header class="bg-white py-3">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    <img class="logo" src="/Productos/Dreams.png" alt="Logo de la tienda">
                    Dreams
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPeluqueria" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Peluquería
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownPeluqueria">
                                <a class="dropdown-item" href="/peluqueria">Todos los servicios</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/peluqueria/Aparatologia">Aparatología</a>
                                <a class="dropdown-item" href="/peluqueria/Decolorantes">Decolorantes</a>
                                <a class="dropdown-item" href="/peluqueria/Extensiones">Extensiones</a>
                                <a class="dropdown-item" href="/peluqueria/Packs">Packs Peluquería</a>
                                <a class="dropdown-item" href="/peluqueria/Cabello">Productos para el cabello</a>
                                <a class="dropdown-item" href="/peluqueria/Desrizantes">Desrizantes y permanentes</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCosmetica" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cosmética
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownCosmetica">
                                <a class="dropdown-item" href="/cosmetica">Todos los productos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/cosmetica/Maquillaje">Maquillaje</a>
                                <a class="dropdown-item" href="/cosmetica/Tratamiento">Tratamiento</a>
                                <a class="dropdown-item" href="/cosmetica/Cabello">Cabello</a>
                                <a class="dropdown-item" href="/cosmetica/Perfumes">Perfumes</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacto">Contacto</a>
                        </li>
                    </ul>
                    <div id="searchBox" class="search-form" style="display: none;">
                        <input type="text" id="searchInput" class="search-input" placeholder="Buscar...">
                    </div>
                    <div class="header-buttons">
                        <a class="search-btn">
                            <img src="/Productos/lupa.png" alt="Buscar">
                        </a>
                        <a class="cart-btn search-btn">
                            <img src="/Productos/carrito.png" alt="Carrito">
                        </a>
                        <a href="/usuario" class="search-btn">
                            <img src="/Productos/usuario.png" alt="Usuario">
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Panel lateral para el carrito -->
    <div id="cartDropdown" class="cart-dropdown">
        <div class="cart-dropdown-header">
            Carrito de Compras
            <div class="cart-dropdown-content" id="cartItems">
                <!-- Aquí se mostrarán los productos añadidos -->
            </div>
        </div>
        <div class="cart-dropdown-content">
            
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros pueden ser agregados aquí -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
        $(document).ready(function(){
             // Al hacer clic en el botón de búsqueda, muestra/oculta el cuadro de búsqueda
            $(".search-btn").click(function(){
                $("#searchBox").toggle();
            });
            // Mostrar el panel del carrito al pasar el ratón sobre el botón del carrito
            $(".cart-btn").mouseenter(function(){
                openCart();
            });

            // Ocultar el panel del carrito al salir del panel del carrito
            $("#cartDropdown").mouseleave(function(){
                closeCart();
            });

            var cartItems = []; // Array para almacenar los productos en la cesta

            $(".addToCartBtn").click(function(){
                var name = $(this).data("name");
                var image = $(this).data("image");
                var price = $(this).data("price");

                // Agregar el producto a la cesta
                var product = { name: name, image: image, price: price };
                cartItems.push(product);

                // Actualizar el panel del carrito
                updateCart(name, image, price);
            });

           // Variables globales para mantener el seguimiento de la cantidad de productos y el total del precio
            var totalItems = 0;
            var totalPrice = 0;

            function updateCart(name, image, price) {
                var cartItems = document.getElementById("cartItems");

                var newItem = document.createElement("div");
                newItem.classList.add("cart-item");

                newItem.innerHTML = `
                    <img src="${image}" alt="${name}" class="cart-item-image"> ${name}
                    <div class="cart-item-details">
                        <p class="cart-item-price" style="text-align:right;">${price} €</p>
                    </div>
                    <p>Precio total: </p> 
                `;

                // Incrementar la cantidad de productos y sumar el precio del nuevo elemento
                totalItems++;
                totalPrice += price;

                // Actualizar el contenido del carrito y los totales
                cartItems.appendChild(newItem);
                updateTotal();
            }



            function openCart() {
                document.getElementById("cartDropdown").style.display = "block";
            }

            function closeCart() {
                document.getElementById("cartDropdown").style.display = "none";
            }
        });

    </script>

</body>
</html>