<?php

use Conv\App\Http\Controllers\ConvController;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', [ConvController::class, 'index']);
Route::post('/', [ConvController::class, 'getwords']);
