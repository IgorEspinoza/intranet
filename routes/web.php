<?php

use Illuminate\Support\Facades\Route;
/*luxo*/
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*luis*/

Route::get('cargadatos', function () {
    return view('cargadatos');
});

Route::get('cargadatos/cdpersonalmantenimiento', function () {
    return view('cdpersonalmantenimiento');
});

Route::get('cargadatos/cdcajeras', function () {
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