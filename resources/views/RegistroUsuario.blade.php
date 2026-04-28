@extends('layouts.app') 

@section('titulo', 'Registro de Usuario - Brightness.Store') 

@section('contenido')
    <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      
      <div class="col-md-4">

        <div class="card border-warning shadow"> 
          <div class="card-body p-4">
            <h2 class="text-center mb-4">Formulario de registro</h2> 
            
            <form action="{{ url('/RegistroUsuario') }}" method="POST">
             @csrf

             <div class="mb-3"> 
               <label class="form-label">Nombre Completo</label>
               <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre" required> 
             </div> 
             
             <div class="mb-3">
               <label class="form-label">Email</label>
               <input type="email" name="email" class="form-control" placeholder="Ingrese su email" required> 
             </div>
               
             <div class="mb-3">
               <label class="form-label">Direccion</label>
               <input type="text" name="direccion" class="form-control" placeholder="Ingrese su direccion" required> 
             </div>

             <div class="mb-3">
               <label class="form-label">Contraseña</label>
               <input type="password" name="contraseña" class="form-control" placeholder="Ingrese su contraseña" required> 
             </div>

             <div class="mb-3">
               <label class="form-label">Repita contraseña</label>
               <input type="password" name="contraseña1" class="form-control" placeholder="Ingrese nuevamente su contraseña" required> 
             </div>
                  
             <div class="d-grid">
               <button type="submit" class="btn btn-dark btn-lg">Confirmar registro</button>
             </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection



  