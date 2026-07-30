<?php

namespace App\Filament\Resources\Playlists\RelationManagers;

use App\Filament\Resources\Songs\SongResource;
use App\Models\Song;
use Filament\Actions\AttachAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SongsRelationManager extends RelationManager
{
    protected static string $relationship = 'songs';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $relatedResource = SongResource::class;

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            // not needed for attaching existing songs, but required by Filament
        ]);
    }


    public function table(Table $table): Table
    {
        return $table
            ->recordTitle(fn (Song $record): string => $record->title ?? 'NO TITLE')
            ->columns([
                ImageColumn::make('song_photo')
                    ->disk('public')
                    ->label(''),
                TextColumn::make('title'),
                TextColumn::make('artist.name'),
                TextColumn::make('pivot.order')
                    ->label('Order'),
            ])
            ->reorderable('order')
            ->defaultSort('order')
            ->headerActions([
                AttachAction::make()
                    ->preloadRecordSelect()
                    ->recordSelectSearchColumns(['title'])
                    ->schema(fn (AttachAction $action): array => [
                        $action->getRecordSelect(),
                        TextInput::make('order')
                            ->numeric()
                            ->default(fn (RelationManager $livewire) =>
                                ($livewire->getOwnerRecord()->songs()->max('order') ?? 0) + 1
                            )
                            ->disabled()
                            ->dehydrated(), // keep the value even though the field is disabled
                    ]),
            ])
            ->recordActions([
                DetachAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DetachBulkAction::make(),
                ]),
            ]);
    }
}
