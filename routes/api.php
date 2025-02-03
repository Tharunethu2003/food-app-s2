<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\PostController;




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [AuthController::class, 'loginApi']);
Route::post('/register', [AuthController::class, 'registerApi']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logoutApi']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json(['user' => $request->user()]);
});




Route::apiResource('reviews', ReviewController::class);

Route::get('/recipes', [RecipeController::class, 'index']);
Route::middleware('auth:sanctum')->get('/recipes', [RecipeController::class, 'index']);


Route::get('/reviews', [ReviewController::class, 'index']);
Route::post('/reviews', [ReviewController::class, 'store']);
