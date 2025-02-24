<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumnos'; // Nombre de la tabla en tu base de datos
    protected $primaryKey = 'id_alumno'; // Llave primaria de la tabla
    

    protected $fillable = [
        'ci_alumno',
        'apaterno',
        'amaterno',
        'nombre',
        'celular',
        'correo',
        'foto',
        'created_at',
        'updated_at',
    ];
}
