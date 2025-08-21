<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Invoice extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \App\Services\Invoice\InvoiceService::class;
    }
}
