<?php

use App\Http\Controllers\Api\BukuController;
use App\Http\Controllers\Api\OrderItemController;
use App\Http\Controllers\Api\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/buku',[BukuController::class, 'index']);
Route::get('/buku/{id}',[BukuController::class, 'show']);
Route::post('/buku',[BukuController::class, 'create']);
Route::put('/buku/{id}',[BukuController::class, 'update']);
Route::delete('/buku/{id}',[BukuController::class, 'delete']);

// order item
Route::get('/orderitem',[OrderItemController::class, 'index']);

//order

Route::get('/order',[OrderController::class, 'index']);