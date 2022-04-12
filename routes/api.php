<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
// use App\Http\Controllers\API\tourPlaceController;
use App\Http\Controllers\API\TourismPlacesController;

use App\Models\tour_place;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Login
Route::post('login', [AuthController::class, 'login']);


Route::group(["middleware" =>['auth:sanctum']], function() {
    Route::post('logout',[AuthController::class, 'logout']);
    Route::resource('tourplaces', TourismPlacesController::class);
});