<?php

namespace App\Filament\Resources\Adjacencies\Pages;

use App\Filament\Resources\Adjacencies\AdjacencyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAdjacency extends EditRecord
{
    protected static string $resource = AdjacencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
