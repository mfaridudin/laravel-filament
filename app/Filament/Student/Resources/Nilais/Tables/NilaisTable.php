<?php

namespace App\Filament\Student\Resources\Nilais\Tables;

use App\Models\ClassroomsModel;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class NilaisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject.name'),
                TextColumn::make('nilai'),
                TextColumn::make('periode.name'),

            ])
            ->filters([
                SelectFilter::make('class_id')
                    ->options(ClassroomsModel::whereHas('students', function ($query) {
                        $query->where('user_id', Auth::user()->id);
                    })->groupBy('name', 'id')->pluck('name', 'id')),
            ])
            ->recordActions([
                // EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
