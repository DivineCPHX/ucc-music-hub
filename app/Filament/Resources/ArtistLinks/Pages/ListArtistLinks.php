<?php

namespace App\Filament\Resources\ArtistLinks\Pages;

use App\Filament\Resources\ArtistLinks\ArtistLinkResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListArtistLinks extends ListRecords
{
    protected static string $resource = ArtistLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
