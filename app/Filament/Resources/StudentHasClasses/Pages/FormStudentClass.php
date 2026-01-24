<?php

namespace App\Filament\Resources\StudentHasClasses\Pages;

use App\Filament\Resources\StudentHasClasses\StudentHasClassResource;
use App\Models\ClassroomsModel;
use App\Models\HomeRoomModel;
use App\Models\PeriodesModel;
use App\Models\StudentHasClassModel;
use App\Models\StudentsModel;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Resources\Pages\Page;
use Filament\Schemas\Components\Section;

class FormStudentClass extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = StudentHasClassResource::class;

    protected string $view = 'filament.resources.student-has-classes.pages.form-student-class';

    public $students = [];

    public $classrooms_id;

    public $periode_id;

    public function mount()
    {
        $this->form->fill();
    }

    protected function getFormSchema(): array
    {
        return [
            Section::make()
                ->schema([
                    Select::make('students')
                        ->label('Student')
                        ->multiple()
                        ->searchable()
                        ->options(
                            StudentsModel::all()->pluck('name', 'id')
                        )
                        ->required(),

                    Select::make('classrooms_id')
                        ->label('Class')
                        ->searchable()
                        ->options(
                            ClassroomsModel::all()->pluck('name', 'id')
                        )
                        ->required(),

                    Select::make('periode_id')
                        ->label('Periode')
                        ->searchable()
                        ->options(
                            PeriodesModel::all()->pluck('name', 'id')
                        )
                        ->required(),
                ]),
        ];
    }

    public function save()
    {
        $insert = [];

        foreach ($this->students as $studentId) {
            $insert[] = [
                'students_id' => $studentId,
                'classrooms_id' => $this->classrooms_id,
                'periode_id' => $this->periode_id,
                'is_open' => 1,
            ];
        }

        StudentHasClassModel::insert($insert);

        return redirect()->route('filament.admin.resources.student-has-classes.index');
    }
}
