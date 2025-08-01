<?php

use App\Data\InvoiceDataFactory;
use App\Jobs\GenerateInvoicePdf;
use App\Services\Invoice\InvoiceService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice/job/{type}', function ($type) {
    $data = InvoiceDataFactory::make($type);
    $fileName = 'invoices/'.$data->invoice_no.'.pdf';

    GenerateInvoicePdf::dispatch($type, $data, $fileName);

    return 'Invoice job dispatched!';
});

Route::get('/invoice/download/{type}', function ($type, InvoiceService $service) {
    $data = InvoiceDataFactory::make($type); // ✅ generate the DTO

    return $service->download($type, $data); // ✅ now pass both correctly
});
