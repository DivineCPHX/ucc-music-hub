<?php

namespace App\Filament\Resources\AlbumLinks\Pages;

use App\Filament\Resources\AlbumLinks\AlbumLinkResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAlbumLinks extends ListRecords
{
    protected static string $resource = AlbumLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
