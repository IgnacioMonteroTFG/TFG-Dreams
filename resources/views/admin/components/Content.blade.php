<style>
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h2, h3 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .slider {
            width: 100%;
            overflow: hidden;
        }

        .usuario-slide {
            float: left;
            width: 200px; /* Ajusta el ancho del slide según sea necesario */
            text-align: center;
        }

        .usuario-slide img {
            width: 100%;
            height: auto;
        }
    </style>
    <div class="content">
        <h2>Bienvenido a la Zona de Administración</h2>
        <p>Aquí puedes encontrar información relevante sobre el sistema.</p>

        <h3>Estadísticas Generales</h3>
        <ul>
            <li>Número total de pedidos: {{ \App\Models\Pedido::count() }}</li>
            <li>Número total de personas: {{ \App\Models\Persona::count() }}</li>
            <li>Número total de productos: {{ \App\Models\Producto::count() }}</li>
        </ul>

        <h3>Usuarios Aleatorios</h3>
        <div id="usuarios-slider" class="slider">
            @foreach(\App\Models\Persona::inRandomOrder()->limit(3)->get() as $usuario)
                <div class="usuario-slide">
                    <img src="/Productos/perfil.png">
                    <p>{{ $usuario->Nombre }}</p>
                </div>
            @endforeach
        </div>

        <h3>Actividad Reciente</h3>
        <ul>
            @foreach(\App\Models\Pedido::orderBy('Fecha', 'desc')->take(3)->get() as $pedido)
                <li><strong>Usuario:</strong> {{ $pedido->DNI_Persona }} - {{ $pedido->Fecha }}</li>
            @endforeach
        </ul>

        <h3>Estadísticas Más Específicas</h3>
        <ul>
            <li>Número total de pedidos: {{ \App\Models\Pedido::count() }}</li>
            <li>Número total de personas: {{ \App\Models\Persona::count() }}</li>
            <li>Número total de productos: {{ \App\Models\Producto::count() }}</li>
        </ul>
    </div>
