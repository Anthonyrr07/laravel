<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;


Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);
Route::get('/dizer-ola', [App\Http\Controllers\Principal::class, 'dizerOla']);
Route::get('/conectar', [App\Http\Controllers\Usuario::class, 'conectar']);
Route::get('/desconectar', [App\Http\Controllers\Usuario::class, 'desconectar']);
Route::get('/veiculo', [App\Http\Controllers\Veiculo::class, 'veiculo']);

