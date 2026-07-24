<?php

namespace App\Filament\Resources\AlbumLinks\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AlbumLinkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('album_id')
                    ->label('Album ID')
                    ->relationship('album', 'name')
                    ->required()
                    ->preload(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('url')
                    ->label('URL')
                    ->url()
                    ->required(),
            ]);
    }
}
