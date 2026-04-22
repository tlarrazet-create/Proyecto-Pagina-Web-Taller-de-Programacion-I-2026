<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Envío Exitoso</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
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

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-warning shadow">
                <div class="card-body text-center p-5">
                    <i class="bi bi-check-circle-fill text-success" style="font-size: 5rem;"></i>
                    <h2 class="text-warning mb-4">¡Éxito!</h2>

                        {{-- Mensaje personalizado con los datos recibidos del controlador --}}
                        <p class="lead">
                            Hola <strong>{{ $nombre }}</strong>, encantados de estar en contacto, un asesor comercial se contactara contigo 
                            al mail <strong>{{ $email}}, saludos!
                            </strong> 
                        </p>

                        <p class="mt-4">¡Muchas gracias!</p>

                    <a href="/" class="btn btn-outline-warning mt-3">Volver al inicio</a>
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