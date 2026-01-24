<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\TeachersModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeachersModelPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:TeachersModel');
    }

    public function view(AuthUser $authUser, TeachersModel $teachersModel): bool
    {
        return $authUser->can('View:TeachersModel');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:TeachersModel');
    }

    public function update(AuthUser $authUser, TeachersModel $teachersModel): bool
    {
        return $authUser->can('Update:TeachersModel');
    }

    public function delete(AuthUser $authUser, TeachersModel $teachersModel): bool
    {
        return $authUser->can('Delete:TeachersModel');
    }

    public function restore(AuthUser $authUser, TeachersModel $teachersModel): bool
    {
        return $authUser->can('Restore:TeachersModel');
    }

    public function forceDelete(AuthUser $authUser, TeachersModel $teachersModel): bool
    {
        return $authUser->can('ForceDelete:TeachersModel');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:TeachersModel');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:TeachersModel');
    }

    public function replicate(AuthUser $authUser, TeachersModel $teachersModel): bool
    {
        return $authUser->can('Replicate:TeachersModel');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:TeachersModel');
    }

}