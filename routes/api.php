<?php

use App\Http\Controllers\ApiAsignaturaController;
use App\Http\Controllers\ApiEstudianteController;
use App\Http\Controllers\ApiProfesorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/profesores', [ApiProfesorController::class,'index']);
Route::post('/profesores', [ApiProfesorController::class,'store'])->name("profesores.store"); 
Route::put('/profesores/{id}', [ApiProfesorController::class,'update']); 
Route::delete('/profesores/{id}', [ApiProfesorController::class,'destroy']); 

Route::get('/estudiantes', [ApiEstudianteController::class,'index']);
Route::post('/estudiantes', [ApiEstudianteController::class,'store']); 
Route::put('/estudiantes/{id}', [ApiEstudianteController::class,'update']); 
Route::delete('/estudiantes/{id}', [ApiEstudianteController::class,'destroy']); 

Route::get('/asignaturas', [ApiAsignaturaController::class,'index']);
Route::post('/asignaturas', [ApiAsignaturaController::class,'store']); 
Route::put('/asignaturas/{id}', [ApiAsignaturaController::class,'update']); 
Route::delete('/asignaturas/{id}', [ApiAsignaturaController::class,'destroy']); 
