<?php

namespace App\Filament\Resources\Songs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
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
                            ->label('Duration')
                            ->placeholder('3:45')
                            ->required()
                            ->dehydrateStateUsing(function ($state) {
                                [$minutes, $seconds] = array_map('intval', explode(':', $state));

                                return ($minutes * 60) + $seconds;
                            })
                            ->default(null)
                            ->columnSpanFull(),
                    ])->columns(2),

                RichEditor::make('song_lyrics')
                    ->default(null)
                    ->columnSpanFull(),

                // Textarea::make('social_links')
                //     ->label('Social Links')
                //     ->default(null),
                ])
            ])->columns(1);
    }
}
