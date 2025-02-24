<?php

namespace App\Http\Controllers;
use App\Models\Taller;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function store(Request $request) { 
        // Validar el archivo subido
    
     
        $taller = new Taller();
        $taller->id_taller = $request->id_taller;
        $taller->ci_docente = $request->ci_docente; 
        $taller->nombre = $request->nombre; 
        $taller->descripcion = $request->descripcion;
        $taller->save();
    
        // Redirigir después de guardar
        return view('admin.talleradmin'); 
    }
}
