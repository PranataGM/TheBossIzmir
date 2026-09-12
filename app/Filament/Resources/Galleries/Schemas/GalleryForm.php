<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_visible')->label('Görünür mü?')
                    ->default(true)
                    ->required(),
                SpatieMediaLibraryFileUpload::make('images')
                    ->collection('default')
                    ->multiple()
                    ->image()
                    ->columnSpanFull(),
            ]);
    }
}
