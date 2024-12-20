<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SizeController;
use App\Http\Middleware\AcceptJsonMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::prefix("v1")->group(function () {
    Route::get("/", function () {
        $response = [
            "message" => "Welcome from Boss Nation API",
            "developed_by" => "MMS IT",
            "website" => "https://mms-it.com",
            "contact" => "+66825869290"
        ];
        return response()->json($response);
    });
    Route::controller(AuthController::class)->group(function () {
        Route::post('/pos-login', 'login');
    });
    Route::middleware('auth:sanctum')->group(function () {
        Route::controller(ProfileController::class)->prefix("user-profile")->group(function () {
            Route::post('/logout', 'logout');
            Route::get('/profile', 'profile');
            Route::post('/change-password', 'changePassword');
            Route::post('/change-name', 'changeName');
            Route::post('/change-profile-image', 'changeProfileImage');
        });
        Route::apiResource('gallery', GalleryController::class);
        Route::apiResource('brand', BrandController::class);
        Route::apiResource('size', SizeController::class);
        Route::apiResource('product-type', ProductTypeController::class);
        Route::apiResource('product-category', CategoryController::class);
    });
});
