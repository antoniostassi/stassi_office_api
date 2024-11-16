<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Models

use App\Models\Outgoing;
use App\Models\Invoice;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/invoices', function() {
    $invoices = Invoice::all();
    return $invoices;
});