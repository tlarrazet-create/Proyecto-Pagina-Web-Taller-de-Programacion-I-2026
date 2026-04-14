<!DOCTYPE html>
<html>
<head>
  <title>Principal</title>

  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Brightness.Store</a>
      <div class="navbar-nav">
        <a class="nav-link active" href="/catalogos">Catalogos</a>
        <a class="nav-link active" href="/consultas">Consultas</a>
        <a class="nav-link active" href="/contactos">Contactos</a>
        <a class="nav-link active" href="/comercializacion">Comercializacion</a>
        <a class="nav-link active" href="/quienes-somos">Quienes somos?</a>
        <a class="nav-link active" href="/terminos-y-uso">Terminos y uso</a>
      </div>
    </div>
  </nav>
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