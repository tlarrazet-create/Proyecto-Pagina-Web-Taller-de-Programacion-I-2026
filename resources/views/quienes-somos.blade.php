<!DOCTYPE html>
<html>
<head>
  <title> Quienes somos? </title>

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
    
        <div class="row justify-content-center mb-5 text-center">
            
            <h2 class="fw-bold mb-4"><i class="bi bi-clock-history"></i> Nuestra Historia</h2>
            <p class="lead text-muted">
                Brightness viene de brillo <i class="bi bi-stars" style="color: rgb(239, 231, 79);"></i>
            </p>
            <p class="lead text-muted text-justify-custom">
                Un emprendimiento que nació en pandemia un 29 de septiembre de 2020 con el fin de ayudarme a pagar mis estudios y los gastos que tenía. 
                <i class="bi bi-book" style="color: rgb(32, 203, 40);"></i> Quería invertir en algo pero no sabía en qué 
                (no soy buena para la cocina así que eso lo descarté <i class="bi bi-emoji-grimace-fill" style="color: rgb(255, 211, 107);"></i>) 
                Siempre me gustaron los accesorios y me encantó la idea <i class="bi bi-emoji-heart-eyes-fill" style="color: rgb(255, 211, 107);"></i>
            </p>
            <p class="lead text-muted text-justify-custom">
                Este va a ser nuestro sexto año donde aprendí muchas cosas y evolucionamos día a día. <i class="bi bi-heart-fill" style="color: rgb(254, 158, 199);"></i>
                Sigue siendo mi complemento diario porque es algo mío y propio. Además de que me gusta mucho atender las necesidades de mis clientes y ser parte de cada uno/a que me elige.
                <i class="bi bi-emoji-laughing-fill" style="color: rgb(255, 211, 107);"></i>
            </p>
            <p class="lead text-muted text-justify-custom">
                Sueño con algún día abrir mi propio local y crecer aún más en mi pequeño gran emprendimiento <i class="bi bi-shop" style="color: rgb(255, 211, 107);"></i>
                Te invito a conocerme y ser parte de la familia Brightness. <i class="bi bi-people-fill" style="color: rgb(255, 211, 107);"></i>
            </p>
            



            <div class="card h-100 border-0 shadow-sm text-center p-4">
                <div class="mx-auto mb-4" style="width: 160px; height: 160px; overflow: hidden; border-radius: 50%; border: 3px solid #f9f6c4;">
                    <img src="{{ asset('images/creadores/.jpg') }}" alt="Foto de la Fundadora" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body p-0">
                    <h4 class="fw-bold">Monzon Carla</h4>
                    <p class="mb-2" style="color: rgb(241, 232, 42); font-weight: 500;">Fundadora</p>
                </div>
            </div>
            
        </div>


        <div class="row mt-5 pt-4 border-top">
            <h3 class="text-center fw-bold mb-4"><i class="bi bi-tools"></i> Artesanía con Propósito</h3>
            <p class="text-center text-muted mb-5">Nos especializamos en dos pasiones que definen nuestra identidad:</p>
            
            <div class="col-md-6 mb-4">
                <div class="p-4 bg-light rounded-3 h-100 border-start border-4" style="border-color: #f9f6c4 !important;">
                    <h5 class="fw-bold"><i class="bi bi-gem me-2" style="color: rgb(239, 231, 79);"></i> Aros y Argollas de Tendencia</h5>
                    <p class="text-muted mt-3">
                        Diseñados para la mujer moderna que busca un toque de elegancia y sofisticación en su día a día. 
                        Desde aros minimalistas hasta argollas audaces, seleccionamos materiales de calidad hipoalergénicos para asegurar que cada pieza sea tan cómoda como hermosa,
                        permitiéndote brillar sin esfuerzo.
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="p-4 bg-light rounded-3 h-100 border-start border-4" style="border-color: #f9f6c4 !important;">
                    <h5 class="fw-bold"><i class="bi bi-flag me-2" style="color: rgb(239, 231, 79);"></i> Escarapelas con Sello Argentino</h5>
                    <p class="text-muted mt-3">
                        Un homenaje a nuestras raíces y a los símbolos que nos unen. 
                        Nuestras escarapelas son elaboradas artesanalmente con dedicación y orgullo, 
                        pensadas para llevar los colores de la patria con estilo y respeto, 
                        ya sea en un acto escolar o en un evento importante.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-4 text-center border-top">
            <h3 class="fw-bold mb-5"><i class="bi bi-gem"></i> Nuestros Valores</h3>
            
            <div class="col-md-4 mb-4">
                <div class="mb-3">
                    <i class="bi bi-heart-fill fs-1" style="color: rgb(239, 231, 79);"></i>
                </div>
                <h5 class="fw-bold">Calidad y Cuidado</h5>
                <p class="text-muted mt-2">
                    Cada accesorio es seleccionado y ensamblado con amor, garantizando su durabilidad y acabado impecable.
                </p>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="mb-3">
                    <i class="bi bi-geo-alt-fill fs-1" style="color: rgb(239, 231, 79);"></i>
                </div>
                <h5 class="fw-bold">Identidad Local</h5>
                <p class="text-muted mt-2">
                    Nos enorgullece ser un emprendimiento correntino, integrando el espíritu y la calidez de nuestra región en cada diseño.
                </p>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="mb-3">
                    <i class="bi bi-stars fs-1" style="color: rgb(239, 231, 79);"></i>
                </div>
                <h5 class="fw-bold">Conexión Emocional</h5>
                <p class="text-muted mt-2">
                    Queremos que sientas que cada pieza de Brightness.Store fue pensada y creada especialmente para vos.
                </p>
            </div>
        </div>

        <div class="row justify-content-center mb-5 mt-2 g-4 border-top">
            <h3 class="text-center fw-bold mb-4"><i class="bi bi-code-slash"></i> Equipo de Desarrollo Web</h3>
            <p class="text-center text-muted mb-5">Encargados del diseño e implementación de la plataforma digital:</p>

            <div class="col-md-5">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mx-auto mb-4" style="width: 160px; height: 160px; overflow: hidden; border-radius: 50%; border: 3px solid #f9f6c4;">
                        <img src="{{ asset('images/creadores/FotoNico.jpg') }}" alt="Foto del Programador 1" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-body p-0">
                        <h4 class="fw-bold">Pannunzio Nicolas</h4>
                        <p class="mb-2" style="color: rgb(241, 232, 42); font-weight: 500;">Programador / Diseñador Web</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="mx-auto mb-4" style="width: 160px; height: 160px; overflow: hidden; border-radius: 50%; border: 3px solid #f9f6c4;">
                        <img src="{{ asset('images/creadores/4x4(2).jpeg') }}" alt="Foto del Programador 2" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-body p-0">
                        <h4 class="fw-bold">Larrazet Tomas</h4>
                        <p class="mb-2" style="color: rgb(241, 232, 42); font-weight: 500;">Programador / Diseñador Web</p>
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