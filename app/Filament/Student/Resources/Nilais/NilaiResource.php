<?php

namespace App\Filament\Student\Resources\Nilais;

use App\Filament\Student\Resources\Nilais\Pages\CreateNilai;
use App\Filament\Student\Resources\Nilais\Pages\EditNilai;
use App\Filament\Student\Resources\Nilais\Pages\ListNilais;
use App\Filament\Student\Resources\Nilais\Schemas\NilaiForm;
use App\Filament\Student\Resources\Nilais\Tables\NilaisTable;
use App\Models\Nilai;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class NilaiResource extends Resource
{
    protected static ?string $model = Nilai::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Nilai';

    public static function form(Schema $schema): Schema
    {
        return NilaiForm::configure($schema);
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
            // 'create' => CreateNilai::route('/create'),
            // 'edit' => EditNilai::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereHas('student.user', function ($query) {
            $query->where('id', Auth::user()->id);
        });
    }
}
