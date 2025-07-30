<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes', function () {
    return [
        ['nome' => 'Seleide', 'email' => 'seleide@gmail.com'],
        ['nome' => 'Carlos', 'email' => 'carlos@gmail.com'],
        ['nome' => 'Juliana', 'email' => 'juliana@gmail.com'],
        ['nome' => 'Marcos', 'email' => 'seleide@gmail.com'],
        ['nome' => 'Fernanda', 'email' => 'seleide@gmail.com'],
        ['nome' => 'Tiago', 'email' => 'seleide@gmail.com'],
        ['nome' => 'Larissa', 'email' => 'seleide@gmail.com'],
        ['nome' => 'Eduardo', 'email' => 'seleide@gmail.com'],
        ['nome' => 'Patrícia', 'email' => 'seleide@gmail.com'],
        ['nome' => 'André', 'email' => 'seleide@gmail.com'],
        ['nome' => 'Camila', 'email' => 'seleide@gmail.com'],

    ];
});
