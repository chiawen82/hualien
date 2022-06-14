<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelItemController;
use App\Http\Controllers\TravelPlanController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/travel/item')->controller(TravelItemController::class)->group(function () {
    Route::post('/', 'create');
    Route::get('{id}', 'get');
});

Route::prefix('/travel/plan')->controller(TravelPlanController::class)->group(function () {
    Route::post('/', 'create');
});