<?php

namespace App\Filament\Resources\Teachers;

use App\Filament\Resources\Teachers\Pages\CreateTeachers;
use App\Filament\Resources\Teachers\Pages\EditTeachers;
use App\Filament\Resources\Teachers\Pages\ListTeachers;
use App\Filament\Resources\Teachers\RelationManagers\ClassroomRelationManager;
use App\Filament\Resources\Teachers\Schemas\TeachersForm;
use App\Filament\Resources\Teachers\Tables\TeachersTable;
use App\Models\TeachersModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TeachersResource extends Resource
{
    protected static ?string $model = TeachersModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    // protected static ?string $recordTitleAttribute = 'Teachers';

    protected static UnitEnum|string|null $navigationGroup = 'Akademi';

    protected static ?int $navigationSort = 23;

    protected static ?string $navigationLabel = 'Guru';

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-user';
    }

    public static function form(Schema $schema): Schema
    {
        return TeachersForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeachersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            ClassroomRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTeachers::route('/'),
            'create' => CreateTeachers::route('/create'),
            'edit' => EditTeachers::route('/{record}/edit'),
        ];
    }
}
