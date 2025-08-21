<?php

namespace App\Services\Invoice;

use App\Data\InvoiceData;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

interface InvoiceGenerator
{
    public function generate(InvoiceData $data): Response;

    public function download(InvoiceData $data): StreamedResponse;
}
