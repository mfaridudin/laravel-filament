<?php

namespace App\Filament\Resources\CategoryNilais\Pages;

use App\Filament\Resources\CategoryNilais\CategoryNilaiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCategoryNilai extends EditRecord
{
    protected static string $resource = CategoryNilaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
