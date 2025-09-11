<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/listado_usuarios', [UsuarioController::class, 'index']);
