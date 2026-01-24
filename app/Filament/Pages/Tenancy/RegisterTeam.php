<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\TeamModel;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Tenancy\RegisterTenant;
use Filament\Schemas\Schema;

class RegisterTeam extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register team';
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('slug')->required(),
            ]);
    }

    protected function handleRegistration(array $data): TeamModel
    {
        $team = TeamModel::create($data);

        $team->members()->attach(auth()->user());

        return $team;
    }
}
