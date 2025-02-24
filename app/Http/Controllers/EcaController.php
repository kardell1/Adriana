<?php

namespace App\Http\Controllers;
use App\Models\Contenido;
use App\Models\Docente;
use App\Models\Carrera;
use App\Models\Usuario;
use App\Models\Taller;
use App\Models\Curso;
use App\Models\Materia;
use App\Models\Alumno;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

class EcaController extends Controller
{
    //
    public function index(){
        //return "esta es mi pagina PRINCIPAL ";
        return view('ECA.index');
    }
    public function about(){
        //return "aqui creamos un nuevo producto ";
        return view('ECA.about');
    }
    public function contact(){
        //return "aqui creamos un nuevo producto ";
        $cursos = Curso::all(); // Obtener todas los docentes
        $talleres = Taller::all();
        return view('ECA.contact', compact('cursos', 'talleres'));
    }
    public function inscripcionstore(Request $request) { 
        $request->validate([
            'comprobante' => 'required|mimes:jpg,jpeg,png,mp4,mov,avi|max:204800' // 20MB máximo
        ]);
    
        // Guardar el archivo en 'public/uploads'
        $comprobante = $request->file('comprobante');
        $nombre_contenido = time().'_'.$comprobante->getClientOriginalName(); // Renombrar con timestamp
        $comprobante->move(public_path('uploads'), $nombre_contenido); 
        
        // Validar el archivo subido 
     
        $inscripcion = new Inscripcion();
        $inscripcion->fecha_inscripcion = now();
        $inscripcion->apaterno = $request->apaterno;
        $inscripcion->amaterno = $request->amaterno;
        $inscripcion->nombre = $request->nombre;
        $inscripcion->ci_alumno = $request->ci_alumno; 
        $inscripcion->celular = $request->celular; 
        $inscripcion->correo = $request->correo;
        
        $inscripcion->id_carrera = 1; 
        $inscripcion->id_curso = $request->id_curso; 
        $inscripcion->id_taller = $request->id_taller;
        $inscripcion->comprobante = 'uploads/' . $nombre_contenido; // Guardar la ruta del archivo
        $inscripcion->id_comprobante = $request->id_comprobante; 
        $inscripcion->gestion = now()->year; // Solo el año actual
        $inscripcion->save();
    
        // Redirigir después de guardar
        return view('ECA.index');
           }
    public function service(){
        //return "aqui creamos un nuevo producto ";
        return view('ECA.service');
    }
    
    public function news(){
        //return "aqui creamos un nuevo producto ";
        $contenidos = Contenido::where('cod_contenido', '!=', 2)
        ->orderBy('id_con', 'desc')
        ->limit(3)
        ->get();
        //return "aqui creamos un nuevo producto ";
        return view('ECA.news', compact('contenidos'));
    }
    public function portafolio(){
        $contenidos = Contenido::where('cod_contenido', '!=', 1)
        ->orderBy('id_con', 'desc')
        ->limit(6)
        ->get();
        //return "aqui creamos un nuevo producto ";
        return view('ECA.portafolio', compact('contenidos'));
    }
  
    public function talleres_eca(){
        //return "aqui creamos un nuevo producto ";
        $talleres = Taller::all();
        return view('ECA.talleres_eca',compact('talleres'));        
    }

    public function detalleTaller()
    {
        $taller = Taller::firstOrFail(); 
    
          return view('ECA.detalle_taller', compact('taller'));
    }
    public function materias_eca() {
        // Filtrar materias por id_curso
        $materias_curso1 = Materia::where('id_curso', 1)->get();
        $materias_curso2 = Materia::where('id_curso', 2)->get();
        $materias_curso3 = Materia::where('id_curso', 3)->get();
    
        return view('ECA.materias_eca', compact('materias_curso1', 'materias_curso2', 'materias_curso3'));
    }
    
    public function detalleMateria()
    {
        $materia = Materia::firstOrFail();
          return view('ECA.detalle_materia', compact('materia'));
    }
    
    public function docentes_eca(){
        $docentes = Docente::all();
           return view('ECA.docentes_eca',compact('docentes'));
    }
    public function detalleDocente()
    {
        $docente = Docente::firstOrFail();
          return view('ECA.detalle_docente', compact('docente'));
    }
  
public function login(Request $request)
{
    // Validar datos del formulario
    $request->validate([
        'user' => 'required',
        'password' => 'required'
    ]);

    // Buscar el usuario en la base de datos
    $usuario = Usuario::where('user', $request->user)
                      ->where('password', $request->password)
                      ->first();

    if ($usuario) {
        session(['user' => $usuario]);

        if ($usuario->role_id == 1) {
            return redirect()->route('admin'); // Redirige a la vista de admin
        } elseif ($usuario->role_id == 2) {
            return redirect()->route('user'); // Redirige a la vista de usuario
        }
    } else {
        return back()->with('error', 'ERROR EN LA AUTENTICACIÓN. Usuario o contraseña incorrectos.');
    }
}

public function noticiasadmin() {
    return view('admin.noticiasadmin'); // Asegúrate de que la vista esté en resources/views/admin/
}


public function portafolioadmin()
{
    return view('admin.portafolioadmin');
}

public function docentesadmin()
{
    return view('admin.docentesadmin');
}
public function alumnosadmin()
{
    return view('admin.alumnosadmin');
}

public function talleresadmin()
{
    $docentes = Docente::all(); // Obtener todas los docentes
   
    return view('admin.talleresadmin', compact('docentes'));
}

public function contenidostore(Request $request) { 
    // Validar el archivo subido
    $request->validate([
        'archivo' => 'required|mimes:jpg,jpeg,png,mp4,mov,avi|max:204800' // 20MB máximo
    ]);

    // Guardar el archivo en 'public/uploads'
    $archivo = $request->file('archivo');
    $nombre_contenido = time().'_'.$archivo->getClientOriginalName(); // Renombrar con timestamp
    $archivo->move(public_path('uploads'), $nombre_contenido); 

    // Guardar en la base de datos
    $contenido = new Contenido();
    $contenido->cod_contenido = $request->cod_contenido;
    $contenido->nombre = $request->nombre; 
    $contenido->archivo = 'uploads/' . $nombre_contenido; // Guardar la ruta del archivo
    $contenido->descripcion = $request->descripcion;
    $contenido->link = $request->link;
    $contenido->save();

    

    // Redirigir después de guardar
    return view('ECA.admin'); 
}
    public function tallerstore(Request $request) { 
        $request->validate([
            'foto' => 'required|mimes:jpg,jpeg,png,mp4,mov,avi|max:204800' // 20MB máximo
        ]);
    
        // Guardar el archivo en 'public/uploads'
        $foto = $request->file('foto');
        $nombre_contenido = time().'_'.$foto->getClientOriginalName(); // Renombrar con timestamp
        $foto->move(public_path('uploads'), $nombre_contenido); 
    
        // Validar el archivo subido 
     
        $taller = new Taller();
        $taller->id_carrera = 1;
        $taller->ci_docente = $request->ci_docente; 
        $taller->nombre = $request->nombre; 
        $taller->descripcion = $request->descripcion;
        $taller->foto = 'uploads/' . $nombre_contenido; // Guardar la ruta del archivo
        $taller->save();
    
        // Redirigir después de guardar
        return view('ECA.admin');
           }
    
    
    public function docentestore(Request $request) { 
        $request->validate([
            'foto' => 'required|mimes:jpg,jpeg,png,mp4,mov,avi|max:204800' // 20MB máximo
        ]);
    
        // Guardar el archivo en 'public/uploads'
        $foto = $request->file('foto');
        $nombre_contenido = time().'_'.$foto->getClientOriginalName(); // Renombrar con timestamp
        $foto->move(public_path('uploads'), $nombre_contenido); 
    
        // Validar el archivo subido 
     
        $docente = new Docente();
        $docente->ci_docente = $request->ci_docente; 
        $docente->apaterno = $request->apaterno; 
        $docente->amaterno = $request->amaterno; 
        $docente->nombre = $request->nombre; 
        $docente->descripcion = $request->descripcion;
        $docente->foto =  $nombre_contenido; // Guardar la ruta del archivo
        $docente->save();
    
        // Redirigir después de guardar
        return view('ECA.admin');
           }
          
           public function alumnostore(Request $request) { 
            $request->validate([
                'foto' => 'required|mimes:jpg,jpeg,png,mp4,mov,avi|max:204800' // 20MB máximo
            ]);
        
            // Guardar el archivo en 'public/uploads'
            $foto = $request->file('foto');
            $nombre_contenido = time().'_'.$foto->getClientOriginalName(); // Renombrar con timestamp
            $foto->move(public_path('uploads'), $nombre_contenido); 
        
            // Validar el archivo subido 
         
            $alumno = new Alumno ();
            $alumno ->ci_alumno = $request->ci_alumno; 
            $alumno->apaterno = $request->apaterno; 
            $alumno->amaterno = $request->amaterno; 
            $alumno->nombre = $request->nombre; 
            $alumno->celular = $request->celular; 
            $alumno->correo = $request->correo; 
           
            $alumno->foto = 'uploads/' . $nombre_contenido; // Guardar la ruta del archivo
            $alumno->save();
        
            // Redirigir después de guardar
            return view('ECA.admin');
               }

    

}   
    
    
