<?php

namespace App\Filament\Exports;

use App\Models\Nilai;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use Illuminate\Support\Number;

class NilaiExporter extends Exporter
{
    protected static ?string $model = Nilai::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('student.nis'),
            ExportColumn::make('student.name')
                ->label('Name'),
            ExportColumn::make('subject.name')
                ->label('Subject'),
            ExportColumn::make('nilai')
                ->label('Nilai'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your nilai export has completed and '.Number::format($export->successful_rows).' '.str('row')->plural($export->successful_rows).' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' '.Number::format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to export.';
        }

        return $body;
    }
}
