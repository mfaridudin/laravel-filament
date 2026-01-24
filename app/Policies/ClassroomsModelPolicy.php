<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\ClassroomsModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClassroomsModelPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:ClassroomsModel');
    }

    public function view(AuthUser $authUser, ClassroomsModel $classroomsModel): bool
    {
        return $authUser->can('View:ClassroomsModel');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:ClassroomsModel');
    }

    public function update(AuthUser $authUser, ClassroomsModel $classroomsModel): bool
    {
        return $authUser->can('Update:ClassroomsModel');
    }

    public function delete(AuthUser $authUser, ClassroomsModel $classroomsModel): bool
    {
        return $authUser->can('Delete:ClassroomsModel');
    }

    public function restore(AuthUser $authUser, ClassroomsModel $classroomsModel): bool
    {
        return $authUser->can('Restore:ClassroomsModel');
    }

    public function forceDelete(AuthUser $authUser, ClassroomsModel $classroomsModel): bool
    {
        return $authUser->can('ForceDelete:ClassroomsModel');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:ClassroomsModel');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:ClassroomsModel');
    }

    public function replicate(AuthUser $authUser, ClassroomsModel $classroomsModel): bool
    {
        return $authUser->can('Replicate:ClassroomsModel');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:ClassroomsModel');
    }

}