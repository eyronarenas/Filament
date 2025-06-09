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
       Schema::create('invoice_items', function (Blueprint $table) {
        $table->id()->comment('Primary key ID for the invoice item');

        $table->foreignId('invoice_id')
            ->constrained()
            ->onDelete('cascade')
            ->comment('Foreign key referencing invoices table');

        $table->string('description')
            ->comment('Description of the invoice item');

        $table->integer('quantity')
            ->comment('Quantity of the item');

        $table->decimal('unit_price', 10, 2)
            ->comment('Unit price of the item');

        $table->decimal('total', 10, 2)
            ->comment('Total price for the quantity of items');

        $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
