<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Outgoing;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    //
    public function index() {
        $invoices = Invoice::all();
        return $invoices;
    }

    public function show(string $id) {
        $invoice = Invoice::where('id', $id)->first();

        if (!$invoice) {
            return response()->json([
                'success' => 'false',
                'message' => 'Fattura non trovata!'
            ]);
        };

        return $invoice;
    }
}
