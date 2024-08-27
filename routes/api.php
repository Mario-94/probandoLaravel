<?php

use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\ProductoController;
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

Route::get('/usuarios', [UsuarioController::class, "obtenerUsuarios"]);

Route::get('/usuario/{id}', [UsuarioController::class, 'obtenerUsuario']);

Route::get('/productos', [ProductoController::class, "obtenerProductos"]);

Route::get('/productos/{id}', [ProductoController::class, "obtenerProducto"]);

Route::get('/pruebaProducto/{id}', [ProductoController::class, 'obtenerProductoFind']);
