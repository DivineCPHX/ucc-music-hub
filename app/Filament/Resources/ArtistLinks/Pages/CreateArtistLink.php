<?php

namespace App\Filament\Resources\ArtistLinks\Pages;

use App\Filament\Resources\ArtistLinks\ArtistLinkResource;
use Filament\Resources\Pages\CreateRecord;

class CreateArtistLink extends CreateRecord
{
    protected static string $resource = ArtistLinkResource::class;
}
