<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Inscripcion extends Model
{
    use HasFactory;

    protected $table = 'inscripciones'; // Nombre de la tabla en tu base de datos
    protected $primaryKey = 'id_inscripcion'; // Llave primaria de la tabla
     // Desactiva timestamps si no usas created_at/updated_at

    protected $fillable = [
        'id_inscripcion',
        'fecha_inscripcion',
        'apaterno',
        'amaterno',
        'nombre',
        'ci_alumno',
        'celular',
        'correo',
        'id_carrera',
        'id_curso',
        'id_taller',
        'comprobante',
        'id_comprobante',
        'gestion',
        'created_at',
        'updated_at',
    ];
}
