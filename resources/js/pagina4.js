$(document).ready(function() {
  // Función para mostrar u ocultar la contraseña
  $('.toggle-password').click(function() {
    var passwordField = $(this).closest('.input-group').find('input');
    var passwordFieldType = passwordField.attr('type');
    if (passwordFieldType === 'password') {
      passwordField.attr('type', 'text');
      $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
    } else {
      passwordField.attr('type', 'password');
      $(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
    }
  });

  // Funcionalidad para el formulario de inicio de sesión
  $('#login-form').submit(function(event) {
    event.preventDefault();
    var email = $('#login-email').val();
    var password = $('#login-password').val();
    // Aquí puedes agregar la lógica de autenticación
    console.log('Email:', email);
    console.log('Password:', password);
    // Simulando redireccionamiento después del inicio de sesión
    window.location.href = "dashboard.html"; // Cambia 'dashboard.html' por la página a la que quieres redirigir después del inicio de sesión
  });

  // Funcionalidad para el formulario de registro
  $('#register-form').submit(function(event) {
    event.preventDefault();
    var email = $('#register-email').val();
    var password = $('#register-password').val();
    // Aquí puedes agregar la lógica de registro
    console.log('Email:', email);
    console.log('Password:', password);
    // Simulando redireccionamiento después del registro
    window.location.href = "dashboard.html"; // Cambia 'dashboard.html' por la página a la que quieres redirigir después del registro
  });
});
