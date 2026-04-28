@extends('layouts.app') 

@section('titulo', 'Escarapelas - Brightness.Store')

@section('contenido')

<div class="container-fluid d-flex justify-content-center">
  <div class="row w-100">
    
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

    
    <div class="col-md-10">
      <div class="row w-100">

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/escarapela-bandera-mini.jpeg')}}" class="card-img-top img-product" alt="Producto: Escarapela bandera mini">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Escarapela bandera mini</h5>
              <p class="card-text">De acero. Cierre pin.</p>
              <span class="badge bg-success fs-6 mt-auto">$2.700</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/escarapela-circular-mini.jpeg')}}" class="card-img-top img-product" alt="Producto: Escarapela circular mini">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Escarapela circular mini</h5>
              <p class="card-text">De acero. Cierre pin.</p>
              <span class="badge bg-success fs-6 mt-auto">$2.700</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection

