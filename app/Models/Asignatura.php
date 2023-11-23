<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $filable = [
        'nombre',
        'descripcion',
        'creditos',
        'area_conocimiento',
        'tipo_materia',
    ];
}
