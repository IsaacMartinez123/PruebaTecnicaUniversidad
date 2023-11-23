<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $filable = [
        'documento',
        'nombre',
        'telefono',
        'email',
        'direccion',
        'ciudad',
        'semestre'
    ];
}
