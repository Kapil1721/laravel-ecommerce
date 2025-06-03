<?php

use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;
use App\Http\Controllers\Customer\AddressController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
use App\Http\Controllers\Admin\DiscountsController;
use App\Http\Controllers\Customer\AuthController as CustomerAuthController;
use App\Http\Controllers\Customer\CustomerController;
use Illuminate\Support\Facades\Log;

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

    Route::apiResource('customers', AdminCustomerController::class);
    Route::get('countries', [AdminCustomerController::class, 'countries']);
    Route::apiResource('discounts', DiscountsController::class);
});

// Public Routes
Route::prefix('')->group(function () {
    Route::post('/login', [CustomerAuthController::class, 'login']);
    Route::post('/register', [CustomerAuthController::class, 'register']);
    Route::post('/forgot-password', [CustomerAuthController::class, 'forgotPassword']);
    Route::post('/reset-password', [CustomerAuthController::class, 'resetPassword']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [CustomerAuthController::class, 'logout']);
        Route::get('/email/verification-status', [CustomerAuthController::class, 'verificationStatus']);
        Route::get('/customer', fn(Request $request) => $request->user());
        Route::put('/customer', [CustomerController::class, 'update']);
        Route::put('/change-password', [CustomerController::class, 'changePassword']);
        Route::post('address/default', [AddressController::class, 'setAsDefault']);
        Route::apiResource('address', AddressController::class);
    });

    // Email Verification Routes
    Route::post('/email/verification-notification', [CustomerAuthController::class, 'resendVerificationEmail'])
        ->middleware(['auth:sanctum', 'throttle:6,1'])
        ->name('verification.send');

    Route::get('/email/verify/{id}/{hash}', [CustomerAuthController::class, 'verify'])
        ->name('verification.verify');
});

Route::get('admin/countries', [AdminCustomerController::class, 'countries']);
Route::get('index', [MainController::class, 'index'])->name('home');
Route::get('products', [MainController::class, 'products'])->name('products');
Route::get('products/{slug}', [MainController::class, 'productDetail'])->name('product.detail');
Route::get('collections', [MainController::class, 'collections'])->name('collections');
Route::get('collections/{slug}', [MainController::class, 'collectionDetail'])->name('collection.detail');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('shop', [MainController::class, 'shop'])->name('shop');
Route::get('blogs', [MainController::class, 'blogs'])->name('blogs');
Route::get('testimonials', [MainController::class, 'testimonials'])->name('testimonials');
Route::get('teams', [MainController::class, 'teams'])->name('teams');


Route::get('shop-collection', [MainController::class, 'shopcollection'])->name('shopcollection');
Route::get('my-account', [MainController::class, 'myaccount'])->name('my-account');
Route::get('products/search/{name}', [ProductController::class, 'search']);

// Test route for email verification
Route::get('/test-email', function () {
    try {
        $user = \App\Models\Customer::first();
        if (!$user) {
            return response()->json(['message' => 'No users found to test with'], 404);
        }

        // Send a test verification email
        $user->sendEmailVerificationNotification();

        return response()->json([
            'message' => 'Test verification email sent to ' . $user->email,
            'user' => $user->email
        ]);
    } catch (\Exception $e) {
        Log::error('Error sending test email: ' . $e->getMessage());
        return response()->json([
            'message' => 'Error sending test email',
            'error' => $e->getMessage()
        ], 500);
    }
});
