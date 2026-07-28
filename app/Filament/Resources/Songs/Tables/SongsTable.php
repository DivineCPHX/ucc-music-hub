<?php

namespace App\Filament\Resources\Songs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SongsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('genre_id')
                //     ->numeric()
                //     ->sortable(),
                // TextColumn::make('artist_id')
                //     ->numeric()
                //     ->sortable(),
                // TextColumn::make('album_id')
                //     ->numeric()
                //     ->sortable(),
                // TextColumn::make('playlist_id')
                //     ->numeric()
                //     ->sortable(),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable(),
                ImageColumn::make('song_photo')
                    ->visibility('public')
                    ->disk('public')
                    ->square(),
                TextColumn::make('release_month')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('release_year')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('song_bpm')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('song_key')
                    ->searchable(),
                TextColumn::make('formatted_duration')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                IconColumn::make('is_featured')
                    ->label('Is Featured')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
