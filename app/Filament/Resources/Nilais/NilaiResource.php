<?php

namespace App\Filament\Resources\Nilais;

use App\Filament\Resources\Nilais\Pages\CreateNilai;
use App\Filament\Resources\Nilais\Pages\EditNilai;
use App\Filament\Resources\Nilais\Pages\ListNilais;
use App\Filament\Resources\Nilais\Schemas\NilaiForm;
use App\Filament\Resources\Nilais\Tables\NilaisTable;
use App\Models\Nilai;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\Repeater;
use App\Models\CategoryNilaisModel;
use App\Models\ClassroomsModel;
use App\Models\PeriodesModel;
use App\Models\StudentsModel;
use App\Models\SubjectsModel;
use App\Models\TeachersModel;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use UnitEnum;
use Closure;
use Dom\Text;
use Filament\Schemas\Components\Utilities\Get;

class NilaiResource extends Resource
{
    protected static ?string $model = Nilai::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static UnitEnum|string|null $navigationGroup = 'Penilaian';

    protected static ?int $navigationSort = 21;

    // protected static ?string $recordTitleAttribute = 'Nilai';

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-clipboard-document-check';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema(function ($livewire) {

            // ======================
            // FORM CREATE
            // ======================
            if ($livewire instanceof \App\Filament\Resources\Nilais\Pages\CreateNilai) {
                return [
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
                        ->columnSpanFull()
                        ->required(),
                    // Repeater::make('details')

                    Repeater::make('details')
                        // ->relationship()
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
                                    fn(Get $get): Closure => function (string $attribute, $value, Closure $fail) {
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
                        ->itemLabel(
                            fn(array $state): ?string => $state['student_id']
                                ? StudentsModel::find($state['student_id'])?->name
                                : 'Nilai Siswa'
                        ),
                ];
            }

            return [
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

                Select::make('student_id')
                    ->label('Student')
                    ->options(StudentsModel::pluck('name', 'id'))
                    ->searchable()
                    ->required(),   
                TextInput::make('nilai')
                    ->numeric()
                    ->required(),
            ];
        });
    }

    public static function table(Table $table): Table
    {
        return NilaisTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListNilais::route('/'),
            'create' => CreateNilai::route('/create'),
            'edit' => EditNilai::route('/{record}/edit'),
        ];
    }
}
