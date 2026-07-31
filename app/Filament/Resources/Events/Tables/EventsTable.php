<?php

namespace App\Filament\Resources\Events\Tables;

use App\Models\Event;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('eventType.name')
                    ->label('Type')
                    ->badge()
                    ->sortable(),
                TextColumn::make('artist.name')
                    ->label('Artist')
                    ->toggleable()
                    ->sortable(),
                TextColumn::make('venue')
                    ->searchable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('event_date')
                    ->label('Date')
                    ->state(fn (Event $record) => $record->event_date->format('M d, Y — g:i A'))
                    ->sortable(query: fn ($query, $direction) => $query
                        ->orderBy('year', $direction)
                        ->orderBy('month', $direction)
                        ->orderBy('day', $direction)),
                IconColumn::make('is_active')->boolean()->label('Active'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('event_type_id')
                    ->relationship('eventType', 'name')
                    ->label('Type'),
                TernaryFilter::make('is_active')->label('Active'),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])->defaultSort('year')
            ->defaultSort('month')
            ->defaultSort('day');
    }
}
