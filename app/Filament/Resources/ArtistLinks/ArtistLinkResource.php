<?php

namespace App\Filament\Resources\ArtistLinks;

use App\Filament\Resources\ArtistLinks\Pages\CreateArtistLink;
use App\Filament\Resources\ArtistLinks\Pages\EditArtistLink;
use App\Filament\Resources\ArtistLinks\Pages\ListArtistLinks;
use App\Filament\Resources\ArtistLinks\Schemas\ArtistLinkForm;
use App\Filament\Resources\ArtistLinks\Tables\ArtistLinksTable;
use App\Models\ArtistLink;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ArtistLinkResource extends Resource
{
    protected static ?string $model = ArtistLink::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ArtistLinkForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ArtistLinksTable::configure($table);
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
            'index' => ListArtistLinks::route('/'),
            'create' => CreateArtistLink::route('/create'),
            'edit' => EditArtistLink::route('/{record}/edit'),
        ];
    }
}
