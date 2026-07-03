<?php

namespace App\Filament\Resources\AlbumLinks;

use App\Filament\Resources\AlbumLinks\Pages\CreateAlbumLink;
use App\Filament\Resources\AlbumLinks\Pages\EditAlbumLink;
use App\Filament\Resources\AlbumLinks\Pages\ListAlbumLinks;
use App\Filament\Resources\AlbumLinks\Schemas\AlbumLinkForm;
use App\Filament\Resources\AlbumLinks\Tables\AlbumLinksTable;
use App\Models\AlbumLink;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AlbumLinkResource extends Resource
{
    protected static ?string $model = AlbumLink::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AlbumLinkForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AlbumLinksTable::configure($table);
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
            'index' => ListAlbumLinks::route('/'),
            'create' => CreateAlbumLink::route('/create'),
            'edit' => EditAlbumLink::route('/{record}/edit'),
        ];
    }
}
