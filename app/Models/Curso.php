<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function materias()
    {
        return $this->hasMany(Materia::class, 'id_curso');
    }
}
