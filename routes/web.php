<?php

use Illuminate\Http\Request;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

Route::post('/registro', [RegistroController::class, 'store']);
Route::get('registro/valor', [RegistroController::class, 'getValor']);
