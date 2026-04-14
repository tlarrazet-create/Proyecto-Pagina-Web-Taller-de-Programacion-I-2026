<!DOCTYPE html>
<html>
<head>
  <title> Catalogos </title>

  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Brightness.Store</a>
      <div class="navbar-nav">
        <a class="nav-link" href="/catalogos">Catalogos</a>
        <a class="nav-link active" href="/consultas">Consultas</a>
        <a class="nav-link active" href="/contactos">Contactos</a>
        <a class="nav-link active" href="/comercializacion">Comercializacion</a>
        <a class="nav-link active" href="/quienes-somos">Quienes somos?</a>
        <a class="nav-link active" href="/terminos-y-uso">Terminos y uso</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1> Utilizar CARDS de Bootstrap para cada 
      producto. Dentro de cada CARD se encontrara 
      la imagen, descripcion, precio y un boton 
      para agregar el producto al carrito (OPCIONAL) 
    </h1>
  </div>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>