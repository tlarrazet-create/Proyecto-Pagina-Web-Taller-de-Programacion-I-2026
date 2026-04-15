<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Envío Exitoso</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
  <header class="header-custom py-3 mb-4">
    <div class="container-fluid d-flex flex-column align-items-center">

      <!-- Logo centrado -->
      <img src="{{ asset('images/logo/logo.jpeg') }}" 
      alt="Logo de Brightness.Store" 
      class="img-fluid mb-2"
      style="max-height: 140px;">
    
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand active" href="/">Brightness.Store</a>
          <div class="navbar-nav d-flex gap-3">
            <a class="nav-link active" href="/catalogos">Catalogos</a>
            <a class="nav-link active" href="/consultas">Consultas</a>
            <a class="nav-link" href="/contactos">Contactos</a>
            <a class="nav-link active" href="/comercializacion">Comercializacion</a>
            <a class="nav-link active" href="/quienes-somos">Quienes somos?</a>
            <a class="nav-link active" href="/terminos-y-uso">Terminos y uso</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-success shadow">
                <div class="card-body text-center p-5">
                    <h2 class="text-success mb-4">¡Éxito!</h2>

                        {{-- Mensaje personalizado con los datos recibidos del controlador --}}
                        <p class="lead">
                            Hola <strong>{{ $nombre }}</strong>, qué bueno recibir tu mensaje. 
                            Un miembro del equipo de ventas se pondrá en contacto con vos al correo: 
                            <strong>{{ $email }}</strong>.
                        </p>

                        <p class="mt-4">¡Muchas gracias!</p>

                    <a href="/" class="btn btn-outline-success mt-3">Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>