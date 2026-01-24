<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('description')
                    ->label('Content')
                    ->getStateUsing(function ($record) {
                        if (! is_array($record->description)) {
                            return '-';
                        }

                        return collect($record->description)
                            ->map(function ($block) {
                                return match ($block['type']) {
                                    'heading' => $block['data']['content'] ?? '',
                                    'paragraph' => $block['data']['content'] ?? '',
                                    default => '',
                                };
                            })
                            ->implode(' ');
                    }),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
