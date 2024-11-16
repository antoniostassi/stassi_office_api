<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controllers

use App\Http\Controllers\Api\InvoiceController;
use App\Http\Controllers\Api\OutgoingController;

// Routes

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('invoices', InvoiceController::class)->middleware('auth')->only([
    'index',
    'show'
]);

Route::resource('outgoings', OutgoingController::class)->only([
    'index',
    'show'
]);