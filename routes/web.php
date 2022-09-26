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

Route::resource('qrv_clientes', 'App\Http\Controllers\qrv_clientesController');

Route::resource('Alergias', 'App\Http\Controllers\AlergiasController');

Route::resource('Medicamentos', 'App\Http\Controllers\MedicamentosController');

