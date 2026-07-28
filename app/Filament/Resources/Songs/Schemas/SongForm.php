<?php

namespace App\Filament\Resources\Songs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SongForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Create Song')
                    ->schema([
                        Section::make('Foreign IDs')
                            ->schema([
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
                                // TextInput::make('playlist_id')
                                //     ->label('Playlist Name')
                                //     ->required()
                                //     ->numeric(),
                            ])->columns(2),

                Section::make('Meta A')
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('slug')
                            ->default(null),
                        Textarea::make('description')
                            ->default(null)
                            ->columnSpanFull(),
                        Toggle::make('is_featured')
                            ->label('Is Featured'),
                    ])->columns(2),

                Section::make('Media Upload')
                    ->schema([
                        FileUpload::make('song_photo')
                            ->label('Photo')
                            ->disk('public')
                            ->directory('songs')
                            ->image()
                            ->default(null),
                    ])->columnSpanFull(),

                Section::make('Meta B')
                    ->schema([
                        Select::make('release_month')
                            ->label('Release Month')
                            ->options([
                                'January' => 'Jan',
                                'February' => 'Feb',
                                'March' => 'Mar',
                                'April' => 'Apr',
                                'May' => 'May',
                                'June' => 'Jun',
                                'July' => 'Jul',
                                'August' => 'Aug',
                                'September' => 'Sep',
                                'October' => 'Oct',
                                'November' => 'Nov',
                                'December' => 'Dec',
                            ]),
                        TextInput::make('release_year')
                            ->label('Release Year')
                            ->numeric()
                                    ->rules(['digits:4'])
                                    ->minValue(1900)
                                    ->maxValue((int) now()->format('Y'))
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
                        TextInput::make('song_duration')
                            ->label('Duration (HH:MM:SS)')
                            ->placeholder('00:03:45')
                            ->required()
                            ->rule('regex:/^([0-1]?\d|2[0-3]):[0-5]\d:[0-5]\d$/')
                            ->dehydrateStateUsing(function ($state) {
                                [$hours, $minutes, $seconds] = array_map('intval', explode(':', $state));

                                return ($hours * 3600) + ($minutes * 60) + $seconds;
                            })
                            ->formatStateUsing(function ($state) {
                                if ($state === null) {
                                    return null;
                                }

                                return gmdate('H:i:s', $state);
                            })
                            ->default(null)
                            ->columnSpanFull(),
                    ])->columns(2),

                RichEditor::make('song_lyrics')
                    ->label('Song Lyrics')
                    ->default(null)
                    ->columnSpanFull(),

                Section::make('')
                    ->label('Song Links')
                    ->description('Kindly select the links in this order: 1. YouTube, 2. Spotify, 3. Audiomack, 4. Boomplay')
                    ->schema([
                         Repeater::make('social_links')
                            ->label('Social Links')
                            ->relationship('songLinks')
                            ->default(null)
                            ->schema([
                                Select::make('icon')
                                    ->label('Select Icon')
                                    ->options([
                                        'bi bi-youtube text-danger me-2' => 'YouTube',
                                        'bi bi-spotify text-success me-2' => 'Spotify',
                                        'bi bi-music-note-list text-warning me-2' => 'Audiomack',
                                    ])->required(),
                                TextInput::make('name')
                                    ->label('Platform')
                                    ->required(),
                                TextInput::make('url')
                                    ->label('Link')
                                    ->url()
                                    ->required()
                            ]),
                    ]),

                ])
            ])->columns(1);
    }
}
