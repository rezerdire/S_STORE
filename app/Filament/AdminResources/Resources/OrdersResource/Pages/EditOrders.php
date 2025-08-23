<?php

namespace App\Filament\AdminResources\Resources\OrdersResource\Pages;

use App\Filament\AdminResources\Resources\OrdersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrders extends EditRecord
{
    protected static string $resource = OrdersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
