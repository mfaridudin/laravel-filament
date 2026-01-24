<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\SubjectsModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubjectsModelPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:SubjectsModel');
    }

    public function view(AuthUser $authUser, SubjectsModel $subjectsModel): bool
    {
        return $authUser->can('View:SubjectsModel');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:SubjectsModel');
    }

    public function update(AuthUser $authUser, SubjectsModel $subjectsModel): bool
    {
        return $authUser->can('Update:SubjectsModel');
    }

    public function delete(AuthUser $authUser, SubjectsModel $subjectsModel): bool
    {
        return $authUser->can('Delete:SubjectsModel');
    }

    public function restore(AuthUser $authUser, SubjectsModel $subjectsModel): bool
    {
        return $authUser->can('Restore:SubjectsModel');
    }

    public function forceDelete(AuthUser $authUser, SubjectsModel $subjectsModel): bool
    {
        return $authUser->can('ForceDelete:SubjectsModel');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:SubjectsModel');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:SubjectsModel');
    }

    public function replicate(AuthUser $authUser, SubjectsModel $subjectsModel): bool
    {
        return $authUser->can('Replicate:SubjectsModel');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:SubjectsModel');
    }

}