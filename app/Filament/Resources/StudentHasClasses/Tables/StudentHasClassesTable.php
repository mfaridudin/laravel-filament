<?php

namespace App\Filament\Resources\StudentHasClasses\Tables;

use App\Models\ClassroomsModel;
use App\Models\PeriodesModel;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Builder;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class StudentHasClassesTable
{

    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')
                    ->label('Nama Murid')
                    ->searchable(),
                TextColumn::make('classroom.name'),
                TextColumn::make('periode.name'),
            ])
            ->filters([
                // SelectFilter::make('classrooms_id')
                //     ->options(ClassroomsModel::all()->pluck('name', 'id')),
                // SelectFilter::make('periode_id')
                //     ->options(PeriodesModel::all()->pluck('cname', 'id')),
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),
            ])
            ->toolbarActions([

            ]);

    }
}
