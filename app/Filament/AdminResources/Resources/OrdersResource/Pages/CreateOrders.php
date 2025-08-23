<?php

namespace App\Filament\AdminResources\Resources\OrdersResource\Pages;

use App\Filament\AdminResources\Resources\OrdersResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrders extends CreateRecord
{
    protected static string $resource = OrdersResource::class;
}
