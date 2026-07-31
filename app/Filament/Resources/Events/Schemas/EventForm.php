<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Event Details')
                ->columns(2)
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->columnSpanFull(),
                    Select::make('event_type_id')
                        ->label('Event Type')
                        ->relationship('eventType', 'name')
                        ->required()
                        ->searchable()
                        ->preload(),
                    Select::make('artist_id')
                        ->label('Artist')
                        ->relationship('artist', 'name')
                        ->searchable()
                        ->preload(),
                ]),

                Section::make('Location')
                ->columns(2)
                ->schema([
                    TextInput::make('venue')->required(),
                    TextInput::make('location')->required()->placeholder('City, State, Country'),
                ]),

                Section::make('Date & Time')
                ->columns(4)
                ->schema([
                    TextInput::make('day')
                        ->numeric()
                        ->minValue(1)
                        ->maxValue(31)
                        ->required(),
                    Select::make('month')
                        ->options([
                            1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
                            5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
                            9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December',
                        ])
                        ->required(),
                    TextInput::make('year')
                        ->numeric()
                        ->minValue(now()->year)
                        ->required(),
                    TimePicker::make('time')
                        ->seconds(false)
                        ->required(),
                ]),

                Toggle::make('is_active')
                    ->label('Is Active')
                    ->required()
                    ->default(true),
            ]);
    }
}
