<?php

namespace App\Filament\Resources\StudentHasClasses\Schemas;

use App\Models\ClassroomsModel;
use App\Models\HomeRoomModel;
use App\Models\PeriodesModel;
use App\Models\StudentsModel;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class StudentHasClassForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                  Select::make('students_id')
                    ->searchable()
                    ->options(StudentsModel::all()->pluck('name', 'id'))
                    ->label('Student'),

                Select::make('classrooms_id')
                    ->searchable()
                    ->options(ClassroomsModel::all()->pluck('name', 'id'))
                    ->label('Class'),

                Select::make('periode_id')
                    ->label('Periode')
                    ->searchable()
                    ->options(PeriodesModel::all()->pluck('name', 'id')),
            ]);
    }
}
