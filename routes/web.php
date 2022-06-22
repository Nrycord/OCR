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
    return view('welcome');
});

Route::get('/docentes', function () {
    return view('docentes');
});
Route::get('/agregar_docente', function () {
    return view('agregar_docente');
});
Route::post('/agregar_docente', [DocenteController::class, 'insertarDocente']);
Route::get('/docentes_a_jubilar', function () {
    return view('docentes_a_jubilar');
});
