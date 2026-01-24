<?php

namespace App\Filament\Resources\Nilais\Pages;

// use App\Filament\Exports\ProductExporter;

use App\Filament\Exports\NilaiExporter;
use App\Filament\Resources\Nilais\NilaiResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Actions\ExportAction;
use Filament\Resources\Pages\ListRecords;

class ListNilais extends ListRecords
{
    protected static string $resource = NilaiResource::class;

    protected function getHeaderActions(): array
    {
        // $queryString = request()->getQueryString();
        $decodequeryString = urldecode(request()->getQueryString());

        return [
            // Action::make('export')
            //     ->url(url('/export?'.$decodequeryString)),
            ExportAction::make()
                ->exporter(NilaiExporter::class)
                ->label('Export Nilai'),
            CreateAction::make(),
        ];
    }
}
