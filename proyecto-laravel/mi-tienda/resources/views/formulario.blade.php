

@extends('layout.app')

@section('contenido')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/juguetes/nuevo" method="POST">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">

        <br><br>

        <label for="precio">Precio</label>
        <input type="number" id="precio" name="precio" value="{{ old('precio') }}">

        <br><br>

        <label for="stock">Stock</label>
        <input type="number" id="stock" name="stock" value="{{ old('stock') }}">

        <br><br>

        <button type="submit">Registrar juguete</button>
    </form>
@endsection