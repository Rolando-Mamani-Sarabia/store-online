
@extends('layout.base')
@section('contenido')

  <!-- Catalogo de tenis -->
  <section class="catalogo" id="productos">

    <h2>Explora nuestro catálogo</h2>
    <p>Encuentra los tenis ideales para tu estilo y actividad.</p>

    <div class="categorias">

        <!-- Casual -->
        <article class="categoria" id="casuales">
            <img src="casuales.jpg">

            <h3>Tenis casuales</h3>
            <p>Diseños modernos y cómodos para acompañarte
               en tu día a día.</p>

            <button type="button">Explorar colección</button>
        </article>

        <!-- Deportivos -->
        <article class="categoria" id="deportivos">
            <img src="deportivos.png">

            <h3>Tenis deportivos</h3>
            <p>Encuentra modelos ideales para entrenar
               y mantenerte activo.</p>

            <button type="button">Explorar colección</button>
        </article>

        <!-- Running -->
        <article class="categoria" id="running">
            <img src="running.png">

            <h3>Tenis para running</h3>
            <p>Descubre opciones diseñadas para correr
               y disfrutar cada kilómetro.</p>

            <button type="button">Explorar colección</button>
        </article>

        <!-- Básquetbol -->
        <article class="categoria" id="basquetbol">
            <img src="basquetbol.jpg">

            <h3>Tenis para básquetbol</h3>
            <p>Modelos para acompañarte en la cancha
               con estilo y comodidad.</p>

            <button type="button">Explorar colección</button>
        </article>

        <!-- Urbano -->
        <article class="categoria" id="urbano">
            <img src="urbano.jpg">

            <h3>Tenis Urbanos</h3>
            <p>Diseños urbanos para quienes disfrutan
               del skate y la cultura callejera.</p>

            <button type="button">Explorar colección</button>
        </article>
    </div>
  </section>

  @endsection