<?php

use App\Http\Controllers\EcommerceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('categories', [EcommerceController::class, 'categories'])->name('categories');