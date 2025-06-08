<?php

namespace App\Filament\Resources\DecorResource\Pages;

use App\Filament\Resources\DecorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDecor extends EditRecord
{
    protected static string $resource = DecorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
