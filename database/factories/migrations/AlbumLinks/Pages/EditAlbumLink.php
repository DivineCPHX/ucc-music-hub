<?php

namespace App\Filament\Resources\AlbumLinks\Pages;

use App\Filament\Resources\AlbumLinks\AlbumLinkResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAlbumLink extends EditRecord
{
    protected static string $resource = AlbumLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
