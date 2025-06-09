<?php

namespace App\Http\Controllers;

use App\Support\InvoiceGenerator;
use Illuminate\Http\Request;
use App\Models\Invoice;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    $data = $request->validate([
        'invoice_number' => 'required|string',
        'customer_id' => 'required|exists:customers,id',
        'issue_date' => 'required|date',
        'due_date' => 'required|date',
        'lines' => 'required|array',
        'lines.*.description' => 'required|string',
        'lines.*.quantity' => 'required|integer|min:1',
        'lines.*.unit_price' => 'required|numeric|min:0',
    ]);

    $invoiceGenerator = \App\Support\InvoiceGenerator::create($data)->generateInvoice();

    return response()->json([
        'invoice' => $invoiceGenerator->getInvoice(),
        'lines' => $invoiceGenerator->lines(),
    ], 201);
}

 public function downloadPdf(Invoice $invoice)
{
    $generator = new InvoiceGenerator();
    $generator->setInvoice($invoice); // Custom method we’ll define below
    return $generator->generateInvoice()->downloadPdf();
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
