<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dreams - Tienda en línea</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #e0e0e0;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }

        .navbar-nav .nav-link:hover {
            color: #bfbfbf;
        }

        .logo {
            max-width: 120px;
            height: auto;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

        .footer {
            background-color: #222;
            color: #e0e0e0;
            padding: 30px 0;
        }

        .footer p {
            margin-bottom: 20px;
            font-weight: bold;
        }

        .footer-brand {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-social a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background-color: #555;
            color: #fff;
            border-radius: 50%;
            margin: 0 10px;
            font-size: 18px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .footer-social a:hover {
            background-color: #ffc107;
        }

    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="/admin">
                <img class="logo" src="/Productos/Dreams.png" alt="Logo de la tienda">
                Dreams
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" data-section="Principal">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-section="Productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-section="Pedidos">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-section="Usuarios">Usuarios</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container">
        <div id="Principal" class="section active">
        @include('admin.components.Content')
        </div>
        <div id="Productos" class="section">
        @include('admin.productos.index')
        </div>
        <div id="Pedidos" class="section">
            @include('admin.pedidos.index')
        </div>
        <div id="Usuarios" class="section">
            @include('admin.usuarios.index')
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="footer-brand">Dreams</p>
                    <p>&copy; <span id="currentYear"></span> Dreams. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script>
        document.getElementById('currentYear').innerText = new Date().getFullYear();

        document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
            link.addEventListener('click', () => {
                const target = link.getAttribute('data-section');
                document.querySelectorAll('.section').forEach(section => {
                    section.classList.remove('active');
                });
                document.getElementById(target).classList.add('active');
            });
        });

    </script>
</body>
</html>
