<?php

use App\Http\Controllers\api\BarangController;
use App\Http\Controllers\api\SupplierController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/supplier',SupplierController::class);
Route::apiResource('/barang',BarangController::class);
