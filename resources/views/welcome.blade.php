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



    <!-- Carrusel de zapatillas -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1587855049254-351f4e55fe2a?q=80&w=2000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Promoción 1">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1641745900309-75ceed0153e1?q=80&w=2028&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Promoción 2">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1617906641165-c7d0117c18ca?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Promoción 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <!-- Contenido de la página -->
    <div class="jumbotron">
        <h1 class="display-4">¡Bienvenido a tu Tienda de Zapatillas Favorita!</h1>
        <p class="lead">Descubre las últimas promociones, modelos exclusivos y más.</p>
        <a class="btn btn-primary btn-lg" href="http://localhost/entregable-1-/public/pagina2" role="button">Explorar</a>
    </div>

    <!-- Agregar Bootstrap JS (opcional, solo si necesitas componentes de JavaScript) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
