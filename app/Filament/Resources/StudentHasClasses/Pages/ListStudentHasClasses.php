<?php

namespace App\Filament\Resources\StudentHasClasses\Pages;

use App\Filament\Resources\StudentHasClasses\StudentHasClassResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudentHasClasses extends ListRecords
{
    protected static string $resource = StudentHasClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
