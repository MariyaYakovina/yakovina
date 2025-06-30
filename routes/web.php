<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrController;

Route::get('/', fn() => view('index')); 
Route::get('/auth', fn() => view('auth'));
Route::get('/registr', fn() => view('registr'));


Route::post('/auth', [AuthController::class, 'auth']);
Route::post('/registr', [RegistrController::class, 'registr']);
