<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }
}
