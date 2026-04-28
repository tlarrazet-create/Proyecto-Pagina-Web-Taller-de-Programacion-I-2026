@extends('layouts.app') 

@section('titulo', 'Contactos - Brightness.Store')

@section('contenido')
  
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
@endsection
