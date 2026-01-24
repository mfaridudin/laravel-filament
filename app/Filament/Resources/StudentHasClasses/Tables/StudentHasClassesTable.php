<?php

namespace App\Filament\Resources\StudentHasClasses\Tables;

use App\Models\ClassroomsModel;
use App\Models\PeriodesModel;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class StudentHasClassesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('students.name')
                    ->label('Nama Murid')
                    ->searchable(),
                TextColumn::make('classroom.name'),
            ])
            ->filters([
                // SelectFilter::make('classrooms_id')
                // ->options(ClassroomsModel::all()->pluck('name', 'id')),
                // SelectFilter::make('periode_id')
                // ->options(PeriodesModel::all()->pluck('cname', 'id'))
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
