<!DOCTYPE html>
<html>
<head>
  <title> Catalogos </title>

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
          <a class="navbar-brand active" href="/">Brightness.Store</a>
          <div class="navbar-nav d-flex gap-3">
            <a class="nav-link" href="/catalogos">Catalogos</a>
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
    <div class="card" style="width: 18rem;">
      <img src="{{asset('images/products/escarapela-bandera-mini.jpeg')}}" class="card-img-top" alt="Producto: Escarapela bandera mini">
      <div class="card-body">
      <h5 class="card-title">Escarapela bandera mini</h5>
      <p class="card-text">De acero. Cierre pin.</p>
      <span class="badge bg-success fs-6">$2.700</span>
      </div>
    </div>
  </div>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>