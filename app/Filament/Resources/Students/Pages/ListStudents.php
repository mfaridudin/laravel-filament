<?php

namespace App\Filament\Resources\Students\Pages;

use App\Filament\Resources\Students\StudentsResource;
use App\Imports\ImportStudents;
use App\Models\StudentsModel;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Facades\Excel;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getHeader(): ?View
    {
        $data = CreateAction::make();

        return view('filament.costum.upload-file', compact('data'));
    }

    public $file = '';

    public function save()
    {

        if ($this->file != '') {
            Excel::import(new ImportStudents, $this->file);
        }
        // StudentsModel::create([
        //     'nis' => '123',
        //     'name' => 'test',
        //     'gender' => 'Male',
        // ]);
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'accept' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'accept')),
            'grade' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'grade')),
            'move' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'move')),
            'off' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'off')),
        ];
    }
}
