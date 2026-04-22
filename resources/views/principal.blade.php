<!DOCTYPE html>
<html>
<head>
  <title>Principal</title>

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

    <section class="py-5 bg-white">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="display-6 fw-bold">Brightness.Store</h2>
                <hr class="mx-auto" style="width: 50px; height: 3px; background-color: #000; opacity: 1;">
                <p class="lead text-muted">
                    Tu estilo es único, y tus accesorios también deberían serlo. 
                    Elegí piezas que no solo resalten tu brillo natural, sino que te hagan sentir especial en cada momento del día. 
                    En Brightness.Store trabajamos con pasión para ofrecerte lo mejor de dos mundos: 
                    somos especialistas en argollas de tendencia para que deslumbres donde vayas, 
                    y creadores de escarapelas con un profundo sello argentino, 
                    para que lleves nuestras raíces con orgullo. 
                    Desde el primer destello hasta el último detalle, estamos acá para iluminar tu look.
                </p>
            </div>
        </div>
    </div>
  </section>

  <div class="container mt-3">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Nuestros Destacados</h2>
        <p class="text-muted">Descubrí las piezas más elegidas de Brightness.Store</p>
    </div>        
    <div class="row justify-content-center">
    <div class="col-md-10">
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/products/escarapela-bandera-mini.jpeg') }}" class="d-block w-100" alt="Escarapela Bandera Mini">
                    </div>
                    
                    <div class="carousel-item">
                        <img src="{{ asset('images/products/argolla-clasica.jpeg') }}" class="d-block w-100" alt="Argolla Clásica">                    
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('images/products/escarapela-circular-mini.jpeg')}}" class="d-block w-100" alt="Argolla Clásica">
                    </div>
                    
                    <div class="carousel-item">
                        <img src="{{ asset('images/products/argolla-vibe.jpeg') }}" class="d-block w-100" alt="Argolla Vibe">
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>
  </div>

  <section class="py-5" style="background-color: rgb(249, 246, 196);">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Lo que dicen nuestros clientes</h2>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100">
                    <i class="bi bi-quote fs-1 text-muted"></i>
                    <p class="fst-italic my-3">
                        "Las argollas son hermosas y no me dan alergia por el acero quirúrgico. ¡Súper recomendadas para pieles sensibles!"
                    </p>
                    <hr class="w-25 mx-auto">
                    <h6 class="fw-bold mb-0">— Lucía G.</h6>
                    <small class="text-muted">Corrientes Capital</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100">
                    <i class="bi bi-quote fs-1 text-muted"></i>
                    <p class="fst-italic my-3">
                        "Compré escarapelas para el acto del colegio de mis hijos y son soñadas. El detalle artesanal se nota a simple vista."
                    </p>
                    <hr class="w-25 mx-auto">
                    <h6 class="fw-bold mb-0">— Martina S.</h6>
                    <small class="text-muted">Resistencia, Chaco</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100">
                    <i class="bi bi-quote fs-1 text-muted"></i>
                    <p class="fst-italic my-3">
                        "El envío llegó rapidísimo a Buenos Aires y el packaging es un amor. Ideal para hacer un regalo especial."
                    </p>
                    <hr class="w-25 mx-auto">
                    <h6 class="fw-bold mb-0">— Valeria R.</h6>
                    <small class="text-muted">Buenos Aires</small>
                </div>
            </div>
              <div class="mt-4">
                  <a href="/catalogo" class="btn btn-dark px-4 py-2 rounded-pill">Ver Catálogo Completo</a>
              </div>
        </div>
    </div>
  </section>

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

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>.
</body>
</html>