<?php

namespace App\Filament\Resources\Users;

use App\Filament\Resources\Users\Pages\CreateUsers;
use App\Filament\Resources\Users\Pages\EditUsers;
use App\Filament\Resources\Users\Pages\ListUsers;
use App\Filament\Resources\Users\Schemas\UsersForm;
use App\Filament\Resources\Users\Tables\UsersTable;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    // protected static ?string $recordTitleAttribute = 'Users';

    protected static UnitEnum|string|null $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 21;

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-users';
    }

    public static function form(Schema $schema): Schema
    {
        return UsersForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsersTable::configure($table);
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
            'index' => ListUsers::route('/'),
            'create' => CreateUsers::route('/create'),
            'edit' => EditUsers::route('/{record}/edit'),
        ];
    }

    // public static function getEloquentQuery(): Builder
    // {
    //     $admins = User::whereHas('roles', function ($query) {
    //         $query->where('name', 'super_admin');
    //     })->get()->pluck('id'); // [1, 3]

    //     return parent::getEloquentQuery()->whereNotIn('id', $admins);
    // }
}
