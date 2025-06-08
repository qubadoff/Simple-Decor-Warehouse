<?php

namespace App\Filament\Resources\DecorCategoryResource\Pages;

use App\Filament\Resources\DecorCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDecorCategory extends EditRecord
{
    protected static string $resource = DecorCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
