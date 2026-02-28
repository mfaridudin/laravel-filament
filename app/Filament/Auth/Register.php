<?php

namespace App\Filament\Auth;

use Filament\Auth\Pages\Register as BaseRegister;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Spatie\Permission\Models\Role;

class Register extends BaseRegister
{
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getNameFormComponent(),
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
            ]);
    }

    protected function handleRegistration(array $data): \Illuminate\Database\Eloquent\Model
    {
        $user = parent::handleRegistration($data);

        $role = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $user->assignRole($role);

        return $user;
    }
}
