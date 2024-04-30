<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Noticias</title>
    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
            color: #343a40; /* Color del texto */
        }
        .jumbotron {
            background-color: #007bff; /* Color de fondo del jumbotron */
            color: #ffffff; /* Color del texto del jumbotron */
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
        .btn-primary {
            background-color: #007bff; /* Color de fondo del botón */
            border-color: #007bff; /* Color del borde del botón */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Cambio de color al pasar el ratón sobre el botón */
            border-color: #0056b3; /* Cambio de color del borde al pasar el ratón sobre el botón */
        }
        .navbar {
            background-color: #007bff; /* Color de fondo de la barra de navegación */
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
            <a class="navbar-brand" href="#">Página de Noticias</a>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">¡Últimas Noticias!</h1>
        <p class="lead">Mantente informado con las noticias más recientes de todo el mundo.</p>
        <hr class="my-4">
        <p>Explora nuestras categorías y encuentra noticias interesantes para ti.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Explorar</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x200/?politics" class="card-img-top" alt="Política">
                    <div class="card-body">
                        <h5 class="card-title">Política</h5>
                        <p class="card-text">Las últimas noticias sobre política nacional e internacional.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x200/?technology" class="card-img-top" alt="Tecnología">
                    <div class="card-body">
                        <h5 class="card-title">Tecnología</h5>
                        <p class="card-text">Descubre las innovaciones tecnológicas y los últimos gadgets.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x200/?sports" class="card-img-top" alt="Deportes">
                    <div class="card-body">
                        <h5 class="card-title">Deportes</h5>
                        <p class="card-text">Resultados, análisis y comentarios de los eventos deportivos más importantes.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar Bootstrap JS (opcional, solo si necesitas componentes de JavaScript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
