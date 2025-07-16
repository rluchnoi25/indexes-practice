<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/orders/search', [OrderController::class, 'search']);