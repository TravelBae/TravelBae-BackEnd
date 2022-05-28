<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TourismPlacesController;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ConfirmationController;
use App\Http\Controllers\API\ViewAllHomepageController;

use App\Models\tour_place;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Login
Route::post('login', [AuthController::class, 'login']);

Route::group(["middleware" =>['auth:sanctum']], function() {
    Route::get('check-token', [AuthController::class, 'check_token']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::resource('tourplaces', TourismPlacesController::class);
    Route::resource('event', EventController::class);
    Route::resource('admin/order', OrderController::class);
    Route::get('admin/confirmation/{id}', [ConfirmationController::class, 'confirmation']);
    Route::get('owner/homepage', [ViewAllHomepageController::class, 'homepage']);
    Route::resource('owner/order', OrderController::class);
});
