<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

// Routes that require authentication (Sanctum)
Route::prefix('admin')->as('admin.')->middleware('guest:sanctum')->group(function () {
    
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    
});

Route::prefix('admin')->as('admin.')->middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('categories', CategoryController::class);

    Route::apiResource('products', ProductController::class);
    Route::get('products/search/{name}', [ProductController::class, 'search']);
});

// Public Routes

