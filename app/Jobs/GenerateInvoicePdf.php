<?php

namespace App\Jobs;

use App\Data\InvoiceData;
use App\Services\Invoice\InvoiceService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateInvoicePdf implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $type;

    public array $data;

    public string $path;

    public function __construct(string $type, InvoiceData $data, string $path)
    {
        $this->type = $type;
        $this->data = $data->toArray();
        $this->path = $path;
    }

    public function handle(InvoiceService $invoice): void
    {
        $invoice->store($this->type, new InvoiceData(...$this->data), $this->path);
    }
}
