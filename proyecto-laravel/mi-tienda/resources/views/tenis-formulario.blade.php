@extends('layout.base')
@section('contenido')

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

        <section id="contacto">
    <form action="/tenis/nuevo" method="POST">
        @csrf

        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca" value="{{ old('marca') }}">

        <label for="modelo">Modelo</label>
        <input type="text" id="modelo" name="modelo" value="{{ old('modelo') }}">

        <label for="descripcion">Descripción</label>
        <textarea id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>

        <label for="precio">Precio (Bs)</label>
        <input type="number" id="precio" name="precio" value="{{ old('precio') }}">

        <label for="talla">Talla</label>
        <input type="number" id="talla" name="talla" value="{{ old('talla') }}">

        <label for="categoria">Categoría</label>
        <select id="categoria" name="categoria">
            <option value="casual">Casual</option>
            <option value="deportivo">Deportivo</option>
            <option value="running">Running</option>
            <option value="basquetbol">Básquetbol</option>
            <option value="urbano">Urbano</option>
        </select>

        <label for="imagen">Nombre de la imagen (en public/img)</label>
        <input type="text" id="imagen" name="imagen" placeholder="" value="{{ old('imagen') }}">

        <button type="submit">Registrar tenis</button>
    </form>
      </section>

@endsection