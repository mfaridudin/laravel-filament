<?php

namespace App\Filament\Resources\StudentHasClasses\Pages;

use App\Filament\Resources\StudentHasClasses\StudentHasClassResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStudentHasClass extends EditRecord
{
    protected static string $resource = StudentHasClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
