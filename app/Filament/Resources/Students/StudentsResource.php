<?php

namespace App\Filament\Resources\Students;

use App\Filament\Resources\Students\Pages\CreateStudents;
use App\Filament\Resources\Students\Pages\EditStudents;
use App\Filament\Resources\Students\Pages\ListStudents;
use App\Filament\Resources\Students\Schemas\StudentsForm;
use App\Filament\Resources\Students\Tables\StudentsTable;
use App\Models\StudentsModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class StudentsResource extends Resource
{
    protected static ?string $model = StudentsModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    // protected static ?string $recordTitleAttribute = 'Students';

    protected static UnitEnum|string|null $navigationGroup = 'Akademi';
    

    protected static ?int $navigationSort = 22;

    protected static ?string $navigationLabel = 'Siswa';

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-user-group';
    }

    public static function form(Schema $schema): Schema
    {
        return StudentsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudentsTable::configure($table);
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
            'index' => ListStudents::route('/'),
            'create' => CreateStudents::route('/create'),
            'edit' => EditStudents::route('/{record}/edit'),
        ];
    }
}
