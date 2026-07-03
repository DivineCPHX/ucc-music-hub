<?php

namespace App\Filament\Resources\Indices\Pages;

use App\Filament\Resources\Indices\IndexResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditIndex extends EditRecord
{
    protected static string $resource = IndexResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
