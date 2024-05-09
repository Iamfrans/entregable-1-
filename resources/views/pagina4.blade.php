<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zapatillas Urbanas - Login/Register</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="..\resources\css\pagina4.css">
</head>
<body>
  <div class="background-image"></div>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-dark text-white">
            <h3 class="text-center">Inicia Sesión</h3>
          </div>
          <div class="card-body">
            <form id="login-form">
              <div class="form-group">
                <label for="login-email">Correo Electrónico</label>
                <input type="email" class="form-control" id="login-email" required>
              </div>
              <div class="form-group">
                <label for="login-password">Contraseña</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="login-password" required>
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary toggle-password" type="button">
                      <i class="fa fa-eye-slash"></i>
                    </button>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="card">
          <div class="card-header bg-dark text-white">
            <h3 class="text-center">Registro</h3>
          </div>
          <div class="card-body">
            <form id="register-form">
              <div class="form-group">
                <label for="register-email">Correo Electrónico</label>
                <input type="email" class="form-control" id="register-email" required>
              </div>
              <div class="form-group">
                <label for="register-password">Contraseña</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="register-password" required>
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary toggle-password" type="button">
                      <i class="fa fa-eye-slash"></i>
                    </button>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-success btn-block">Registrarse</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <script src="..\resources\js\pagina4.js"></script>
</body>
</html>
