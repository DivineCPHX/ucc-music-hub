<?php

namespace App\Filament\Resources\Albums\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
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
                    ])
                    ->default(null),
                TextInput::make('release_year')
                    ->numeric()
                    ->rules(['digits:4'])
                    ->minValue(1900)
                    ->maxValue((int) now()->format('Y')),
                Toggle::make('is_featured'),
                Section::make('Links')
                    ->description('Kindly select the links in this order: 1. YouTube, 2. Spotify, 3. Audiomack, 4. Boomplay')
                    ->schema([
                        Repeater::make('Album Links')
                            ->relationship('albumLinks')
                            ->schema([
                                Select::make('icon')
                                ->options([
                                    'bi bi-youtube' => 'YouTube',
                                    'bi bi-spotify' => 'Spotify',
                                    'bi bi-audiomack' => 'Audiomack',
                                    'bi bi-disc' => 'Boomplay',
                                ])
                                ->live()
                                ->afterStateUpdated(function (Set $set, ?string $state)
                                {
                                    $map = [
                                        'bi bi-youtube' => 'btn btn-sm btn-outline-danger px-2 py-1',
                                        'bi bi-spotify' => 'btn btn-sm btn-outline-success px-2 py-1',
                                        'bi bi-audiomack' => 'btn btn-sm btn-outline-warning px-2 py-1',
                                        'bi bi-disc' => 'btn btn-sm btn-outline-info px-2 py-1'
                                    ];

                                    $set('class_indicator', $map[$state] ?? null);
                                })
                                ->required(),
                                Select::make('class_indicator')
                                    ->label('Class Indicator')
                                    ->options([
                                        'btn btn-sm btn-outline-danger px-2 py-1' => 'Red',
                                        'btn btn-sm btn-outline-success px-2 py-1' => 'Green',
                                        'btn btn-sm btn-outline-warning px-2 py-1' => 'Yellow',
                                        'btn btn-sm btn-outline-info px-2 py-1' => 'Blue'
                                    ])
                                    ->required(),
                                TextInput::make('url')
                                    ->label('Link')
                                    ->url()
                                    ->required(),
                                TextInput::make('name')
                                    ->label('Platform')
                                    ->required(),
                            ])
                    ])
            ]);
    }
}
