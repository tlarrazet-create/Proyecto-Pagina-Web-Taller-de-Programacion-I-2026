@extends('layouts.app') 

@section('titulo', 'Comercialización - Brightness.Store')

@section('contenido')

<div class="container mt-5 mb-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">¿Cómo comprar en BrightnesStore?</h1>
        <p class="lead text-muted">Todo lo que necesitás saber sobre pagos y envíos para tener tus accesorios.</p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 text-center p-4">
                
                <i class="bi bi-credit-card " style="font-size: 3rem; color:   rgb(239, 231, 79);"></i>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Medios de Pago</h4>
                    <p class="card-text text-secondary">Trabajamos con todas las tarjetas de crédito y débito a través de MercadoPago.</p>
                    <ul class="list-unstyled text-start mt-3">
                        <li><i class="bi bi-check2-circle text-info me-2"></i> 3 Cuotas sin interés.</li>
                        <li><i class="bi bi-check2-circle text-info me-2"></i> <strong>15% OFF</strong> abonando con Transferencia Bancaria.</li>
                        <li><i class="bi bi-check2-circle text-info me-2"></i> Efectivo en puntos de pago (Rapipago/PagoFácil)--Retirando en el local.</li>
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
                        <li><i class="bi bi-bicycle text-info me-2"></i> <strong>Cadetería express:</strong> Entregas en el día.</li>
                        <li><i class="bi bi-geo-alt text-info me-2"></i> <strong>Pick-up point:</strong> Retiro gratis por nuestro showroom de 9 a 18hs.</li>
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
@endsection

