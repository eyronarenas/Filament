<?php
use App\Models\Invoice;
use App\Support\InvoiceGenerator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice/{invoice}/pdf', function (Invoice $invoice) {
    $generator = (new InvoiceGenerator)->setInvoice($invoice)->generateInvoice();
    return $generator->downloadPdf();
});
