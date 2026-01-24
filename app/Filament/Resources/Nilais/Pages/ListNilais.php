<?php

namespace App\Filament\Resources\Nilais\Pages;

use App\Filament\Resources\Nilais\NilaiResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNilais extends ListRecords
{
    protected static string $resource = NilaiResource::class;

    protected function getHeaderActions(): array
    {
        // $queryString = request()->getQueryString();
        $decodequeryString = urldecode(request()->getQueryString());

        return [
            Action::make('export')
                ->url(url('/export?'.$decodequeryString)),
            CreateAction::make(),
        ];
    }
}
