<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    
    
    Route::get('/user', [\App\Http\Controllers\AuthController::class, 'getUser']);

    // Route::get('/user',function(Request $request){
    //     return $request->user();
    // });


    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::apiResource('/product', \App\Http\Controllers\ProductController::class);;

});

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
