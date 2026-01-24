<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\DepartmentsModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartmentsModelPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:DepartmentsModel');
    }

    public function view(AuthUser $authUser, DepartmentsModel $departmentsModel): bool
    {
        return $authUser->can('View:DepartmentsModel');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:DepartmentsModel');
    }

    public function update(AuthUser $authUser, DepartmentsModel $departmentsModel): bool
    {
        return $authUser->can('Update:DepartmentsModel');
    }

    public function delete(AuthUser $authUser, DepartmentsModel $departmentsModel): bool
    {
        return $authUser->can('Delete:DepartmentsModel');
    }

    public function restore(AuthUser $authUser, DepartmentsModel $departmentsModel): bool
    {
        return $authUser->can('Restore:DepartmentsModel');
    }

    public function forceDelete(AuthUser $authUser, DepartmentsModel $departmentsModel): bool
    {
        return $authUser->can('ForceDelete:DepartmentsModel');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:DepartmentsModel');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:DepartmentsModel');
    }

    public function replicate(AuthUser $authUser, DepartmentsModel $departmentsModel): bool
    {
        return $authUser->can('Replicate:DepartmentsModel');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:DepartmentsModel');
    }

}