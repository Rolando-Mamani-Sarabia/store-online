
@extends('layout.base')
@section('contenido')

  <!-- Catalogo de tenis -->
  <section class="catalogo" id="productos">

    <h2>Explora nuestro catálogo</h2>
    <p>Encuentra los tenis ideales para tu estilo y actividad.</p>

    <div class="categorias">
        @foreach ($tenis as $t)
            <article class="categoria">
                <img src="{{ asset('img/' . $t->imagen) }}" alt="{{ $t->modelo }}">

                <h3>{{ $t->marca }} {{ $t->modelo }}</h3>
                <p>{{ $t->descripcion }}</p>
                <p>Talla {{ $t->talla }} - {{ $t->precio }} Bs</p>
                <p>Categoría: {{ $t->categoria }}</p>

                <button type="button">Añadir al carrito</button>
            </article>
        @endforeach
    </div>
  </section>

  @endsection