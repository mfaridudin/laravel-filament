<?php

namespace App\Filament\Resources\Nilais\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use App\Models\CategoryNilaisModel;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\Summarizers\Sum;

class NilaisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name'),
                TextColumn::make('subject.name'),
                TextColumn::make('category_nilai.name'),
                TextColumn::make('nilai')
                ->summarize(Sum::make()),
                TextColumn::make('periode.name'),
            ])
            ->filters([
                SelectFilter::make('category_nilai_id')
                    ->options(CategoryNilaisModel::pluck('name', 'id')),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
