<?php

namespace App\Filament\Resources\Indices\Pages;

use App\Filament\Resources\Indices\IndexResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListIndices extends ListRecords
{
    protected static string $resource = IndexResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
