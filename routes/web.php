<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DocenteController;

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

Route::get('/', function () {
<<<<<<< HEAD
    return view('agregar_docente');
});

=======
    return view('welcome');
});

Route::get('/docentes', function () {
    return view('docentes');
});
Route::get('/agregar_docente', [DocenteController::class, 'insertarDocenteVista']);
>>>>>>> bb2697b6c0e05958a001be924f949bb95aefe306
Route::post('/agregar_docente', [DocenteController::class, 'insertarDocente']);

Route::get('/docentes', [DocenteController::class, 'getAllDocentes']);

Route::get('/docentes_a_jubilar', [DocenteController::class, 'proximosJubilacion']);