<?php

namespace App\Filament\Resources\Nilais\Schemas;

use App\Models\CategoryNilaisModel;
use App\Models\ClassroomsModel;
use App\Models\PeriodesModel;
use App\Models\StudentsModel;
use App\Models\SubjectsModel;
use App\Models\TeachersModel;
use Closure;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class NilaiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('class_id')
                    ->label('Class')
                    ->options(ClassroomsModel::pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                Select::make('periode_id')
                    ->label('Periode')
                    ->options(PeriodesModel::pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                Select::make('subject_id')
                    ->label('Subject')
                    ->options(SubjectsModel::pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                Select::make('category_nilai_id')
                    ->label('Category Nilai')
                    ->options(CategoryNilaisModel::pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                Select::make('teacher_id')
                    ->label('Teacher')
                    ->options(TeachersModel::pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                Repeater::make('details')
                    ->label('Daftar Nilai Siswa')
                    ->schema([

                        Select::make('student_id')
                            ->label('Student')
                            ->options(StudentsModel::pluck('name', 'id'))
                            ->searchable()
                            ->required(),

                        TextInput::make('nilai')
                            ->numeric()
                            ->required()
                            ->rules([
                                fn (Get $get): Closure => function (string $attribute, $value, Closure $fail) {
                                    if ($value > 100) {
                                        $fail('Nilai tidak boleh lebih dari 100');
                                    }
                                },
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
                    ->columnSpanFull()
                    ->addActionLabel('Tambah Siswa')
                    ->reorderable()
                    ->defaultItems(1)
                    ->itemLabel(fn (array $state): ?string => $state['student_id']
                            ? StudentsModel::find($state['student_id'])?->name
                            : 'Nilai Siswa'
                    ),
            ])
            ->columns(3);
    }
}
