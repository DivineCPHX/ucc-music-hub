<?php

namespace App\Filament\Resources\ArtistLinks\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ArtistLinkForm
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
                TextInput::make('url')
                    ->label('URL')
                    ->url()
                    ->required(),
            ]);
    }
}
