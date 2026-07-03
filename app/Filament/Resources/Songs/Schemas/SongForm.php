<?php

namespace App\Filament\Resources\Songs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SongForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('album_id')
                    ->required()
                    ->numeric(),
                TextInput::make('artist_id')
                    ->required()
                    ->numeric(),
                TextInput::make('genre_id')
                    ->required()
                    ->numeric(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->default(null),
                TextInput::make('song_photo')
                    ->default(null),
                TextInput::make('release_date')
                    ->numeric()
                    ->default(null),
                TextInput::make('song_bpm')
                    ->numeric()
                    ->default(null),
                TextInput::make('song_key')
                    ->default(null),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('song_lyrics')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('song_duration')
                    ->default(null),
                Textarea::make('social_links')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('playlist_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
