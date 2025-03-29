<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\EcommerceController;

// require __DIR__ . '/admin.php';

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
Route::get('category', [MainController::class,'category']);
// Route::get('shopping-cart', [MainController::class,'cart'])->name('cart.shopping');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');


// Route::get('services', [MainController::class, 'services'])->name('services');
// Route::get('privacy-policy', [MainController::class, 'policy'])->name('policy');
// Route::get('terms-conditions', [MainController::class, 'terms'])->name('terms');
// Route::get('services/{url}', [MainController::class, 'serviceDetail'])->name('service.detail');
// Route::get('contact-us', [MainController::class, 'contact'])->name('contact');
// Route::get('career', [MainController::class, 'career'])->name('career');
// Route::get('blogs', [MainController::class, 'blogs'])->name('blogs');
// Route::get('blogs/{url}', [MainController::class, 'blogDetail'])->name('blog.detail');
// Route::post('contact-us', [MainController::class, 'enquiry'])->name('enquiry');

Route::get('categories', [EcommerceController::class, 'categories'])->name('categories');