<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenis extends Model
{
    protected $fillable = [
        'marca', 'modelo', 'descripcion', 'precio', 'talla', 'categoria', 'imagen',
    ];
}