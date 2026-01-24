<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\StudentHasModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentHasModelPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:StudentHasModel');
    }

    public function view(AuthUser $authUser, StudentHasModel $studentHasModel): bool
    {
        return $authUser->can('View:StudentHasModel');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:StudentHasModel');
    }

    public function update(AuthUser $authUser, StudentHasModel $studentHasModel): bool
    {
        return $authUser->can('Update:StudentHasModel');
    }

    public function delete(AuthUser $authUser, StudentHasModel $studentHasModel): bool
    {
        return $authUser->can('Delete:StudentHasModel');
    }

    public function restore(AuthUser $authUser, StudentHasModel $studentHasModel): bool
    {
        return $authUser->can('Restore:StudentHasModel');
    }

    public function forceDelete(AuthUser $authUser, StudentHasModel $studentHasModel): bool
    {
        return $authUser->can('ForceDelete:StudentHasModel');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:StudentHasModel');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:StudentHasModel');
    }

    public function replicate(AuthUser $authUser, StudentHasModel $studentHasModel): bool
    {
        return $authUser->can('Replicate:StudentHasModel');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:StudentHasModel');
    }

}