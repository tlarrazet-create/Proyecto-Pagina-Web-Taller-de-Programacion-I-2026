<!DOCTYPE html>
<html>
<head>
  <title> Catalogos </title>

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
          <div class="navbar-nav flex-wrap justify-content-center gap-2">
            <a class="nav-link" href="/catalogos">Catalogos</a>
            <a class="nav-link active" href="/consultas">Consultas</a>
            <a class="nav-link active" href="/contactos">Contactos</a>
            <a class="nav-link active" href="/comercializacion">Comercializacion</a>
            <a class="nav-link active" href="/quienes-somos">Quienes somos?</a>
            <a class="nav-link active" href="/terminos-y-uso">Terminos y uso</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="container-fluid d-flex justify-content-center">
    <div class="row">
      <!--Columna izquierda (categorias)-->
      <div class="col-md-3">
        <div class="bg-light p-3 rounded">

          <h5 class="mb-3">Categorías</h5>

          <ul class="list-group">
            <li class="list-group-item">
              Productos
              <ul class="list-group mt-2">
                <li>Abridores</li>
                <li>Argollas</li>
                <li>Escarapelas</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <!--Columna central (productos)-->
      <div class="col-md-9">
        <div class="row">

          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="{{asset('images/products/escarapela-bandera-mini.jpeg')}}" class="card-img-top" alt="Producto: Escarapela bandera mini">
              <div class="card-body">
                <h5 class="card-title">Escarapela bandera mini</h5>
                <p class="card-text">De acero. Cierre pin.</p>
                <span class="badge bg-success fs-6">$2.700</span>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="{{asset('images/products/escarapela-circular-mini.jpeg')}}" class="card-img-top" alt="Producto: Escarapela circular mini">
              <div class="card-body">
                <h5 class="card-title">Escarapela circular mini</h5>
                <p class="card-text">De acero. Cierre pin.</p>
                <span class="badge bg-success fs-6">$2.700</span>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="{{asset('images/products/abridor-heart-black.jpeg')}}" class="card-img-top" alt="Producto: Abridor heart black">
              <div class="card-body">
                <h5 class="card-title">Abridor heart black</h5>
                <p class="card-text">Laminados en plata.</p>
                <span class="badge bg-success fs-6">$4.000</span>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="{{asset('images/products/abridor-heart-celeste.jpeg')}}" class="card-img-top" alt="Producto: Abridor heart celeste">
              <div class="card-body">
                <h5 class="card-title">Abridor heart celeste</h5>
                <p class="card-text">Laminados en plata.</p>
                <span class="badge bg-success fs-6">$4.000</span>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="{{asset('images/products/abridor-heart-fucsia.jpeg')}}" class="card-img-top" alt="Producto: Abridor heart fucsia">
              <div class="card-body">
                <h5 class="card-title">Abridor heart fucsia</h5>
                <p class="card-text">Laminados en plata.</p>
                <span class="badge bg-success fs-6">$4.000</span>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="{{asset('images/products/argolla-clasica.jpeg')}}" class="card-img-top" alt="Producto: Argolla clásica">
              <div class="card-body">
                <h5 class="card-title">Argolla clásica</h5>
                <p class="card-text">De plata 925. Tamaño: 10 mm</p>
                <span class="badge bg-success fs-6 mb-1">Individual:$7.000</span>
                <span class="badge bg-success fs-6">Par:$13.000</span>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="{{asset('images/products/argolla-vibe.jpeg')}}" class="card-img-top" alt="Producto: Argolla vibe">
              <div class="card-body">
                <h5 class="card-title">Argolla vibe</h5>
                <p class="card-text">De plata 925 con forma de ondas</p>
                <span class="badge bg-success fs-6">$12.000</span>
              </div>
            </div>
          </div>
          

        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>