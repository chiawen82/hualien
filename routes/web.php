<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate/token', [TestController::class, 'generateCsrfToken']);

