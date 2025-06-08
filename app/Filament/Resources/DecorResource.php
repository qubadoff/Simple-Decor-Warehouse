<?php

namespace App\Filament\Resources;

use App\Enum\Decor\DecorStatusEnum;
use App\Filament\Resources\DecorResource\Pages;
use App\Models\Decor;
use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DecorResource extends Resource
{
    protected static ?string $model = Decor::class;

    protected static ?string $navigationGroup = 'Decor';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->required(),
                    TextInput::make('name')->required(),
                    Textarea::make('description'),
                    TextInput::make('count')->required()->numeric(),
                    TextInput::make('price')->required()->suffix(' AZN')->numeric()->default(0),
                    Select::make('status')
                        ->options([
                            DecorStatusEnum::ACTIVE->value => DecorStatusEnum::ACTIVE->name,
                            DecorStatusEnum::INACTIVE->value => DecorStatusEnum::INACTIVE->name,
                        ])->required()->default(DecorStatusEnum::ACTIVE->value),
                ])->columns(3),
                Section::make([
                    Repeater::make('decorProducts')->label('Products')
                        ->relationship()
                        ->required()
                        ->schema([
                            Select::make('product_id')->options(Product::query()->pluck('name', 'id'))->required()->label('Product'),
                            TextInput::make('count')->required()->numeric(),
                        ])->columns()
                ]),
                Section::make([
                    FileUpload::make('image')->image(),
                    FileUpload::make('video')->acceptedFileTypes(['video/mp4', 'video/ogg', 'video/webm', 'video/mkv']),
                ])->columns(),
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
                Tables\Columns\TextColumn::make('category.name')->searchable(),
                Tables\Columns\TextColumn::make('count')->sortable(),
                Tables\Columns\TextColumn::make('price')->suffix(' AZN')->sortable(),
                Tables\Columns\TextColumn::make('status')->badge(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')->date(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->relationship('category', 'name'),
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
            'index' => Pages\ListDecors::route('/'),
            'create' => Pages\CreateDecor::route('/create'),
            'edit' => Pages\EditDecor::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
