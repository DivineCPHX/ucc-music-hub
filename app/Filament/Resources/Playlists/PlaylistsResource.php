<?php

namespace App\Filament\Resources\Playlists;

use App\Filament\Resources\Playlists\Pages\CreatePlaylists;
use App\Filament\Resources\Playlists\Pages\EditPlaylists;
use App\Filament\Resources\Playlists\Pages\ListPlaylists;
use App\Filament\Resources\Playlists\Pages\ViewPlaylists;
use App\Filament\Resources\Playlists\Schemas\PlaylistsForm;
use App\Filament\Resources\Playlists\Schemas\PlaylistsInfolist;
use App\Filament\Resources\Playlists\Tables\PlaylistsTable;
use App\Models\Playlist;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlaylistsResource extends Resource
{
    protected static ?string $model = Playlist::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return PlaylistsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PlaylistsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlaylistsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPlaylists::route('/'),
            'create' => CreatePlaylists::route('/create'),
            'view' => ViewPlaylists::route('/{record}'),
            'edit' => EditPlaylists::route('/{record}/edit'),
        ];
    }
}
