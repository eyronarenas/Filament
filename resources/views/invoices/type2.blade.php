<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice {{ $invoice_no }}</title>
<link rel="stylesheet" href="{{ public_path('css/blade/type1.css') }}">
</head>
<body>

<img src="{{ public_path('images/allianz-logo.svg') }}" alt="Company Logo"
         style="width: 120px; height: auto; margin-right: 20px;">
    <div class="invoice-title-section">
        <span class="field-label">Invoice no.</span>
<span class="invoice-number">{{ $invoice_no }}</span>

    </div>

    <div class="main-section">
        <div class="supplier-customer-row">
            <div class="supplier-section">
                <div class="section-header">Supplier:</div>
                <div class="company-name">For x-treme distribution s.r.o.</div>
                <div>cp. 128 Cisovice - Praha 252 04</div>
                <div class="field-row id-vat-line">
                    <span class="field-label">ID:</span> 04252535 &nbsp;&nbsp;
                    <span class="field-label">VAT ID:</span> CZ04252535
                </div>
                <div class="bank-info">
                    <div><span class="field-label">BANK</span> Československá obchodní banka a.s.</div>
                    <div><span class="field-label">IBAN</span> CZ6103000000001017466813</div>
                    <div><span class="field-label">SWIFT</span> CEKOCZPP</div>
                    <div class="small-text">Obchodní rejstřík C 244758 vedená u Městského soudu v Praze</div>
                    <div class="small-text">Supplier is VAT payer</div>
                </div>
            </div>

            <div class="customer-section">
                <div class="field-row variable-symbol-line">
                    <span class="field-label">Variable symbol:</span>
                      <span class="field-label">500202503</span>
                </div>
                <div class="field-row purchase-order-line">
                    <span class="field-label">Purchase order:</span>
                      <span class="field-label">95272 - part 2</span>
                </div>
                <div class="field-row customer-divider">
                    <span class="field-label">Customer:</span> 11102
                </div>
                 <div class="company-name">{{ $customer_company }}</div>
                <div>{{ $ship_to_address }}</div>
                <div>{{ $ship_to_city }}</div>
                <div>{{ $ship_to_country }}</div>
                <div class="field-row id-vat-line">

                </div>

            </div>
        </div>

        <div class="bottom-section">
            <div class="payer-section">
                <div class="field-row">
                    <span class="field-label">Payer:</span> {{ $payer_id }}
                </div>
                <div class="company-name">{{ $customer_company }}</div>
                <div>{{ $ship_to_address }}</div>
                <div>{{ $ship_to_city }}</div>
                <div>{{ $ship_to_country }}</div>
               <div class="field-row" style="margin-top: 2px; display: flex; gap: 20px;">
                    <span class="field-label">ID:</span>
                    <span class="field-label">VAT ID: {{ $ship_to_vat_id ?? '' }}</span>
                </div>

            </div>

            <div class="ship-to-section">
                <div class="field-row">
                    <span class="field-label">Ship-to party:</span> 11102
                </div>
                <div>{{ $customer_company }}</div>
                <div>Prosta ulica 16</div>
                <div>Lozienica - Goleniow</div>
                <div>72-100</div>
                <div>Poland</div>
            </div>

            <div class="dates-section">
                <div class="field-row dates-spacing">
                    <span class="field-label">Date of issue:</span> {{ $issue_date }}
                </div>
                <div class="field-row dates-spacing">
                    <span class="field-label">Serv.ren date:</span> {{ $service_date }}
                </div>
                <div class="field-row dates-spacing">
                    <span class="field-label">Payment date:</span> {{ $payment_date }}
                </div>
                <div class="field-row dates-spacing">
                    <span class="field-label">Payment:</span> {{ $payment_terms }}
                </div>
                <div class="incoterms-spacing">
                    <span class="field-label">Incoterms:</span> {{ $incoterms }}
                </div>
            </div>
        </div>
    </div>

    <div class="order-delivery-section">
        <div class="order-left">
            <span class="field-label">Order:</span> {{ $order_ref ?? '7251133691' }}
        </div>
        <div class="order-right">
            <span class="field-label">Delivery note:</span> {{ $delivery_note ?? '' }}
        </div>
    </div>

    <table class="items-table">
        <thead>
            <tr>
                <th class="ean-col">EAN code</th>
                <th class="desc-col">Description</th>
                <th class="size-col">Size</th>
                <th class="color-col">Colour</th>
                <th class="qty-col">Quantity</th>
                <th class="price-col">Sales price unit</th>
                <th class="total-col">Total sales price EUR</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                    <td class="ean-col">{{ $item['ean_code'] }}</td>
                    <td class="desc-col">{{ $item['description'] }}</td>
                    <td class="size-col">{{ $item['size'] ?? '' }}</td>
                    <td class="color-col">{{ $item['colour'] ?? '' }}</td>
                    <td class="qty-col">{{ $item['quantity'] }}</td>
                    <td class="price-col">{{ number_format($item['unit_price'], 2) }}</td>
                    <td class="total-col">{{ number_format($item['total_price'], 2) }}</td>
            </tr>
        @endforeach
            <tr style="font-weight:bold;">
                <td colspan="4" style="text-align:center;">Total:</td>
                <td>{{ $total_quantity ?? 115 }}</td>
                 <td></td>
                <td style="text-align: right"> {{ number_format($grand_total ?? 612.69, 2) }}</td>
            </tr>
        </tbody>
    </table>

    <table class="invoice-summary-table">
        <tr>
            <td class="text-left">Output Tax</td>
            <td>base</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-right">{{ $total_amount }}</td>
        </tr>
        <tr>
            <td class="text-left">Total VAT</td>
            <td>base</td>
            <td class="text-right">0%</td>
            <td></td>
            <td></td>
            <td class="text-right">{{ $vat_amount }}</td>
        </tr>
        <tr>
            <td class="text-left">Invoice amount EUR</td>
            <td></td>
            <td class="text-right">{{ $vat_amount }}</td>
            <td></td>
            <td></td>
            <td class="text-right">{{ $total_amount }}</td>
        </tr>
    </table>
    <div class="bottom-section-note">
        Intracommunity to supply
    </div>

    <div class="total-amount-container">
        Total amount EUR:
        <span class="total-amount-box">
            612,69 €
        </span>
    </div>

    <div class="signature-section">
        <div class="signature-left">
            <div class="signature-line"></div>
            <div class="signature-label">Created: Stamp and sign</div>
        </div>

        <div class="signature-right">
            <div class="signature-line"></div>
            <div class="signature-label">Document assumed: Stamp and sign</div>
        </div>

        <div class="clear-both"></div>
    </div>
    <br>   <br>
<div style="text-align: left;">
    <span>{{ $print_date }}</span>

</div>
<div style="text-align: right;">
  <span>{{ $total_pages }}</span>
</div>
</body>
</html>
