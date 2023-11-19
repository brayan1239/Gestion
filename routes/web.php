<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("/index",[AlumnoController::class,"mostrar"])->name('alumno.index');
    #Editar informacion
    Route::get("/actualizarInformacion/{id}",[AlumnoController::class,"editar"])->name('formulario.actualizarInformacion');
    Route::post("/curso/{id}",[AlumnoController::class,"actualizar"]);

    Route::get("/cursos",[CursoController::class,"mostrar"])->name('alumno.cursos');
    
    Route::get('/soporte', function () {
        return view('alumno.soporte');
    })->name('alumno.soporte');
});

require __DIR__.'/auth.php';
