<?php

namespace App\Filament\Resources\MenuItems\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MenuItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('menu_category_id')
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('name')->label('Ürün Adı')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->prefix('₺'),
                Toggle::make('is_active')->label('Aktif mi?')
                    ->default(true)
                    ->required(),
                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('default')
                    ->image()
                    ->columnSpanFull(),
            ]);
    }
}
