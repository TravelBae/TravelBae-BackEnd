<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\TourismPlacesController;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ConfirmationController;
use App\Http\Controllers\API\ViewAllHomepageController;
use App\Http\Controllers\API\BankController;

use App\Models\tour_place;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Login
Route::post('login', [AuthController::class, 'login']);

//Register
Route::post('register', [AuthController::class, 'register']);

Route::group(["middleware" =>['auth:sanctum']], function() {
    Route::resource('customer', CustomerController::class);
    Route::put('change-password/{id}', [CustomerController::class, 'change_password']);
    Route::get('check-token', [AuthController::class, 'check_token']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::resource('tourplaces', TourismPlacesController::class);
    Route::resource('event', EventController::class);
    Route::resource('admin/order', OrderController::class);
    Route::post('customer/order/create', [OrderController::class, 'store']);
    Route::get('customer/order/show_cus', [OrderController::class, 'show_by_cus_id']);
    Route::get('admin/confirmation/{id}', [ConfirmationController::class, 'confirmation']);
    Route::get('owner/homepage', [ViewAllHomepageController::class, 'homepage']);
    Route::resource('owner/order', OrderController::class);
    Route::resource('bank', BankController::class);
});
