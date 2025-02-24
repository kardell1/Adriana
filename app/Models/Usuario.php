<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios'; // Nombre de la tabla en tu base de datos
    protected $primaryKey = 'user'; // Llave primaria de la tabla
    public $timestamps = false; // Desactiva timestamps si no usas created_at/updated_at

    protected $fillable = [
        'role_id',
        'user',
        'correo',
        'correo_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
    ];
}
