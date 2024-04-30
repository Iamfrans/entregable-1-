<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Cocina y Recetas</title>
    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
            color: #343a40; /* Color del texto */
        }
        .jumbotron {
            background-image: url('https://source.unsplash.com/1600x900/?food'); /* Imagen de fondo */
            background-size: cover;
            color: #ffffff; /* Color del texto */
        }
        .card {
            background-color: #ffffff; /* Color de fondo de las tarjetas */
            border: none; /* Sin borde */
        }
        .card-title {
            color: #343a40; /* Color del título de la tarjeta */
        }
        .card-text {
            color: #6c757d; /* Color del texto de la tarjeta */
        }
        .btn-danger {
            background-color: #dc3545; /* Color de fondo del botón */
            border-color: #dc3545; /* Color del borde del botón */
        }
        .btn-danger:hover {
            background-color: #bb2d3b; /* Cambio de color al pasar el ratón sobre el botón */
            border-color: #bb2d3b; /* Cambio de color del borde al pasar el ratón sobre el botón */
        }
        .navbar {
            background-color: #dc3545; /* Color de fondo de la barra de navegación */
        }
        .navbar-brand {
            color: #ffffff; /* Color del texto del enlace de la barra de navegación */
        }
        .navbar-brand:hover {
            color: #f8f9fa; /* Cambio de color al pasar el ratón sobre el enlace de la barra de navegación */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Página de Cocina y Recetas</a>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">¡Bienvenido a la Página de Cocina!</h1>
        <p class="lead">Descubre deliciosas recetas, consejos de cocina y trucos culinarios.</p>
        <hr class="my-4">
        <p>Explora nuestra colección y encuentra inspiración para tu próxima comida.</p>
        <a class="btn btn-danger btn-lg" href="#" role="button">Explorar</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x300/?healthy,food" class="card-img-top" alt="Recetas Saludables">
                    <div class="card-body">
                        <h5 class="card-title">Recetas Saludables</h5>
                        <p class="card-text">Encuentra recetas nutritivas y deliciosas para mantener un estilo de vida saludable.</p>
                        <a href="#" class="btn btn-danger">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x300/?dessert" class="card-img-top" alt="Postres y Dulces">
                    <div class="card-body">
                        <h5 class="card-title">Postres y Dulces</h5>
                        <p class="card-text">Descubre recetas dulces y tentadoras para satisfacer tu antojo de postre.</p>
                        <a href="#" class="btn btn-danger">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x300/?traditional,food" class="card-img-top" alt="Platos Tradicionales">
                    <div class="card-body">
                        <h5 class="card-title">Platos Tradicionales</h5>
                        <p class="card-text">Explora recetas clásicas y auténticas de diferentes culturas y regiones del mundo.</p>
                        <a href="#" class="btn btn-danger">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar Bootstrap JS (opcional, solo si necesitas componentes de JavaScript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
