<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\EstadiController;

// Ruta de bienvenida (GET /)
Route::get('/', fn() => "Benvingut a la Guia d'Equips de Futbol Femení!");

// Genera automáticamente varias rutas REST para 'equips'
Route::resource('equips', EquipController::class);

Route::get('/estadis', [EstadiController::class, 'index'])->name('estadis.index');
Route::get('/estadis/crear', [EstadiController::class, 'create'])->name('estadis.create');
Route::post('/estadis', [EstadiController::class, 'store'])->name('estadis.store');
Route::get('/estadis/{id}', [EstadiController::class, 'show'])->name('estadis.show');