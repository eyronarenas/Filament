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
        Schema::create('b2_c_customers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->comment('Unique email address of the customer');
            $table->string('phone')->nullable()->comment('Optional phone number');
            $table->string('name')->comment('Full name of the customer');
            $table->json('billing_address')->nullable()->comment('Structured JSON: street, city, state, zip');
            $table->json('shipping_address')->nullable()->comment('Structured JSON: street, city, state, zip');
            $table->string('channel')->comment('Customer acquisition channel: website or store');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b2_c_customers');
    }
};
