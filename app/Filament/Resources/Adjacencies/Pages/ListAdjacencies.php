<?php

namespace App\Filament\Resources\Adjacencies\Pages;

use App\Filament\Resources\Adjacencies\AdjacencyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAdjacencies extends ListRecords
{
    protected static string $resource = AdjacencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
