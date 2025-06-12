<?php

namespace App\Filament\Resources;

use App\Enum\Decor\DecorOrderStatusEnum;
use App\Enum\Decor\DecorStatusEnum;
use App\Filament\Resources\DecorOrderResource\Pages;
use App\Models\DecorOrder;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DecorOrderResource extends Resource
{
    protected static ?string $model = DecorOrder::class;

    protected static ?string $navigationGroup = 'Decor Order';

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Select::make('decor_id')->relationship('decor', 'name')->searchable()->required(),
                    TextInput::make('price')->required()->suffix(' AZN'),
                    TextInput::make('name')->required(),
                    TextInput::make('phone')->required(),
                    DateTimePicker::make('order_date')->required(),
                    TextInput::make('location')->required(),
                    Textarea::make('message')->nullable(),
                    Textarea::make('note')->nullable(),
                    Select::make('status')
                        ->options([
                            DecorOrderStatusEnum::PENDING->value => DecorOrderStatusEnum::PENDING->getLabel(),
                            DecorOrderStatusEnum::PROCESSING->value => DecorOrderStatusEnum::PROCESSING->getLabel(),
                            DecorOrderStatusEnum::COMPLETED->value => DecorOrderStatusEnum::COMPLETED->getLabel(),
                            DecorOrderStatusEnum::CANCELLED->value => DecorOrderStatusEnum::CANCELLED->getLabel(),
                            DecorOrderStatusEnum::REJECTED->value => DecorOrderStatusEnum::REJECTED->getLabel(),
                            DecorOrderStatusEnum::FAILED->value => DecorOrderStatusEnum::FAILED->getLabel(),
                        ])->required()->default(DecorOrderStatusEnum::PENDING->value),
                ])->columns(4)
            ]);
    }

    /**
     * @throws \Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('phone')->searchable(),
                Tables\Columns\TextColumn::make('order_date')->dateTime(),
                Tables\Columns\TextColumn::make('location')->searchable(),
                Tables\Columns\TextColumn::make('decor.name')->searchable(),
                Tables\Columns\TextColumn::make('price')->searchable(),
                Tables\Columns\TextColumn::make('status')->badge(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                ->options([
                    DecorOrderStatusEnum::PENDING->value => DecorOrderStatusEnum::PENDING->getLabel(),
                    DecorOrderStatusEnum::PROCESSING->value => DecorOrderStatusEnum::PROCESSING->getLabel(),
                    DecorOrderStatusEnum::COMPLETED->value => DecorOrderStatusEnum::COMPLETED->getLabel(),
                    DecorOrderStatusEnum::CANCELLED->value => DecorOrderStatusEnum::CANCELLED->getLabel(),
                    DecorOrderStatusEnum::REJECTED->value => DecorOrderStatusEnum::REJECTED->getLabel(),
                    DecorOrderStatusEnum::FAILED->value => DecorOrderStatusEnum::FAILED->getLabel(),
                ]),
                Tables\Filters\TrashedFilter::make()
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDecorOrders::route('/'),
            'create' => Pages\CreateDecorOrder::route('/create'),
            'view' => Pages\ViewDecorOrder::route('/{record}'),
            'edit' => Pages\EditDecorOrder::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
