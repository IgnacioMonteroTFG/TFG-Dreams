<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .footer {
            background-color: #fff;
            color: #343a40;
            padding: 30px 0;
        }

        .footer p {
            margin-bottom: 20px;
        }

        .footer-links {
            margin-top: 10px;
        }

        .footer-links a {
            color: #343a40;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #ffc107;
        }

        .footer-brand {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-social {
            margin-bottom: 20px;
            text-align: right; /* Alineación a la izquierda */
        }

        .footer-social a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background-color: #343a40;
            color: #fff;
            border-radius: 50%;
            margin: 0 10px;
            font-size: 18px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .footer-social a:hover {
            background-color: #ffc107;
            color: #fff;
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="footer-brand">Dreams</p>
                    <p>&copy; <span id="currentYear"></span> Dreams. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6">
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById('currentYear').innerText = new Date().getFullYear();
    </script>
</body>
