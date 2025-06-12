<?php

namespace App\Filament\Resources\DecorOrderResource\Pages;

use App\Filament\Resources\DecorOrderResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Tables\Columns\ImageColumn;

class ViewDecorOrder extends ViewRecord
{
    protected static string $resource = DecorOrderResource::class;

    public function infoList(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make([
                    Infolists\Components\TextEntry::make('name'),
                    Infolists\Components\TextEntry::make('phone'),
                    Infolists\Components\TextEntry::make('order_date')->dateTime(),
                    Infolists\Components\TextEntry::make('location'),
                    Infolists\Components\TextEntry::make('message'),
                    Infolists\Components\TextEntry::make('note'),
                    Infolists\Components\TextEntry::make('status')->badge(),
                ])->columns(3),
                Infolists\Components\Section::make([
                    Infolists\Components\TextEntry::make('decor.name')->label('Decor Name'),
                    Infolists\Components\TextEntry::make('price'),
                    Infolists\Components\ImageEntry::make('decor.image')->label('Decor Image'),
                ])->columns(3)
            ]);
    }
}
