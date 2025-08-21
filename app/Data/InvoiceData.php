<?php

namespace App\Data;

class InvoiceData
{
    public function __construct(
        public string $invoice_no,
        public string $issue_date,
        public string $service_date,
        public string $payment_date,
        public string $payment_terms,
        public int $payment_days,

        public string $supplier_name,
        public string $supplier_address,
        public string $supplier_city,
        public string $supplier_id,
        public string $supplier_vat_id,

        public string $bank_name,
        public string $iban,
        public string $swift,
        public string $business_register,

        public string $customer_company,
        public string $customer_id,
        public string $payer_id,

        public string $ship_to_name,
        public string $ship_to_address,
        public string $ship_to_city,
        public string $ship_to_country,

        public string $incoterms,

        public array $items,

        public int $total_quantity,
        public float $subtotal,
        public float $tax_rate,
        public float $vat_base,
        public float $vat_amount,
        public float $total_amount,

        public string $print_date,

        public ?string $variable_symbol = null,
        public ?string $purchase_order = null,
        public ?string $delivery_note = null,
        public ?string $order_ref = null,
        public ?string $ship_to_vat_id = null,
        public ?bool $insurance_warning = false,
        public ?int $total_pages = 1,

        public ?string $customer_address = null,
        public ?string $customer_city = null,
        public ?string $customer_country = null,
        public ?string $customer_company_id = null,
        public ?string $customer_vat_id = null,
        public ?string $ship_to_company = null,
        public ?string $ship_to_postal_code = null,
        public ?float $output_tax = null,
        public ?float $grand_total = null,
    ) {
        $this->customer_address ??= $this->ship_to_address;
        $this->customer_city ??= $this->ship_to_city;
        $this->customer_country ??= $this->ship_to_country;
        $this->ship_to_company ??= $this->ship_to_name;
        $this->output_tax ??= $this->vat_base;
        $this->grand_total ??= $this->total_amount;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
