@extends('layouts.app') 

@section('titulo', 'Catalogo - Brightness.Store')

@section('contenido')

<div class="container-fluid d-flex justify-content-center">
  <div class="row">
      
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
      <div class="row ">

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

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/abridor-heart-black.jpeg')}}" class="card-img-top img-product" alt="Producto: Abridor heart black">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Abridor heart black</h5>
              <p class="card-text">Laminados en plata.</p>
              <span class="badge bg-success fs-6 mt-auto">$4.000</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/abridor-heart-celeste.jpeg')}}" class="card-img-top img-product" alt="Producto: Abridor heart celeste">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Abridor heart celeste</h5>
              <p class="card-text">Laminados en plata.</p>
              <span class="badge bg-success fs-6 mt-auto">$4.000</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/abridor-heart-fucsia.jpeg')}}" class="card-img-top img-product" alt="Producto: Abridor heart fucsia">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Abridor heart fucsia</h5>
              <p class="card-text">Laminados en plata.</p>
              <span class="badge bg-success fs-6 mt-auto">$4.000</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/argolla-clasica.jpeg')}}" class="card-img-top img-product" alt="Producto: Argolla clásica">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Argolla clásica</h5>
              <p class="card-text">De plata 925. Tamaño: 10 mm</p>
              <span class="badge bg-success fs-6 mt-auto">$7.000 / 2x:$13.000</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/argolla-vibe.jpeg')}}" class="card-img-top img-product" alt="Producto: Argolla vibe">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Argolla vibe</h5>
              <p class="card-text">De plata 925 con forma de ondas</p>
              <span class="badge bg-success fs-6 mt-auto">$12.000</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/pulsera-pandora-heart-black.jpeg')}}" class="card-img-top img-product" alt="Producto: Pulsera Pandora heart black">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Pulsera Pandora heart black</h5>
              <p class="card-text">De Acero Quirurgico</p>
              <span class="badge bg-success fs-6 mt-auto">$6.500 / 2x:$13.000</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/pulsera-pandora-heart.jpeg')}}" class="card-img-top img-product" alt="Producto: Pulsera Pandora heart">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Pulsera Pandora heart</h5>
              <p class="card-text">De Acero Quirurgico</p>
              <span class="badge bg-success fs-6 mt-auto">$6.500 / 2x:$13.000</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/pulsera-colour-azul.jpeg')}}" class="card-img-top img-product" alt="Producto: Pulsera Colour Azul">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Pulsera Colour Azul</h5>
              <p class="card-text">De Acero Quirurgico</p>
              <span class="badge bg-success fs-6 mt-auto">$6.000</span>
            </div>
          </div>
        </div>

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

          <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/aros-flor.jpeg')}}" class="card-img-top img-product" alt="Producto: Aros Flor">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Aros Flor</h5>
              <p class="card-text">De Plata 925</p>
              <span class="badge bg-success fs-6 mt-auto">$7.800</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/aros-reina.jpeg')}}" class="card-img-top img-product" alt="Producto: Aros Reina">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Aros Reina</h5>
              <p class="card-text">De Plata 925</p>
              <span class="badge bg-success fs-6 mt-auto">$7.800</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/aros-gota-grande.jpeg')}}" class="card-img-top img-product" alt="Producto: Aros Gota Grande">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Aros Gota Grande</h5>
              <p class="card-text">De Plata 925</p>
              <span class="badge bg-success fs-6 mt-auto">$13.000</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/broche-hawaii-grande-amarillo-celeste.jpeg')}}" class="card-img-top img-product" alt="Producto: Broche Hawaii Grande">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Broche Hawaii Grande amarillo-celeste</h5>
              <p class="card-text">Broche para el pelo</p>
              <span class="badge bg-success fs-6 mt-auto">$5.200</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/broche-hawaii-grande-rosa-fucsia.jpeg')}}" class="card-img-top img-product" alt="Producto: Broche Hawaii Grande">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Broche Hawaii Grande rosa-fucsia</h5>
              <p class="card-text">Broche para el pelo</p>
              <span class="badge bg-success fs-6 mt-auto">$5.200</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/conjunto-corazon-violeta.jpeg')}}" class="card-img-top img-product" alt="Producto: Conjunto Corazón Violeta">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Conjunto Corazón Violeta</h5>
              <p class="card-text">Set de Collar con dije Corazon Violeta y bolitas</p>
              <span class="badge bg-success fs-6 mt-auto">$7.800</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="{{asset('images/products/conjunto-copo-nieve.jpeg')}}" class="card-img-top img-product" alt="Producto: Conjunto Copo de Nieve">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Conjunto Copo de Nieve</h5>
              <p class="card-text">Set de collar con dije Copo de Nieve</p>
              <span class="badge bg-success fs-6 mt-auto">$4.550</span>
            </div>
          </div>
        </div>
          

      </div>
    </div>
  </div>
</div>
@endsection

