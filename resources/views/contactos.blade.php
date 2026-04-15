<!DOCTYPE html>
<html>
<head>
  <title>Contactos Institucionales - Brightness.Store</title>

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
            <a class="nav-link active" href="/catalogos">Catalogos</a>
            <a class="nav-link active" href="/consultas">Consultas</a>
            <a class="nav-link" href="/contactos">Contactos</a>
            <a class="nav-link active" href="/comercializacion">Comercializacion</a>
            <a class="nav-link active" href="/quienes-somos">Quienes somos?</a>
            <a class="nav-link active" href="/terminos-y-uso">Terminos y uso</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-4">
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

                    <div class="d-flex align-items-start mb-4">
                        <i class="bi bi-geo-alt-fill text-primary fs-3 me-3"></i>
                        <div>
                            <h5 class="mb-1">Domicilio Legal</h5>
                            <p class="text-secondary">Placido Martinez 1700, Corrientes Capital, Argentina (CP 3400)</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <i class="bi bi-telephone-fill text-primary fs-3 me-3"></i>
                        <div>
                            <h5 class="mb-1">Teléfonos de Atención</h5>
                            <p class="text-secondary">
                                Administración: +xxxxxxxxxx <br>
                                Ventas: +xxxxxxxx
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <i class="bi bi-envelope-at-fill text-primary fs-3 me-3"></i>
                        <div>
                            <h5 class="mb-1">Correo Electrónico</h5>
                            <p class="text-secondary">carla_monzon4@hotmail.com</p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="text-center">
                        <h5 class="mb-3">Otros canales de contacto</h5>
                        <div class="d-grid gap-2 d-md-block">
                            <a href="https://wa.me/3794944161" class="btn btn-success me-md-2">
                                <i class="bi bi-whatsapp"></i> WhatsApp Ventas
                            </a>
                            <a href="https://www.instagram.com/brightness__store/" 
                               class="btn btn-danger" 
                               target="_blank" 
                               rel="noopener noreferrer">>
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

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>