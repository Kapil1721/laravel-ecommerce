<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VariantsController;
use App\Http\Controllers\admin\InventoryController;
use App\Http\Controllers\Admin\CollectionController;

// Routes that require authentication (Sanctum)
Route::prefix('admin')->as('admin.')->middleware('guest:sanctum')->group(function () {

    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);

});

Route::prefix('admin')->as('admin.')->middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('categories/{id}/variants', [CategoryController::class, 'variants'])->name('categories.variants');

    Route::apiResource('categories', CategoryController::class);

    Route::get('products/{id}/inventory', [ProductController::class, 'inventory'])->name('products.inventory');
    Route::apiResource('products', ProductController::class);

    Route::apiResource('blogs', BlogController::class);
    Route::apiResource('coupons', CouponController::class);
    Route::apiResource('variants', VariantsController::class);

    Route::apiResource('media', MediaController::class);
    Route::apiResource('tags', TagController::class);
    Route::apiResource('inventories', InventoryController::class);
    Route::apiResource('collections', CollectionController::class);
    Route::post('coupons/apply', [CouponController::class, 'apply']);
    Route::get('conditions', [CollectionController::class, 'conditions']);
});

// Public Routes


Route::get('index', [MainController::class, 'index'])->name('home');
Route::get('products', [MainController::class, 'products'])->name('product');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('shop', [MainController::class, 'shop'])->name('shop');
Route::get('blogs', [MainController::class, 'blogs'])->name('blogs');
Route::get('testimonials', [MainController::class, 'testimonials'])->name('testimonials');
Route::get('teams', [MainController::class, 'teams'])->name('teams');


Route::get('shop-collection', [MainController::class, 'shopcollection'])->name('shopcollection');
Route::get('product-inner', [MainController::class, 'productdetail'])->name('product-inner');
Route::get('my-account', [MainController::class, 'myaccount'])->name('my-account');
Route::get('products/search/{name}', [ProductController::class, 'search']);

