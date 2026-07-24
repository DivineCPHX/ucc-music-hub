<?php

namespace App\Filament\Resources\Artists\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;

class ArtistForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('')
                    ->schema([

                        Select::make('genre_id')
                        ->label('Genre ID')
                        ->relationship('genre', 'name')
                        ->required()
                        ->preload(),
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        DateTimePicker::make('email_verified_at'),
                        TextInput::make('password')
                            ->password()
                            ->required(),
                        TextInput::make('slug')
                            ->required(),
                        Textarea::make('bio')
                            ->default(null)
                            ->columnSpanFull(),
                        FileUpload::make('artist_photo')
                            ->label('Artist Photo')
                            ->disk('public')
                            ->directory('artists')
                            ->image(),
                        Toggle::make('is_featured'),
                        TextInput::make('artist_label'),
                        TextInput::make('artist_location'),
                        TextInput::make('artist_listeners'),
                        TextInput::make('active_since')
                            ->numeric()
                            ->rules(['digits:4'])
                            ->minValue(1900)
                            ->maxValue((int) now()->format('Y')),
                        Section::make('links')
                        ->schema([
                            Repeater::make('artistLinks')
                                ->relationship('artistLinks')
                                ->schema([
                                    Select::make('icon')
                                        ->options([
                                            'bi bi-instagram' => 'Instagram',
                                            'bi bi-facebook' => 'Facebook',
                                            'bi bi-youtube' => 'YouTube',
                                            'bi bi-spotify' => 'Spotify',
                                            'bi bi-globe' => 'Website',
                                        ])
                                        ->required(),
                                    TextInput::make('link')
                                        ->url()
                                        ->required(),
                                    TextInput::make('platform')
                                        ->required(),
                                ])->columns(2)
                            ])->columns(1)
                    ])->columns(2)
            ])->columns(1);
    }
}
