<!DOCTYPE html>
<html>
<head>
  <title> Terminos y uso </title>

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
                <a class="nav-link active" href="/consultas">Consultas</a>
                <a class="nav-link active" href="/comercializacion">Comercialización</a>
                
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

  <div class="container mt-5 mb-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white text-center">
            <h1 class="h3 mb-0">Aviso Legal y Condiciones de Uso</h1>
        </div>
        
        <div class="card-body p-4">
            <section class="mb-4">
                <h2 class= "h5 text-warning">1. Información General</h2>
                <p>El presente documento establece los términos y condiciones que regulan el uso del sitio web <strong>Brightness.Store</strong>, dedicado a la comercialización de accesorios femeninos (aros, anillos y complementos). Al navegar y comprar en nuestro sitio, aceptas cumplir con estas normativas.</p>
            </section>

            <section class="mb-4">
                <h2 class="h5 text-warning">2. Servicios y Productos</h2>
                <p>Ofrecemos una selección de accesorios de moda. La percepción visual de los colores y detalles puede variar según el dispositivo del usuario. Todos los precios incluyen los impuestos correspondientes.</p>
            </section>

            <section class="mb-4">
                <h2 class="h5 text-warning">3. Garantía y Soporte Postventa</h2>
                <p>Contamos con una garantía de <strong>30 días</strong> por defectos de fabricación. <strong>Importante:</strong> Por razones de higiene, los aros no tienen cambio, salvo falla evidente de fábrica.</p>
            </section>

            <section class="mb-4">
                <h2 class="h5 text-warning">4. Entregas y Tiempos de Envío</h2>
                <p>Procesamos las órdenes en 24-48 horas hábiles. El tiempo de envío estimado es de 3 a 7 días hábiles, dependiendo de la ubicación geográfica.</p>
            </section>

            <section>
                <h2 class="h5 text-warning">5. Políticas de Privacidad</h2>
                <p>Tus datos (nombre, email, domicilio) se utilizan exclusivamente para procesar tu compra. Contamos con protocolos SSL para garantizar transacciones 100% seguras.</p>
            </section>

            </div>

        <div class="card-footer text-muted text-center">
            Última actualización: Abril 2026 - Brightness.Store
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