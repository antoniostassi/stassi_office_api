<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controllers

use App\Http\Controllers\Api\InvoiceController;

// Routes

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('invoices', InvoiceController::class)->only([
    'index',
    'show'
]);