<?php

namespace App\Services\Invoice;

use App\Data\InvoiceData;
use Illuminate\Support\Facades\Storage;

class InvoiceService
{
    public function generate(string $type, InvoiceData $data): \Illuminate\Http\Response
    {
        return $this->resolveTemplate($type)->generate($data);
    }

    public function store(string $type, InvoiceData $data, string $path): string
    {
        $pdf = $this->resolveTemplate($type)->generate($data);
        Storage::put($path, $pdf->getContent());

        return $path;
    }

    public function resolveTemplate(string $type): InvoiceGenerator
    {
        return match ($type) {
            'type1' => app(\App\Services\Invoice\Templates\Type1Template::class),
            'type2' => app(\App\Services\Invoice\Templates\Type2Template::class),
            default => throw new \InvalidArgumentException("Unsupported invoice type: $type"),
        };
    }

    public function download(string $type, InvoiceData $data): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $template = $this->resolveTemplate($type);

        return $template->download($data);
    }
}
