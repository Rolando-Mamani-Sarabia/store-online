

@extends('layout.base')
@section('contenido')

  <section id="contacto">
    <h2>Contáctanos</h2>

    @if (session('exito'))
        <p class="aviso">{{ session('exito') }}</p>
    @endif

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form id="form-contacto" action="/contacto" method="POST" novalidate>
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required>{{ old('mensaje') }}</textarea>

        <button type="submit">Enviar mensaje</button>
        <p id="aviso-contacto" class="aviso"> </p>
    </form>
  </section>

@endsection