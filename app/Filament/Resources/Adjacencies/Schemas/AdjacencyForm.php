<?php

namespace App\Filament\Resources\Adjacencies\Schemas;

use App\Models\Adjacency;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AdjacencyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),
                Select::make('parent_id')
                    ->label('Parent')
                    ->options(fn () => Adjacency::treeOptions())
                    ->searchable()
                    ->nullable()
                    ->default(null)
                    ->dehydrateStateUsing(fn ($state) => $state ?: null),

            ]);
    }
}
