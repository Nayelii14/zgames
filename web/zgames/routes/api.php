<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Importar controlador, 
use App\Http\Controllers\ConsolasController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//RUTA POST O GET. post para enviar, get para obtener
Route::get("marcas/get", [ConsolasController::class,"getMarcas"]);
//Route::get("url", [controlador::class, "metodo"])

Route::get("consolas/get", [ConsolasController::class,"getConsolas"]);

Route::get("consolas/post", [ConsolasController::class,"crearConsola"]);