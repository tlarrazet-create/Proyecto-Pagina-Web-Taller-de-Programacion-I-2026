<!DOCTYPE html>
<html>
<head>
  <title> Terminos y uso </title>

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
          <div class="navbar-nav d-flex gap-3">
            <a class="nav-link active" href="/catalogo">Catalogo</a>
            <a class="nav-link active" href="/consultas">Consultas</a>
            <a class="nav-link active" href="/comercializacion">Comercializacion</a>
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
                <h2 class="h5 text-primary">1. Información General</h2>
                <p>El presente documento establece los términos y condiciones que regulan el uso del sitio web <strong>Brightness.Store</strong>, dedicado a la comercialización de accesorios femeninos (aros, anillos y complementos). Al navegar y comprar en nuestro sitio, aceptas cumplir con estas normativas.</p>
            </section>

            <section class="mb-4">
                <h2 class="h5 text-primary">2. Servicios y Productos</h2>
                <p>Ofrecemos una selección de accesorios de moda. La percepción visual de los colores y detalles puede variar según el dispositivo del usuario. Todos los precios incluyen los impuestos correspondientes.</p>
            </section>

            <section class="mb-4">
                <h2 class="h5 text-primary">3. Garantía y Soporte Postventa</h2>
                <p>Contamos con una garantía de <strong>30 días</strong> por defectos de fabricación. <strong>Importante:</strong> Por razones de higiene, los aros no tienen cambio, salvo falla evidente de fábrica.</p>
            </section>

            <section class="mb-4">
                <h2 class="h5 text-primary">4. Entregas y Tiempos de Envío</h2>
                <p>Procesamos las órdenes en 24-48 horas hábiles. El tiempo de envío estimado es de 3 a 7 días hábiles, dependiendo de la ubicación geográfica.</p>
            </section>

            <section>
                <h2 class="h5 text-primary">5. Políticas de Privacidad</h2>
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