<!DOCTYPE html>
<html>
<head>
  <title>Principal</title>

  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
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
          <a class="navbar-brand" href="/">Brightness.Store</a>
          <div class="navbar-nav d-flex gap-3">
            <a class="nav-link active" href="/catalogos">Catalogos</a>
            <a class="nav-link active" href="/consultas">Consultas</a>
            <a class="nav-link active" href="/contactos">Contactos</a>
            <a class="nav-link active" href="/comercializacion">Comercializacion</a>
            <a class="nav-link active" href="/quienes-somos">Quienes somos?</a>
            <a class="nav-link active" href="/terminos-y-uso">Terminos y uso</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="container">
    <h1> Bienvenido a la página principal</h1>
    <p> Esta es la página principal de nuestro sitio web. 
      Aquí puedes encontrar información sobre nuestros servicios, 
      productos y mucho más. Explora nuestro sitio para descubrir 
      todo lo que tenemos para ofrecerte. ¡Gracias por visitarnos!
    </p>
  </div>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>