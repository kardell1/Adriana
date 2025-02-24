<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\EcaController;
use App\Http\Controllers\TallerController;
///////producto controller
//Route::get('producto', [productoController::class,'index']);
//Route::get('producto/crear', [productoController::class,'crear']);
//Route::get('producto/{nombre}', [productoController::class,'mostrar']);
//usando la function grup 
Route::controller(EcaController::class)->group(function(){
Route::get('/', 'index');
Route::get('about', 'about');
Route::get('contact', 'contact');
Route::post('inscripcion', 'inscripcionstore')->name('inscripcion.store');
Route::get('service', 'service');
Route::get('materias_eca', 'materias_eca')->name('ECA.materias_eca');
Route::get('detalleMateria', 'detalleMateria')->name('materias.show');
Route::get('docentes_eca', 'docentes_eca')->name('ECA.docentes_eca');

Route::get('detalleDocente', 'detalleDocente')->name('docentes.show');
Route::get('talleres_eca', 'talleres_eca')->name('ECA.talleres_eca');


Route::get('detalleTaller', 'detalleTaller')->name('talleres.show');

Route::get('news', 'news');
Route::get('portafolio', 'portafolio');
Route::get('/login', function () {
    return view('ECA.login');
})->name('login');
// Procesar el formulario de login
Route::post('/login', [EcaController::class, 'login'])->name('login.post');
Route::get('/admin', function () {
    return view('ECA.admin');
})->name('admin');

Route::get('/user', function () {
    return view('ECA.user');
})->name('user');







//Route::get('docentes_eca', 'docentes');






Route::get('/admin/noticiasadmin', 'noticiasadmin');
Route::get('/admin/talleresadmin', 'talleresadmin');
Route::get('/admin/portafolioadmin', 'portafolioadmin');
Route::get('/admin/docentesadmin', 'docentesadmin');
Route::get('/admin/alumnosadmin', 'alumnosadmin');

Route::post('contenido', 'contenidostore')->name('contenido.store');
Route::post('taller', 'tallerstore')->name('taller.store');
Route::post('docente', 'docentestore')->name('docente.store');
Route::post('alumno', 'alumnostore')->name('alumno.store');

}
   


);

