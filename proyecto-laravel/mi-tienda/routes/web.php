<?php

use Illuminate\Support\Facades\Route;
use App\Models\Juguete;
use App\Models\Tenis;
use App\Models\Contacto;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return "Hola Rolando, Laravel está funcionando!";
});

// Inicio
Route::get('/inicio', function () {
    return view('inicio');
});

// Catalogo
Route::get('/catalogo', function () {
    $tenis = Tenis::all();
    return view('catalogo', ['tenis' => $tenis]);
});

// Agregar Tenis nuevo 
Route::get('/tenis/nuevo', function () {
    return view('tenis-formulario');
});

// Agregar Tenis nuevo
Route::post('/tenis/nuevo', function () {
    Tenis::create([
        'marca'       => request()->input('marca'),
        'modelo'      => request()->input('modelo'),
        'descripcion' => request()->input('descripcion'),
        'precio'      => request()->input('precio'),
        'talla'       => request()->input('talla'),
        'categoria'   => request()->input('categoria'),
        'imagen'      => request()->input('imagen'),
    ]);

    return redirect('/catalogo');
});


// Contacto - Tenis
Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', function () {
    Contacto::create([
        'nombre'  => request()->input('nombre'),
        'correo'  => request()->input('correo'),
        'mensaje' => request()->input('mensaje'),
    ]);

    return redirect('/contacto');
});

// Juguetes

Route::get('/juguetes', function () {
    $juguetes = Juguete::all();
    return view('lista', ['juguetes' => $juguetes]);
});

Route::get('/juguetes/nuevo', function () {
    return view('formulario');
});

Route::post('/juguetes/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer'  => 'Aca el precio va entero, sin decimales ni letras.',
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/juguetes');
});