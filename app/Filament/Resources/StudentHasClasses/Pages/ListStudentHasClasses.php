<?php

namespace App\Filament\Resources\StudentHasClasses\Pages;

use App\Filament\Resources\StudentHasClasses\StudentHasClassResource;
use App\Models\ClassroomsModel;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListStudentHasClasses extends ListRecords
{
    protected static string $resource = StudentHasClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $tabs = [];

        $tabs['All'] = Tab::make()
            ->modifyQueryUsing(fn (Builder $query) => $query);

        $classrooms = ClassroomsModel::orderBy('name')->get();

        foreach ($classrooms as $class) {
            $tabs[$class->name] = Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query
                    ->where('classrooms_id', $class->id)
                    ->where('is_open', true)
                );
        }

        return $tabs;
    }
}
