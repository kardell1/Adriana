<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    use HasFactory;

    protected $table = 'talleres'; // Nombre de la tabla en tu base de datos
    protected $primaryKey = 'id_taller'; // Llave primaria de la tabla
     // Desactiva timestamps si no usas created_at/updated_at

    protected $fillable = [
        'id_taller',
        'id_carrera',
        'ci_docente',
        'nombre',
        'descripcion',
    ];
}
