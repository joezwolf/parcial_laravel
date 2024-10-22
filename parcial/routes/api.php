<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideojuegoController;

Route::apiResource('categories', CategoryController::class);
Route::apiResource('videojuegos', VideojuegoController::class);
