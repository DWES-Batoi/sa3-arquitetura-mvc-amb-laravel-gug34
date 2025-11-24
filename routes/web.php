<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\EstadiController;
use App\Http\Controllers\JugadoraController;
use App\Http\Controllers\PartitController;

Route::get('/', fn() => "Benvingut a la Guia d'Equips de Futbol Femení!");

// Equips
Route::resource('equips', EquipController::class);

// Estadis
Route::resource('estadis', EstadiController::class);

// Jugadores 
Route::resource('jugadores', JugadoraController::class);

// Partits
Route::resource('partits', PartitController::class);