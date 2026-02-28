<?php

namespace App\Filament\Resources\Teachers\RelationManagers;

use App\Models\ClassroomsModel;
use App\Models\PeriodesModel;
use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ClassroomRelationManager extends RelationManager
{
    protected static string $relationship = 'classroom';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('classrooms_id')
                 ->required()
                    ->label('Pilih Kelas')
                    ->options(ClassroomsModel::all()->pluck('name', 'id'))
                    ->searchable()
                    ->relationship(name: 'classroom', titleAttribute: 'name')
                    ->createOptionForm([
                        TextInput::make('name')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($get, $set, ?string $old, ?string $state) {
                                if (($get('slug') ?? '') !== Str::slug($old)) {
                                    return;
                                }

                                $set('slug', Str::slug($state));
                            }),
                        Hidden::make('slug'),
                    ]),
                Select::make('periode_id')
                    ->label('Pilih Periode')
                    ->options(PeriodesModel::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required()
                    ->relationship(name: 'periode', titleAttribute: 'name')
                    ->createOptionForm([
                        TextInput::make('name')
                            ->required()
                            ->label('Nama Periode'),
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('index')
                    ->label('No')
                    ->rowIndex(),
                TextColumn::make('classroom.name')
                    ->searchable(),
                TextColumn::make('periode.name'),

            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
                // AssociateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DissociateBulkAction::make(),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
