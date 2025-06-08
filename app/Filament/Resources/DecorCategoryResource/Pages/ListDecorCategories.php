<?php

namespace App\Filament\Resources\DecorCategoryResource\Pages;

use App\Filament\Resources\DecorCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDecorCategories extends ListRecords
{
    protected static string $resource = DecorCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
