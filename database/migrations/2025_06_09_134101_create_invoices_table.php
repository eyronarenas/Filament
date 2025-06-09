<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('invoices', function (Blueprint $table) {
        $table->id()->comment('Primary key ID for the invoice');

        $table->foreignId('customer_id')
              ->constrained()
              ->onDelete('cascade')
              ->comment('Foreign key referencing customers table');

        $table->string('invoice_number')
              ->unique()
              ->comment('Unique invoice number');

        $table->date('invoice_date')
              ->comment('Date when the invoice was issued');

        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
