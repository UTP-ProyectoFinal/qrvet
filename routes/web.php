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

use App\Http\Controllers\ConnectController;
use Illuminate\Support\Facades\Auth;

Route::get('/welcome', [ConnectController::class, 'getLogin']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas del menú
Route::resource('qrv_clientes', 'App\Http\Controllers\qrv_clientesController');
Route::resource('Alergias', 'App\Http\Controllers\AlergiasController');
Route::resource('Medicamentos', 'App\Http\Controllers\MedicamentosController');
Route::resource('Diagnosticos', 'App\Http\Controllers\DiagnosticosController');
Route::resource('Vacunas', 'App\Http\Controllers\VacunasController');
Route::resource('Procedimientos', 'App\Http\Controllers\ProcedimientosController');
Route::resource('Razas', 'App\Http\Controllers\RazasController');

//Rutas para Acciones de la opcion Alergias
Route::post('GuardarAlergia', [App\Http\Controllers\AlergiasController::class, 'store'])
    ->name('GuardarAlergia');
Route::get('/Alergias', [App\Http\Controllers\AlergiasController::class, 'index'])->name('Alergias');

