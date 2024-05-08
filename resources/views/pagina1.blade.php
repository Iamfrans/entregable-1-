<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de Zapatillas Urbanas</title>
    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Color de fondo */
            color: #343a40; /* Color del texto */
        }
        .navbar {
            background-color: #000;
            border-bottom: 1px solid #1a1a1a;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }
        .navbar-nav .nav-link {
            padding: 0.5rem 1rem;
        }
        .navbar-nav .nav-link:hover {
            color: #ffc107;
        }
        .navbar-toggler-icon {
            color: #fff;
        }
        .product-card {
            margin-bottom: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .product-card:hover {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .product-card img {
            width: 100%;
            height: auto;
        }
        .product-card-body {
            padding: 20px;
        }
        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .product-price {
            font-size: 16px;
            font-weight: bold;
            color: #ff5252;
        }
        .product-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
        .btn-buy {
            background-color: #ff5252;
            border: none;
            color: #fff;
            font-weight: bold;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .btn-buy:hover {
            background-color: #e03e3e;
        }
    </style>
</head>
<body>
    <!-- Menú de navegación -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Cambié el texto "Tienda" por un icono de casa para representar la página principal -->
        <a class="navbar-brand" href="http://localhost/entregable-1-/public/">
            <i class="fas fa-home"></i> Inicio
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/entregable-1-/public/pagina2">Hombre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/entregable-1-/public/pagina3">Mujer</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/entregable-1-/public/pagina4">Acceder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/entregable-1-/public/pagina4">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/entregable-1-/public/pagina5">
                        <i class="fas fa-shopping-cart"></i> Carrito
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <!-- Contenido de la página -->
    <div class="container mt-4">
        <h1 class="mb-4">Nuestros Productos</h1>
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/300x200" alt="Producto 1">
                    <div class="product-card-body">
                        <h5 class="product-title">Zapatillas Urbanas Blancas</h5>
                        <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel nunc at arcu posuere posuere.</p>
                        <p class="product-price">$99.99</p>
                        <button class="btn btn-buy">Comprar</button>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/300x200" alt="Producto 2">
                    <div class="product-card-body">
                        <h5 class="product-title">Zapatillas Urbanas Negras</h5>
                        <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel nunc at arcu posuere posuere.</p>
                        <p class="product-price">$109.99</p>
                        <button class="btn btn-buy">Comprar</button>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/300x200" alt="Producto 3">
                    <div class="product-card-body">
                        <h5 class="product-title">Zapatillas Urbanas Rojas</h5>
                        <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel nunc at arcu posuere posuere.</p>
                        <p class="product-price">$89.99</p>
                        <button class="btn btn-buy">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar Bootstrap JS (opcional, solo si necesitas componentes de JavaScript) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
