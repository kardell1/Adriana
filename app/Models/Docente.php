<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes'; // Nombre de la tabla en tu base de datos
    protected $primaryKey = 'ci_docente'; // Llave primaria de la tabla
    

    protected $fillable = [
        'ci_docente',
        'apaterno',
        'amaterno',
        'nombre',
        'foto',
        'created_at',
        'updated_at',
    ];
}
