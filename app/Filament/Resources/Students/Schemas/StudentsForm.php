<?php

namespace App\Filament\Resources\Students\Schemas;

use App\Enums\ReligionStatus;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class StudentsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nis')
                    ->label('NIS'),

                TextInput::make('name')
                    ->label('Nama Murid'),

                Select::make('gender')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Male' => 'Laki - laki',
                        'Female' => 'Perempuan',
                    ]),

                DatePicker::make('birthday')
                    ->label('Tanggal Lahir'),

                Select::make('religion')
                    ->label('Agama')
                    ->options(ReligionStatus::class),

                TextInput::make('contact')
                    ->label('Kontak'),

                FileUpload::make('profile')
                    ->image()
                    ->directory('students'),
            ]);
    }
}
