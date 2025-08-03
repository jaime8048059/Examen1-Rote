<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;

Route::apiResource('marcas',MarcaController::class);
Route::apiResource('producto',ProductoController::class);

