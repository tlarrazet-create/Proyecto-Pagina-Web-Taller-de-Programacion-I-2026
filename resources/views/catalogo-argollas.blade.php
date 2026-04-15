<!DOCTYPE html>
<html>
<head>
  <title> Catalogo de argollas</title>

  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
          <div class="navbar-nav flex-wrap justify-content-center gap-2">
            <a class="nav-link" href="/catalogo">Catalogo</a>
            <a class="nav-link active" href="/consultas">Consultas</a>
            <a class="nav-link active" href="/comercializacion">Comercializacion</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="container-fluid d-flex justify-content-center">
    <div class="row">
      <!--Columna izquierda (categorias)-->
      <div class="col-md-2 justify-content-center mb-4">
        <div class="bg-light p-3 rounded">

          <h5 class="mb-3 ">Categorías</h5>

          <div class="dropdown">
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Productos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/catalogo">Todos</a></li>
              <li><a class="dropdown-item" href="/catalogo-abridores">Abridores</a></li>
              <li><a class="dropdown-item" href="/catalogo-argollas">Argollas</a></li>
              <li><a class="dropdown-item" href="/catalogo-escarapelas">Escarapelas</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!--Columna central (productos)-->
      <div class="col-md-10">
        <div class="row">

          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="{{asset('images/products/argolla-clasica.jpeg')}}" class="card-img-top" alt="Producto: Argolla clásica">
              <div class="card-body">
                <h5 class="card-title">Argolla clásica</h5>
                <p class="card-text">De plata 925. Tamaño: 10 mm</p>
                <span class="badge bg-success fs-6 mb-1">Individual:$7.000 / Par:$13.000</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="{{asset('images/products/argolla-vibe.jpeg')}}" class="card-img-top" alt="Producto: Argolla vibe">
              <div class="card-body">
                <h5 class="card-title">Argolla vibe</h5>
                <p class="card-text">De plata 925 con forma de ondas</p>
                <span class="badge bg-success fs-6">$12.000</span>
              </div>
            </div>
          </div>
          

        </div>
      </div>
    </div>
  </div>

  <footer class="footer-custom text-black mt-5 pt-4 pb-2">
    <div class="container">
      <div class="row">

          <!-- Marca -->
          <div class="col-md-4 mb-3">
            <h5>Brightness.Store</h5>
            <p class="small">
              Tienda de accesorios. Calidad y estilo para cada ocasión.
            </p>
          </div>

          <!-- Enlaces -->
          <div class="col-md-4 mb-3">
            <h5>Información</h5>
            <ul class="list-unstyled">
              <li><a href="/terminos-y-uso" class="footer-link">Términos y condiciones</a></li>
              <li><a href="/contactos" class="footer-link">Contactos</a></li>
              <li><a href="/quienes-somos" class="footer-link">Quiénes somos</a></li>
            </ul>
          </div>

          <!-- Redes -->
          <div class="col-md-4 mb-3">
            <h5>Seguinos</h5>
            <a href="https://www.instagram.com/brightness__store/" 
              class="footer-link d-block"
              target="_blank" 
              rel="noopener noreferrer">
              <i class="bi bi-instagram"></i> Instagram
            </a>
          </div>

      </div>

      <!-- Línea inferior -->
      <hr class="border-light">

      <div class="text-center small">
        © 2026 Brightness.Store - Todos los derechos reservados
      </div>
    </div>
  </footer>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>