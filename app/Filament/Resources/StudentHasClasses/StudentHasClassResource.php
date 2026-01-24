<?php

namespace App\Filament\Resources\StudentHasClasses;

use App\Filament\Resources\StudentHasClasses\Pages\EditStudentHasClass;
use App\Filament\Resources\StudentHasClasses\Pages\FormStudentClass;
use App\Filament\Resources\StudentHasClasses\Pages\ListStudentHasClasses;
use App\Filament\Resources\StudentHasClasses\Schemas\StudentHasClassForm;
use App\Filament\Resources\StudentHasClasses\Tables\StudentHasClassesTable;
use App\Models\StudentHasModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class StudentHasClassResource extends Resource
{
    protected static ?string $model = StudentHasModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static UnitEnum|string|null $navigationGroup = 'Actions';

    protected static ?int $navigationSort = 21;

    protected static ?string $recordTitleAttribute = 'StudentHasClass';

    public static function form(Schema $schema): Schema
    {
        return StudentHasClassForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudentHasClassesTable::configure($table);
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
            'index' => ListStudentHasClasses::route('/'),
            'create' => FormStudentClass::route('/create'),
            'edit' => EditStudentHasClass::route('/{record}/edit'),
        ];
    }
}
