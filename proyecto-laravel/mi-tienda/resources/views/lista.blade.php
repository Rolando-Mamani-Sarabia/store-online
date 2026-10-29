


@extends('layout.app')

@section('contenido')
    <p>Bienvenido a nuestro estante de juguetes</p>

    <p>Hay {{ count($juguetes) }} juguetes en el estante</p>

    <ul>
        @foreach ($juguetes as $juguete)
            <li>{{ $juguete->nombre }} - {{ $juguete->precio }} Bs</li>
        @endforeach
    </ul>

    <p>Estante atendido por Rolando Mamani Sarabia</p>

    <a href="/juguetes/nuevo">Registrar un juguete nuevo</a>
@endsection