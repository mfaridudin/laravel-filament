<?php

namespace App\Filament\Resources\CategoryNilais\Pages;

use App\Filament\Resources\CategoryNilais\CategoryNilaiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Contracts\Support\Htmlable;

class ManageCategoryNilais extends ManageRecords
{
    protected static string $resource = CategoryNilaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }



    public function getTitle(): string | Htmlable
    {
        return ('Kategori Nilai');
    }
}
