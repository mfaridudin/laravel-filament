<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\StudentsModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentsModelPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:StudentsModel');
    }

    public function view(AuthUser $authUser, StudentsModel $studentsModel): bool
    {
        return $authUser->can('View:StudentsModel');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:StudentsModel');
    }

    public function update(AuthUser $authUser, StudentsModel $studentsModel): bool
    {
        return $authUser->can('Update:StudentsModel');
    }

    public function delete(AuthUser $authUser, StudentsModel $studentsModel): bool
    {
        return $authUser->can('Delete:StudentsModel');
    }

    public function restore(AuthUser $authUser, StudentsModel $studentsModel): bool
    {
        return $authUser->can('Restore:StudentsModel');
    }

    public function forceDelete(AuthUser $authUser, StudentsModel $studentsModel): bool
    {
        return $authUser->can('ForceDelete:StudentsModel');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:StudentsModel');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:StudentsModel');
    }

    public function replicate(AuthUser $authUser, StudentsModel $studentsModel): bool
    {
        return $authUser->can('Replicate:StudentsModel');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:StudentsModel');
    }

}