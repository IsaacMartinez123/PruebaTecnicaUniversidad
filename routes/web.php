<?php

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/profesores', function () {
    return view('profesores/index');
});

Route::get('/profesoresCrear', function () {
    return view('profesores/create');
});

Route::get('/estudiantes', function () {
    return view('estudiantes/index');
});

Route::get('/estudiantesCrear', function () {
    return view('estudiantes/create');
});

Route::get('/asignaturas', function () {
    return view('asignaturas/index');
});

Route::get('/asignaturasCrear', function () {
    return view('asignaturas/create');
});
// //PROFESORES
// Route::group(['' => []], function () {
//     Route::get('/profesores', [ProfesorController::class, 'index'])->name('profesores');
    
//     Route::get('/profesoresCrear', [ProfesorController::class, 'create'])->name('profesores.create');

//     Route::post('/profesoresGuardar', [ProfesorController::class, 'store'])->name('');
// });

// //ESTUDIANTES
// Route::group(['' => []], function () {
//     Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes');

//     Route::get('/estudiantesCrear', [EstudianteController::class, 'create'])->name('estudiantes.create');   
// });

// //ASIGNATURAS
// Route::group(['' => []], function () {
//     Route::get('/asignaturas', [AsignaturaController::class, 'index'])->name('asignaturas');
    
//     Route::get('/asignaturasCrear', [AsignaturaController::class, 'create'])->name('asignaturas.create');
// });




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
