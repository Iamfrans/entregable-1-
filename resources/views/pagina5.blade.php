<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito de Compras</title>
    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        /* Estilos del carrito */
        #cart-container {
            position: fixed;
            top: 0;
            right: -400px; /* Posición inicial fuera de la pantalla */
            width: 400px;
            height: 100%;
            background-color: #f8f9fa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: right 0.3s ease-in-out; /* Transición suave */
            z-index: 1000; /* Asegura que esté por encima de otros elementos */
            overflow-y: auto; /* Permitir desplazamiento vertical si el contenido es demasiado largo */
        }

        #cart-container.open {
            right: 0; /* Posición abierta en el lado derecho */
        }

        #cart-header {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        #cart-body {
            padding: 20px;
        }

        #cart-footer {
            padding: 10px;
            text-align: center;
        }

        /* Estilos para el botón de abrir/cerrar el carrito */
        #cart-toggle-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1001; /* Asegura que esté por encima del carrito */
        }
    </style>
</head>
<body>
    <!-- Botón para abrir/cerrar el carrito -->
    <button id="cart-toggle-btn" class="btn btn-primary">Carrito</button>

    <!-- Contenedor del carrito -->
    <div id="cart-container">
        <div id="cart-header">
            <h3>Carrito de Compras</h3>
        </div>
        <div id="cart-body">
            <!-- Aquí puedes agregar los elementos del carrito -->
            <p>No hay productos en el carrito.</p>
        </div>
        <div id="cart-footer">
            <button class="btn btn-danger">Vaciar Carrito</button>
        </div>
    </div>

    <!-- Agregar Bootstrap JS (opcional, solo si necesitas componentes de JavaScript) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Script personalizado para abrir/cerrar el carrito -->
    <script>
        $(document).ready(function() {
            // Función para abrir/cerrar el carrito
            $('#cart-toggle-btn').click(function() {
                $('#cart-container').toggleClass('open');
            });
        });
    </script>
</body>
</html>
