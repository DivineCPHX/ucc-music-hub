<?php

namespace App\Filament\Resources\Songs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SongForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('genre_id')
                    ->label('Genre Name')
                    ->relationship('genre', 'name')
                    ->required(),
                Select::make('artist_id')
                    ->label('Artist Name')
                    ->relationship('artist', 'name')
                    ->required(),
                Select::make('album_id')
                    ->label('Album Name')
                    ->relationship('album', 'name')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->default(null),
                FileUpload::make('song_photo')
                    ->label('Photo')
                    ->disk('disk')
                    ->directory('songs')
                    ->image()
                    ->default(null),
                TextInput::make('release_date')
                    ->label('Release Date')
                    ->numeric()
                    ->default(null),
                TextInput::make('song_bpm')
                    ->label('Beat per minute')
                    ->numeric()
                    ->default(null),
                Select::make('song_key')
                    ->label('Standard Musical Key')
                    ->options([
                        'Key C' => 'key-c', 'Key C#' => 'key-c#', 'Key Db' => 'key-db', 'Key D' => 'key-d',
                        'Key D#' => 'key-d#', 'Key Eb' => 'key-eb', 'Key E' => 'key-e', 'Key F' => 'key-f',
                        'Key F#' => 'key-f#', 'Key Gb' => 'key-gb', 'Key G' => 'key-g', 'Key G#' => 'key-g#',
                        'Key Ab' => 'key-ab', 'Key A' => 'key-a', 'Key A#' => 'key-a#', 'Key Bb' => 'key-bb',
                        'Key B' => 'key-b'
                    ])
                    ->default(null),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                RichEditor::make('song_lyrics')
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
