<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\StudentHasClassModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentHasClassModelPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:StudentHasClassModel');
    }

    public function view(AuthUser $authUser, StudentHasClassModel $studentHasClassModel): bool
    {
        return $authUser->can('View:StudentHasClassModel');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:StudentHasClassModel');
    }

    public function update(AuthUser $authUser, StudentHasClassModel $studentHasClassModel): bool
    {
        return $authUser->can('Update:StudentHasClassModel');
    }

    public function delete(AuthUser $authUser, StudentHasClassModel $studentHasClassModel): bool
    {
        return $authUser->can('Delete:StudentHasClassModel');
    }

    public function restore(AuthUser $authUser, StudentHasClassModel $studentHasClassModel): bool
    {
        return $authUser->can('Restore:StudentHasClassModel');
    }

    public function forceDelete(AuthUser $authUser, StudentHasClassModel $studentHasClassModel): bool
    {
        return $authUser->can('ForceDelete:StudentHasClassModel');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:StudentHasClassModel');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:StudentHasClassModel');
    }

    public function replicate(AuthUser $authUser, StudentHasClassModel $studentHasClassModel): bool
    {
        return $authUser->can('Replicate:StudentHasClassModel');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:StudentHasClassModel');
    }

}