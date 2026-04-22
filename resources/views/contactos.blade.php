<!DOCTYPE html>
<html>
<head>
  <title>Contactos Institucionales - Brightness.Store</title>

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
                <a class="nav-link active" href="/contactos">Contactos</a>
                <a class="nav-link active" href="/comercializacion">Comercialización</a>
                <a class="nav-link active" href="/quienes-somos">Quienes Somos</a>
                <a class="nav-link active" href="/terminos-y-uso">Terminos y condiciones</a>
                
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header header-custom text-dark text-center py-4">
                    <h1 class="h3 mb-0">Información de Contacto</h1>
                </div>
                <div class="card-body p-5">
                    
                    <div class="row mb-4">
                        <div class="col-sm-6 mb-3">
                            <h5 class="text-muted small text-uppercase fw-bold">Razón Social</h5>
                            <p class="fs-5">Brightness (Emprendimiento de ventas de accesorios)</p>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <h5 class="text-muted small text-uppercase fw-bold">Nombre del Titular</h5>
                            <p class="fs-5">Carla Aylen Monzon</p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex flex-column flex-md-row align-items-start mb-4">
                        <i class="bi bi-geo-alt-fill fs-3 me-3" style="color:   rgb(239, 231, 79);"></i>
                        <div>
                            <h5 class="mb-1">Domicilio Legal</h5>
                            <p class="text-secondary">Placido Martinez 1700, Corrientes Capital, Argentina (CP 3400)</p>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-md-row align-items-start mb-4">
                        <i class="bi bi-telephone-fill  fs-3 me-3" style="color:   rgb(239, 231, 79);"></i>
                        <div>
                            <h5 class="mb-1">Teléfonos de Atención</h5>
                            <p class="text-secondary">
                                Administración: +549 3794 854761 <br>
                                Ventas: +549 3794 514267
                            </p>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-md-row align-items-start mb-4">
                        <i class="bi bi-envelope-at-fill fs-3 me-3"style="color:  rgb(239, 231, 79);"></i>
                        <div>
                            <h5 class="mb-1">Correo Electrónico</h5>
                            <p class="text-secondary">carla_monzon4@hotmail.com</p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="text-center">
                        <h5 class="mb-3">Otros canales de contacto</h5>
                        <div class="d-grid gap-2 d-md-block">
                            <a href="https://wa.me/3794944161" 
                               class="btn btn-success w-100 mb-2"
                               target="_blank"
                               rel="noopener noreferrer">
                                <i class="bi bi-whatsapp"></i> WhatsApp Ventas
                            </a>
                            <a href="https://www.instagram.com/brightness__store/" 
                               class="btn btn-danger w-100 mb-2" 
                               target="_blank" 
                               rel="noopener noreferrer">
                                <i class="bi bi-instagram"></i> Instagram
                            </a>
                        </div>
                    </div>

                </div>
                <div class="card-footer bg-light text-center py-3">
                    <small class="text-muted">Horario de atención: Lunes a Sabado de 09:00 a 18:00 hs.</small>
                </div>
            </div>
        </div>
    </div>
    </div>

     <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      
      <div class="col-md-8">
        
        <h1 class="text-center mb-3">Formulario de Consultas</h1>
          <p class="text-center lead text-muted mb-5 mx-auto" style="max-width: 700px;">
              En Brightness.Store estamos para ayudarte en todo momento durante tu experiencia de compra. 
              Dejanos tu mensaje si tenés alguna duda sobre algún producto, métodos de pago, compras mayoristas, etc.
          </p>

        <div class="card border-warning shadow"> 
          <div class="card-body p-4">
            <h2 class="text-center mb-4">Formulario de contacto</h2> 
            
            <form action="{{ url('/contactos') }}" method="POST">
             @csrf

             <div class="mb-3"> 
               <label class="form-label">Nombre</label>
               <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre" required> 
             </div> 
             
             <div class="mb-3">
               <label class="form-label">Email</label>
               <input type="email" name="email" class="form-control" placeholder="Ingrese su email" required> 
             </div>
               
             <div class="mb-3">
               <label class="form-label">Mensaje</label>
               <textarea name="mensaje" class="form-control" rows="4" placeholder="Ingrese su mensaje" required></textarea>
             </div>
                  
             <div class="d-grid">
               <button type="submit" class="btn btn-dark btn-lg">Enviar mensaje</button>
             </div>
            </form>

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