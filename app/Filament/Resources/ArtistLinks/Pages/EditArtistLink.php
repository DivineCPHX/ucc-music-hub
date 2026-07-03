<?php

namespace App\Filament\Resources\ArtistLinks\Pages;

use App\Filament\Resources\ArtistLinks\ArtistLinkResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditArtistLink extends EditRecord
{
    protected static string $resource = ArtistLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
