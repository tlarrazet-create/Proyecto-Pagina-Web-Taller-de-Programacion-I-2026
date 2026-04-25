@extends('layouts.app') {{-- Esto dice: "Usá el molde de app.blade.php" --}}

@section('titulo', 'Abridores - Brightness.Store') {{-- Cambia el nombre de la pestaña --}}

@section('contenido')
  <div class="container-fluid d-flex justify-content-center">
    <div class="row">
      <!--Columna izquierda (categorias)-->
      <div class="col-md-2 justify-content-center mb-4">
        <div class="bg-light p-3 rounded">

          <h5 class="mb-3 ">Categorías</h5>

          <div class="dropdown">
            <a class="btn btn-warning dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Productos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/catalogo">Todos</a></li>
              <li><a class="dropdown-item" href="/catalogo-abridores">Abridores</a></li>
              <li><a class="dropdown-item" href="/catalogo-argollas">Argollas</a></li>
              <li><a class="dropdown-item" href="/catalogo-escarapelas">Escarapelas</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!--Columna central (productos)-->
      <div class="col-md-10">
        <div class="row">

          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="{{asset('images/products/abridor-heart-black.jpeg')}}" class="card-img-top" alt="Producto: Abridor heart black">
              <div class="card-body">
                <h5 class="card-title">Abridor heart black</h5>
                <p class="card-text">Laminados en plata.</p>
                <span class="badge bg-success fs-6">$4.000</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="{{asset('images/products/abridor-heart-celeste.jpeg')}}" class="card-img-top" alt="Producto: Abridor heart celeste">
              <div class="card-body">
                <h5 class="card-title">Abridor heart celeste</h5>
                <p class="card-text">Laminados en plata.</p>
                <span class="badge bg-success fs-6">$4.000</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="{{asset('images/products/abridor-heart-fucsia.jpeg')}}" class="card-img-top" alt="Producto: Abridor heart fucsia">
              <div class="card-body">
                <h5 class="card-title">Abridor heart fucsia</h5>
                <p class="card-text">Laminados en plata.</p>
                <span class="badge bg-success fs-6">$4.000</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection

