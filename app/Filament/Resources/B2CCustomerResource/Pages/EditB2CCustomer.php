<?php

namespace App\Filament\Resources\B2CCustomerResource\Pages;

use App\Filament\Resources\B2CCustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditB2CCustomer extends EditRecord
{
    protected static string $resource = B2CCustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
