<?php

namespace App\Support;

use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;


class InvoiceGenerator
{
  protected ?Invoice $invoice = null;


    public static function create(array $data)
    {
        $instance = new self;

        $instance->invoice = Invoice::create([
            'invoice_number' => $data['invoice_number'],
            'customer_id' => $data['customer_id'],
            'issue_date' => $data['issue_date'],
            'due_date' => $data['due_date'],
            'total' => 0,
        ]);

        $total = 0;
        foreach ($data['lines'] as $line) {
            $item = $instance->invoice->products()->create([
                'description' => $line['description'],
                'quantity' => $line['quantity'],
                'unit_price' => $line['unit_price'],
                'total' => $line['quantity'] * $line['unit_price'],
            ]);
            $total += $item->total;
        }

        $instance->invoice->update(['total' => $total]);

        return $instance;
    }


    public function lines()
    {
        return $this->invoice->products;
    }

    public function getInvoice()
    {
        return $this->invoice;
    }
    public function generateInvoice(): static
{
    if (!$this->invoice) {
        throw new \RuntimeException("Invoice not initialized.");
    }

    $this->invoice->load('customer', 'invoice_items');
    return $this;
}
public function setInvoice(Invoice $invoice): static
{
    $this->invoice = $invoice;
    return $this;
}


public function downloadPdf()
{
    if (!$this->invoice) {
        throw new \RuntimeException("Invoice not initialized.");
    }

    $pdf = Pdf::loadView('invoices.pdf', ['invoice' => $this->invoice]);
    return $pdf->download('invoice-' . $this->invoice->invoice_number . '.pdf');
}

}
