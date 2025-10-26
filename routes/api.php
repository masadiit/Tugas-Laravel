<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');


Route::middleware(['auth:api'])->group(function(){
    Route::apiResource('/books', BookController::class)->only(['index', 'show']);
    Route::apiResource('/genres', GenreController::class)->only(['index', 'show']);
    Route::apiResource('/authors', AuthorController::class)->only(['index', 'show']);
    Route::apiResource('/transactions', TransactionController::class)->only(['update', 'store', 'show']);
    
    Route::middleware(['role:admin'])->group(function () {
        Route::apiResource('/books', BookController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/genres', GenreController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/authors', AuthorController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/transactions', TransactionController::class)->only(['index', 'destroy']);
    });
});


//Route::get('/genres', [GenreController::class, 'index']);
    
//Route::get('/authors', [AuthorController::class, 'index']);
//Route::post('/authors', [AuthorController::class, 'store']);

//Route::post('/genres', [GenreController::class, 'store']);

//Route::get('/books', [BookController::class, 'index']);
//Route::post('/books', [BookController::class, 'store']);