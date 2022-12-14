<?php

// Formulario de inicio de sesión
Route::get('/iniciar-sesion', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
// Iniciar sesión
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
// Cerrar sesión
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
