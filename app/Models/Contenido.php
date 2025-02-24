<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    use HasFactory;

    protected $table = 'contenido'; // Nombre de la tabla en tu base de datos
    protected $primaryKey = 'id_con'; // Llave primaria de la tabla
    public $timestamps = false; // Desactiva timestamps si no usas created_at/updated_at

    protected $fillable = [
        'id_con',
        'nombre',
        'archivo',
        'descripcion',
        'link',
        'cod_contenido',
    ];
}
