<!DOCTYPE html>
<html>
<head>
  <title> Consultas</title>

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
            <a class="nav-link" href="/consultas">Consultas</a>
            <a class="nav-link active" href="/comercializacion">Comercializacion</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      
      <div class="col-md-8">
        
        <h1 class="text-center mb-4"> Formulario de consultas </h1>

        <div class="card shadow"> 
          <div class="card-body p-4">
            <h2 class="text-center mb-4">Formulario de contacto</h2> 
            
            <form action="{{ url('/consultas') }}" method="POST">
             @csrf

             <div class="mb-3"> 
               <label class="form-label">Nombre</label>
               <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre"> 
             </div> 
             
             <div class="mb-3">
               <label class="form-label">Email</label>
               <input type="email" name="email" class="form-control" placeholder="Ingrese su email"> 
             </div>
               
             <div class="mb-3">
               <label class="form-label">Mensaje</label>
               <textarea name="mensaje" class="form-control" rows="4" placeholder="Ingrese su mensaje"></textarea>
             </div>
                  
             <div class="d-grid">
               <button type="submit" class="btn btn-success btn-lg">Enviar mensaje</button>
             </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>

  <footer class="footer-custom text-white mt-5 pt-4 pb-2">
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