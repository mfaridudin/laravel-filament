<?php

namespace App\Filament\Resources\Roles;

use BezhanSalleh\FilamentShield\Resources\Roles\RoleResource as BaseRoleResource;

class RoleResource extends BaseRoleResource
{
    protected static ?string $tenantOwnershipRelationshipName = null;
}
