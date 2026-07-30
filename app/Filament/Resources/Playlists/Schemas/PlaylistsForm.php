<?php

namespace App\Filament\Resources\Playlists\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PlaylistsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('artist_id')
                    ->label('Artist Name')
                    ->relationship('artist', 'name')
                    ->required(),
                Select::make('album_id')
                    ->label('Album Name')
                    ->relationship('album', 'name')
                    ->required(),
                TextInput::make('title')
                    ->label('Playlist Name')
                    ->required()
                    ->unique(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required(),
                TextInput::make('description')
                    ->label('Description'),
                Toggle::make('is_featured')
                    ->label('Is Featured'),
                FileUpload::make('playlist_photo')
                    ->label('Playlist Photo')
                    ->disk('public')
                    ->directory('playlist')
                    ->image()
                    ->default(null),
                TextInput::make('playlist_creator')->default(null),
                /////////////
                TextInput::make('playlist_duration')
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
                ////////////
                TextInput::make('playlist_followers'),

                Section::make()
                    ->label('Playlist Links')
                    ->description('Kindly select the links in this order: 1. YouTube, 2. Spotify, 3. Audiomack, 4. Boomplay')
                    ->schema([
                        Repeater::make('playlist_links')
                            ->label('Playlist Links')
                            ->relationship('playlistLinks')
                            ->default(null)
                            ->schema([
                                Select::make('icon')
                                    ->label('Select Icon')
                                    ->options([
                                        'bi bi-youtube text-danger me-2' => 'YouTube',
                                        'bi bi-spotify text-success me-2' => 'Spotify',
                                        'bi bi-music-note-list text-warning me-2' => 'Audiomack',
                                    ])->required(),
                                TextInput::make('url')
                                    ->label('Link')
                                    ->url()
                                    ->required(),
                                TextInput::make('name')
                                    ->label('Platform')
                                    ->required(),
                            ])->columns(3),
                    ])->columnSpanFull(),
            ]);
    }
}
