<?php

namespace App\Filament\Resources\Playlists\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PlaylistsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('artist_id')->label('Artist Name')->searchable()->sortable(),
                TextColumn::make('album_id')->label('Album Name')->searchable()->sortable(),
                TextColumn::make('title')->label('Playlist Name')->searchable()->sortable(),
                TextColumn::make('slug')->label('Slug'),
                ImageColumn::make('playlist_photo')->label('Playlist Photo')->disk('public')->visibility('public'),
                // TextColumn::make('playlist_creator'),
                TextColumn::make('playlist_duration'),
                TextColumn::make('playlist_followers')->label('Playlist Followers'),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
