<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'profesores';

    protected $fillable = [
        'documento',
        'nombre',
        'telefono',
        'email',
        'direccion',
        'ciudad',
    ];
}
