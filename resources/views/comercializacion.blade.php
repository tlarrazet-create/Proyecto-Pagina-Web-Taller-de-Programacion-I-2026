<!DOCTYPE html>
<html>
<head>
  <title> Comercializacion </title>

  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body class="bg-light">
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
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">¿Cómo comprar en BrightnesStore?</h1>
        <p class="lead text-muted">Todo lo que necesitás saber sobre pagos y envíos para tener tus accesorios.</p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 text-center p-4">
                
                <i class="bi bi-credit-card " style="font-size: 3rem; color:   rgb(239, 231, 79);"></i>
                <div class="card-body"
                    <h4 class="card-title fw-bold">Medios de Pago</h4>
                    <p class="card-text text-secondary">Trabajamos con todas las tarjetas de crédito y débito a través de MercadoPago.</p>
                    <ul class="list-unstyled text-start mt-3">
                        <li><i class="bi bi-check2-circle text-success me-2"></i> 3 Cuotas sin interés.</li>
                        <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>15% OFF</strong> abonando con Transferencia Bancaria.</li>
                        <li><i class="bi bi-check2-circle text-success me-2"></i> Efectivo en puntos de pago (Rapipago/PagoFácil)--Retirando en el local.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 text-center p-4">
                <i class="bi bi-truck" style="font-size: 3rem; color:   rgb(239, 231, 79);"></i>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Envíos a todo el país</h4>
                    <p class="card-text text-secondary">Llevamos nuestros accesorios a la puerta de tu casa estés donde estés.</p>
                    <ul class="list-unstyled text-start mt-3">
                        <li><i class="bi bi-box-seam text-info me-2"></i> Despachos por Correo Argentino o Andreani.</li>
                        <li><i class="bi bi-clock-history text-info me-2"></i> Demora de 3 a 6 días hábiles.</li>
                        <li><i class="bi bi-shield-check text-info me-2"></i> Todos los paquetes viajan asegurados.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 text-center p-4">
                <i class="bi bi-shop" style="font-size: 3rem;color:   rgb(239, 231, 79);"></i>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Entregas Locales</h4>
                    <p class="card-text text-secondary">Si estás en Corrientes Capital, podés tener tu pedido más rápido.</p>
                    <ul class="list-unstyled text-start mt-3">
                        <li><i class="bi bi-bicycle text-warning me-2"></i> <strong>Cadetería express:</strong> Entregas en el día.</li>
                        <li><i class="bi bi-geo-alt text-warning me-2"></i> <strong>Pick-up point:</strong> Retiro gratis por nuestro showroom de 9 a 18hs.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <h3 class="fw-bold mb-4">Información Útil (Preguntas Frecuentes)</h3>
<div class="accordion shadow-sm" id="acordeonComercializacion">
    
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                ¿Cómo es el proceso de empaquetado?
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#acordeonComercializacion">
            <div class="accordion-body">
                Todos nuestros anillos y aros se envían en nuestro <strong>packaging exclusivo</strong> (cajitas forradas y bolsita de tela), ideal para regalo y para proteger el producto durante el viaje para que llegue en perfectas condiciones.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                ¿Hacen ventas por mayor?
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#acordeonComercializacion">
            <div class="accordion-body">
                Sí, ofrecemos precios preferenciales para compras mayoristas. La compra mínima inicial es de 20 artículos. Si te interesa revender nuestros productos, por favor envíanos un mensaje a través de la sección de <strong>Consultas</strong>.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                ¿Qué pasa si el anillo no es mi talle?
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#acordeonComercializacion">
            <div class="accordion-body">
                En nuestra sección de Catálogos vas a encontrar una guía para medir tu dedo. De todos modos, si el producto no te queda bien, tenés 10 días para solicitar un cambio de talle (el costo del envío de regreso corre por cuenta del cliente).
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                ¿Cómo cuido mis accesorios para que brillen más tiempo?
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#acordeonComercializacion">
            <div class="accordion-body">
                Para que tus argollas y accesorios se mantengan impecables, te recomendamos no mojarlos, evitar el contacto directo con perfumes o cremas, y guardarlos en un lugar seco cuando no los uses.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                ¿Cómo puedo hacer el seguimiento de mi compra?
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#acordeonComercializacion">
            <div class="accordion-body">
                Una vez que despachamos tu paquete desde Corrientes, te vamos a enviar un mensaje por WhatsApp o correo electrónico con el número de seguimiento (tracking) y el link del correo para que sepas exactamente dónde está tu pedido en todo momento.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                ¿Qué pasa si viene el correo y no estoy en mi casa?
            </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#acordeonComercializacion">
            <div class="accordion-body">
                No te preocupes. El correo suele hacer una segunda visita al domicilio. Si nuevamente no te encuentran, el paquete quedará esperando en la sucursal más cercana durante 5 días hábiles para que pases a retirarlo con tu DNI.
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