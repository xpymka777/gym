<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;

//путь для всех методов работы с пользователем(весь CRUD)
Route::apiResource('users', UserController::class);
//путь для всех методов товаров
Route::apiResource('products', ProductController::class);
//llr
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);
//
