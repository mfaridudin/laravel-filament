<?php

namespace App\Filament\Resources\Students\Tables;

use App\Enums\ReligionStatus;
use App\Models\StudentsModel;
use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ReplicateAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Collection;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')
                    ->label('No')
                    ->rowIndex(),
                TextColumn::make('nis')
                    ->label('NIS')
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                TextColumn::make('gender')
                    ->label('Jenis Kelamin'),
                TextColumn::make('birthday')
                    ->label('Tanggal Lahir'),
                SelectColumn::make('religion')
                    ->label('Agama')
                    ->options(ReligionStatus::class),
                TextColumn::make('contact')
                    ->label('Kontak'),
                ImageColumn::make('profile')
                    ->label('Foto Profil'),
                TextColumn::make('status')
                    ->formatStateUsing(fn ($state): string => ucwords("{$state}")),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ReplicateAction::make(),
                EditAction::make(),
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    BulkAction::make('Change Status')
                        ->icon('heroicon-m-check')
                        ->requiresConfirmation()
                        ->form([
                            Select::make('Status')
                                ->label('Status')
                                ->options([
                                    'accept' => 'Accept',
                                    'off' => 'Off',
                                    'move' => 'Move',
                                    'grade' => 'Grade',
                                ])
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($record) use ($data) {
                                StudentsModel::where('id', $record->id)
                                    ->update(['status' => $data['Status']]);
                            });
                        }),
                ]),

            ]);
    }
}
