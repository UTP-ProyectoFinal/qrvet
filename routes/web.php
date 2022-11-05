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


Route::post('/validarqr', [App\Http\Controllers\HomeController::class, 'validarqr'])->name('validarqr');

Route::resource('Medicos', 'App\Http\Controllers\UserController');
Route::resource('Clientes', 'App\Http\Controllers\ClientesController');
Route::resource('Pacientes', 'App\Http\Controllers\PacientesController');
Route::resource('Atenciones', 'App\Http\Controllers\AtencionesController');
Route::resource('Alergias', 'App\Http\Controllers\AlergiasController');
Route::resource('Medicamentos', 'App\Http\Controllers\MedicamentosController');
Route::resource('Diagnosticos', 'App\Http\Controllers\DiagnosticosController');
Route::resource('Vacunas', 'App\Http\Controllers\VacunasController');
Route::resource('Procedimientos', 'App\Http\Controllers\ProcedimientosController');
Route::resource('Razas', 'App\Http\Controllers\RazasController');


//Rutas para Acciones de la opcion Atenciones
Route::post('GuardarAtencion', [App\Http\Controllers\AtencionesController::class, 'store'])
    ->name('GuardarAtencion');
Route::get('/Atenciones', [App\Http\Controllers\AtencionesController::class, 'index'])->name('Atenciones');

//Rutas para Acciones de la opcion Clientes
Route::post('GuardarCliente', [App\Http\Controllers\ClientesController::class, 'store'])
    ->name('GuardarCliente');
Route::get('/Clientes', [App\Http\Controllers\ClientesController::class, 'index'])->name('Clientes');

//Rutas para Acciones de la opcion Mascotas
Route::post('GuardarPaciente', [App\Http\Controllers\PacientesController::class, 'store'])
    ->name('GuardarPaciente');
Route::get('/Pacientes', [App\Http\Controllers\PacientesController::class, 'index'])->name('Pacientes');


//Rutas para Acciones de la opcion Alergias
Route::post('GuardarAlergia', [App\Http\Controllers\AlergiasController::class, 'store'])
    ->name('GuardarAlergia');
Route::get('/Alergias', [App\Http\Controllers\AlergiasController::class, 'index'])->name('Alergias');


//Rutas para Acciones de la opcion Medicamentos
Route::post('GuardarMedicamento', [App\Http\Controllers\MedicamentosController::class, 'store'])
    ->name('GuardarMedicamento');
Route::get('/Medicamentos', [App\Http\Controllers\MedicamentosController::class, 'index'])->name('Medicamentos');

//Rutas para Acciones de la opcion Diagnosticos
Route::post('GuardarDiagnostico', [App\Http\Controllers\DiagnosticosController::class, 'store'])
    ->name('GuardarDiagnostico');
Route::get('/Diagnosticos', [App\Http\Controllers\DiagnosticosController::class, 'index'])->name('Diagnosticos');

//Rutas para Acciones de la opcion Vacunas
Route::post('GuardarVacuna', [App\Http\Controllers\VacunasController::class, 'store'])
    ->name('GuardarVacuna');
Route::get('/Vacunas', [App\Http\Controllers\VacunasController::class, 'index'])->name('Vacunas');

//Rutas para Acciones de la opcion Procedimientos
Route::post('GuardarProcedimiento', [App\Http\Controllers\ProcedimientosController::class, 'store'])
    ->name('GuardarProcedimiento');
Route::get('/Procedimientos', [App\Http\Controllers\ProcedimientosController::class, 'index'])->name('Procedimientos');

//Rutas para Acciones de la opcion Razas
Route::post('GuardarRaza', [App\Http\Controllers\RazasController::class, 'store'])
    ->name('GuardarRaza');
Route::get('/Razas', [App\Http\Controllers\RazasController::class, 'index'])->name('Razas');

