<?php

namespace App\Services\Invoice\Templates;

use App\Data\InvoiceData;
use App\Services\Invoice\InvoiceGenerator;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Type1Template implements InvoiceGenerator
{
    public function generate(InvoiceData $data): Response
    {
        $pdf = Pdf::loadView('invoices.type1', $data->toArray());

        return response($pdf->output())->header('Content-Type', 'application/pdf');
    }

    public function download(InvoiceData $data): StreamedResponse
    {
        $pdf = Pdf::loadView('invoices.type1', $data->toArray());

        return response()->streamDownload(
            fn () => print ($pdf->output()),
            $data->invoice_no.'.pdf',
            ['Content-Type' => 'application/pdf']
        );
    }
}
