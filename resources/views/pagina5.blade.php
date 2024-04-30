<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Turismo</title>
    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
            color: #343a40; /* Color del texto */
        }
        .jumbotron {
            background-color: #212529; /* Color de fondo del jumbotron */
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
            background-color: #343a40; /* Color de fondo de la barra de navegación */
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
            <a class="navbar-brand" href="#">Página de Turismo</a>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">¡Descubre Destinos Increíbles!</h1>
        <p class="lead">Explora los lugares más fascinantes del mundo y planifica tu próximo viaje.</p>
        <hr class="my-4">
        <p>Sumérgete en la cultura, la historia y la belleza de diferentes destinos turísticos.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Explorar</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x200/?travel" class="card-img-top" alt="Travel Destination">
                    <div class="card-body">
                        <h5 class="card-title">Destinos Exóticos</h5>
                        <p class="card-text">Descubre lugares exóticos y lejanos que te dejarán sin aliento.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x200/?beach" class="card-img-top" alt="Beach Destination">
                    <div class="card-body">
                        <h5 class="card-title">Playas Paradisíacas</h5>
                        <p class="card-text">Relájate en playas de aguas cristalinas y arenas blancas.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x200/?mountain" class="card-img-top" alt="Mountain Destination">
                    <div class="card-body">
                        <h5 class="card-title">Montañas Majestuosas</h5>
                        <p class="card-text">Explora las cumbres más altas y disfruta de vistas panorámicas impresionantes.</p>
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
