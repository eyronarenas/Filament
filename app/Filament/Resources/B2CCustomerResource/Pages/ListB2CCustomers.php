<?php

namespace App\Filament\Resources\B2CCustomerResource\Pages;

use App\Filament\Resources\B2CCustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListB2CCustomers extends ListRecords
{
    protected static string $resource = B2CCustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
