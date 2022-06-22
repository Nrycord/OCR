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


Route::get('/agregar_docente', [DocenteController::class, 'insertarDocenteVista']);
Route::post('/agregar_docente', [DocenteController::class, 'insertarDocente']);

Route::get('/', [DocenteController::class, 'getAllDocentes']);
Route::get('/docentes', [DocenteController::class, 'getAllDocentes']);

Route::get('/docentes_a_jubilar', [DocenteController::class, 'proximosJubilacion']);