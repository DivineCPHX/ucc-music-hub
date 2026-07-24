<?php

namespace App\Filament\Resources\Artists\RelationManagers;

use Filament\Actions\AttachAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ArtistLinksRelationManager extends RelationManager
{
    protected static string $relationship = 'artistLinks';

    public function isReadOnly(): bool
    {
        return false;
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->default(null),
                // TextInput::make('icon')
                //     ->default(null)
                //     ->required(),
                Select::make('icon')
                    ->options([
                        'bi bi-instagram' => 'Instagram',
                        'bi bi-facebook' => 'Facebook',
                        'bi bi-youtube' => 'YouTube',
                        'bi bi-spotify' => 'Spotify',
                        'bi bi-globe' => 'Website',
                    ])
                    ->default(null)
                    ->required(),
                Textarea::make('url')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('link')
            ->columns([
                TextColumn::make('artist.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable(),
                SelectColumn::make('icon')
                    ->options([
                        'bi bi-instagram' => 'Instagram',
                        'bi bi-facebook' => 'Facebook',
                        'bi bi-youtube' => 'YouTube',
                        'bi bi-spotify' => 'Spotify',
                        'bi bi-globe' => 'Website',
                    ])
                    ->searchable(),
                TextColumn::make('url')
                    ->searchable(),
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
                //
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
