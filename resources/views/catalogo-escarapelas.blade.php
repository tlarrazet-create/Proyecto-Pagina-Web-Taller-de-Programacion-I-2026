<!DOCTYPE html>
<html>
<head>
  <title> Catalogo de escarapelas</title>

  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
  <header class="header-custom">
    <div class="bg-primary text-white py-1">
        <div id="miniCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <small><i class="bi bi-truck me-2"></i> Envíos gratis en compras superiores a $45.000</small>
                </div>
                <div class="carousel-item text-center">
                    <small><i class="bi bi-credit-card me-2"></i> 3 Cuotas sin interés con todas las tarjetas</small>
                </div>
                <div class="carousel-item text-center">
                    <small><i class="bi bi-gem me-2"></i> 15% OFF abonando por transferencia</small>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex flex-column align-items-center py-3">
        <a href="/">
            <img src="{{ asset('images/logo/logo.jpeg') }}" 
                 alt="Logo de Brightness.Store" 
                 class="img-fluid mb-2"
                 style="max-height: 140px;">
        </a>

        <nav class="navbar navbar-expand-lg navbar-light w-100">
        <div class="container flex-column justify-content-center">
          
          <button class="navbar-toggler mb-2 border-0 shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Abrir menú">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-center w-100" id="menuNavegacion">
            <div class="navbar-nav align-items-center text-center gap-3 gap-lg-4 pb-3 pb-lg-0">
              
              <a class="nav-link active" href="/catalogo">Catálogo</a>
                <a class="nav-link active" href="/consultas">Contactos</a>
                <a class="nav-link active" href="/comercializacion">Comercialización</a>
                <a class="nav-link active" href="/catalogo">Quienes Somos</a>
                <a class="nav-link active" href="/consultas">Terminos y condiciones</a>
              
              <div class="vr d-none d-lg-block" style="height: 25px; opacity: 0.2;"></div>
              
              <hr class="d-lg-none w-50 mx-auto my-1" style="opacity: 0.1;">

              <a href="/logIn" class="btn btn-outline-dark rounded-pill px-4 fw-bold shadow-sm d-inline-flex align-items-center mt-2 mt-lg-0">
                <i class="bi bi-person-circle me-2 fs-5"></i> Ingresar
              </a>

            </div>
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
            <a class="btn btn-warning dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <img src="{{asset('images/products/escarapela-bandera-mini.jpeg')}}" class="card-img-top" alt="Producto: Escarapela bandera mini">
              <div class="card-body">
                <h5 class="card-title">Escarapela bandera mini</h5>
                <p class="card-text">De acero. Cierre pin.</p>
                <span class="badge bg-success fs-6">$2.700</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="{{asset('images/products/escarapela-circular-mini.jpeg')}}" class="card-img-top" alt="Producto: Escarapela circular mini">
              <div class="card-body">
                <h5 class="card-title">Escarapela circular mini</h5>
                <p class="card-text">De acero. Cierre pin.</p>
                <span class="badge bg-success fs-6">$2.700</span>
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
            <h5><a href="/" class="footer-link"> Brightness.Store</h5></a>
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