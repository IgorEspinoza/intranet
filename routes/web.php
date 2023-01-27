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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/lista2', function () {
    return view('auth.cargaLista');
});

/* Route::get('/media', function () {
    return view('auth/media');
}); */

//ruta usuarios

Auth::routes();

Route::resource('users','App\Http\Controllers\UserController'); #llama a login

/* Route::get('/cargador', [App\Http\Controllers\mediaController::class, 'index']); */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/lista', [App\Http\Controllers\ListaController::class, 'index']);
Route::post('/lista/importar', [App\Http\Controllers\ListaController::class, 'importar']);

Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

/* Formularios */

Route::resource('/cargador','App\Http\Controllers\mediaController');

/*luis*/


Route::get('/home/dashboard', function () {
    return view('includes.panel.dashboard');
});

Route::get('/registro', function () {
    return view('auth.register');
});

Route::get('/registro1', function () {
    return view('includes.panel.registro');
});

Route::get('/cargador', function () {
    return view('includes.panel.cargaDatos');
});

Route::get('/cargadatos', function () {
    return view('cargadatos');
}); 

Route::get('/cdpersonalmantenimiento', function () {
    return view('cdpersonalmantenimiento');
});

Route::get('/cdcajeras', function () {
    return view('cdcajeras');
});

Route::get('cargadatos/cdaseadores', function () {
    return view('cdaseadores');
});

Route::get('cargadatos/cdgerenciajefaturas', function () {
    return view('cdgerenciajefaturas');
});

Route::get('cargadatos/cdconductoresauxiliares', function () {
    return view('cdconductoresauxiliares');
});

Route::get('cargadatos/cdadministrativos', function () {
    return view('cdadministrativos');
});




