<?php

namespace App\Filament\Resources\CategoryNilais;

use App\Filament\Resources\CategoryNilais\Pages\CreateCategoryNilai;
use App\Filament\Resources\CategoryNilais\Pages\EditCategoryNilai;
use App\Filament\Resources\CategoryNilais\Pages\ListCategoryNilais;
use App\Filament\Resources\CategoryNilais\Schemas\CategoryNilaiForm;
use App\Filament\Resources\CategoryNilais\Tables\CategoryNilaisTable;
use UnitEnum;
use App\Models\CategoryNilaisModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CategoryNilaiResource extends Resource
{
    protected static ?string $model = CategoryNilaisModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static UnitEnum|string|null $navigationGroup = 'Penilaian';

    protected static ?int $navigationSort = 21;

    protected static ?string $recordTitleAttribute = 'name';

       protected static ?string $navigationLabel = 'Kategori Nilai';

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-tag';
    }

    public static function form(Schema $schema): Schema
    {
        return CategoryNilaiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoryNilaisTable::configure($table);
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
            'index' => ListCategoryNilais::route('/'),
            'create' => CreateCategoryNilai::route('/create'),
            'edit' => EditCategoryNilai::route('/{record}/edit'),
        ];
    }
}
