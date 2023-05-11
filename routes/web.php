<?php

use App\Http\Controllers\CursosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NivelesController;
use App\Http\Controllers\PersonalController;
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
    return view('index');
});

//Rutas para registro
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);
//Rutas para login
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

//Para logout
Route::get('/logout', [LogoutController::class, 'logout']);


Route::get('/personal', [PersonalController::class, 'index']);
Route::get('/espacio-personal', [PersonalController::class, 'espacio']);

//Para Cursos
Route::get('/cursos/{lan}', function ($lan) {

    return view('cursos.' . $lan);
});

//V2 para cursos
Route::get('/curso/{idioma}/{nivel}', [CursosController::class, 'mostrarCursoPorIdiomaYNivel']);

Route::get('/curso/{id}', [CursosController::class, 'mostrarCurso']);


//Para subir de nivel al terminar un usuario
Route::post('/actualizarNivel', [NivelesController::class, 'actualizarNivel']);

Route::get('/verbos', function () {
    return view('personal.verbos');
});
