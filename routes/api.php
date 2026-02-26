<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{query}', [BookController::class, 'search']);
Route::post('/loans', [LoanController::class, 'store']);
Route::put('/loans/{id}/return', [LoanController::class, 'update']);
Route::get('/loans', [LoanController::class, 'index']);
