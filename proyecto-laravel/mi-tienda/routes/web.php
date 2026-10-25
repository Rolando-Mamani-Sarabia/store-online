<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return "Hola Rolando, Laravel está funcionando!";
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});