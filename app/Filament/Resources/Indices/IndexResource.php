<?php

namespace App\Filament\Resources\Indices;

use App\Filament\Resources\Indices\Pages\CreateIndex;
use App\Filament\Resources\Indices\Pages\EditIndex;
use App\Filament\Resources\Indices\Pages\ListIndices;
use App\Filament\Resources\Indices\Schemas\IndexForm;
use App\Filament\Resources\Indices\Tables\IndicesTable;
use App\Models\Index;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class IndexResource extends Resource
{
    protected static ?string $model = Index::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return IndexForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IndicesTable::configure($table);
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
            'index' => ListIndices::route('/'),
            'create' => CreateIndex::route('/create'),
            'edit' => EditIndex::route('/{record}/edit'),
        ];
    }
}
