@extends('layouts.app') {{-- Esto dice: "Usá el molde de app.blade.php" --}}

@section('titulo', 'Anillos - Brightness.Store') {{-- Cambia el nombre de la pestaña --}}

@section('contenido')
  <div class="container-fluid d-flex justify-content-center">
    <div class="row w-100">
      <!--Columna izquierda (categorias)-->
      <div class="col-md-2 justify-content-center mb-4">
        <div class="sticky-top" style="top: 20px; z-index: 1020;">
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
                <li><a class="dropdown-item" href="/catalogo-aros">Aros</a></li>
                <li><a class="dropdown-item" href="/catalogo-anillos">Anillos</a></li>
                <li><a class="dropdown-item" href="/catalogo-pulseras">Pulseras</a></li>
                <li><a class="dropdown-item" href="/catalogo-conjuntos">Conjuntos</a></li>
                <li><a class="dropdown-item" href="/catalogo-broches">Broches</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!--Columna central (productos)-->
      <div class="col-md-10">
        <div class="row w-100">

          <div class="col-md-3 mb-4">
            <div class="card h-100">
              <img src="{{asset('images/products/anillo-hojas.jpeg')}}" class="card-img-top img-product" alt="Producto: Anillo hojas">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Anillo hojas</h5>
                <p class="card-text">De Acero Blanco</p>
                <span class="badge bg-success fs-6 mt-auto">$4.000</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-4">
            <div class="card h-100">
              <img src="{{asset('images/products/anillo-julia.jpeg')}}" class="card-img-top img-product" alt="Producto: Anillo Julia">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Anillo Julia</h5>
                <p class="card-text">De Acero Blanco</p>
                <span class="badge bg-success fs-6 mt-auto">$9.100</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-4">
            <div class="card h-100">
              <img src="{{asset('images/products/anillo-corazones.jpeg')}}" class="card-img-top img-product" alt="Producto: Anillo Corazones">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Anillo Corazones</h5>
                <p class="card-text">De Acero Blanco</p>
                <span class="badge bg-success fs-6 mt-auto">$3.250</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection