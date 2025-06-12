<?php

namespace App\Filament\Resources\DecorOrderResource\Pages;

use App\Filament\Resources\DecorOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDecorOrders extends ListRecords
{
    protected static string $resource = DecorOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
