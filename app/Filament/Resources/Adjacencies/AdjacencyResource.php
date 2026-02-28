<?php

namespace App\Filament\Resources\Adjacencies;

use App\Filament\Resources\Adjacencies\Pages\CreateAdjacency;
use App\Filament\Resources\Adjacencies\Pages\EditAdjacency;
use App\Filament\Resources\Adjacencies\Pages\ListAdjacencies;
use App\Filament\Resources\Adjacencies\Schemas\AdjacencyForm;
use App\Filament\Resources\Adjacencies\Tables\AdjacenciesTable;
use App\Models\Adjacency;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AdjacencyResource extends Resource
{
    protected static ?string $model = Adjacency::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static UnitEnum|string|null $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 21;

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-scale';
    }

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AdjacencyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdjacenciesTable::configure($table);
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
            'index' => ListAdjacencies::route('/'),
            'create' => CreateAdjacency::route('/create'),
            'edit' => EditAdjacency::route('/{record}/edit'),
        ];
    }
}
