<!DOCTYPE html>
<html>
<head>
  <title> Consultas</title>

  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
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
            <a class="nav-link" href="/consultas">Consultas</a>
            <a class="nav-link active" href="/contactos">Contactos</a>
            <a class="nav-link active" href="/comercializacion">Comercializacion</a>
            <a class="nav-link active" href="/quienes-somos">Quienes somos?</a>
            <a class="nav-link active" href="/terminos-y-uso">Terminos y uso</a>
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
            <h2 class="mb-4">Formulario de contacto</h2> 
            
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




  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>