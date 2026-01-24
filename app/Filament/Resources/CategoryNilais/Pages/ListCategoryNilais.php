<?php

namespace App\Filament\Resources\CategoryNilais\Pages;

use App\Filament\Resources\CategoryNilais\CategoryNilaiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCategoryNilais extends ListRecords
{
    protected static string $resource = CategoryNilaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
