<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice {{ $invoice->invoice_number }}</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background: #f5f5f5; }
    </style>
</head>
<body>
    <h2>Invoice #{{ $invoice->invoice_number }}</h2>
    <p><strong>Customer:</strong> {{ $invoice->customer->name }}</p>
    <p><strong>Email:</strong> {{ $invoice->customer->email }}</p>
    <p><strong>Issue Date:</strong> {{ $invoice->issue_date }}</p>
    <p><strong>Due Date:</strong> {{ $invoice->due_date }}</p>

    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($invoice->invoice_items as $item)
                <tr>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ number_format($item->unit_price, 2) }}</td>
                    <td>{{ number_format($item->total, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"><strong>Total</strong></td>
                <td><strong>{{ number_format($invoice->total, 2) }}</strong></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
