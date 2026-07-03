<?php

namespace App\Filament\Resources\Albums\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AlbumForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('artist_id')
                    ->label('Artist ID')
                    ->relationship('artist', 'name')
                    ->required()
                    ->preload(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('photo')
                    ->label('Album Photo')
                    ->disk('public')
                    ->directory('albums')
                    ->image(),
                TextInput::make('release_month')
                    ->default(null),
                TextInput::make('release_year')
                    ->numeric()
                    ->rules(['digits:4'])
                    ->minValue(1900)
                    ->maxValue((int) now()->format('Y')),
                Toggle::make('is_featured'),
            ]);
    }
}
