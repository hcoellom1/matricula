<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlumnoController;

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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('/alumnos/crear', [AlumnoController::class, 'create']);

Route::post('/alumnos/crear/guardar', [AlumnoController::class, 'store'])->name('alumno.guardar');

Route::get('/alumnos/eliminar/{id}', [AlumnoController::class, 'destroy']);