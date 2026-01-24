<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\PeriodesModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeriodesModelPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:PeriodesModel');
    }

    public function view(AuthUser $authUser, PeriodesModel $periodesModel): bool
    {
        return $authUser->can('View:PeriodesModel');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:PeriodesModel');
    }

    public function update(AuthUser $authUser, PeriodesModel $periodesModel): bool
    {
        return $authUser->can('Update:PeriodesModel');
    }

    public function delete(AuthUser $authUser, PeriodesModel $periodesModel): bool
    {
        return $authUser->can('Delete:PeriodesModel');
    }

    public function restore(AuthUser $authUser, PeriodesModel $periodesModel): bool
    {
        return $authUser->can('Restore:PeriodesModel');
    }

    public function forceDelete(AuthUser $authUser, PeriodesModel $periodesModel): bool
    {
        return $authUser->can('ForceDelete:PeriodesModel');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:PeriodesModel');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:PeriodesModel');
    }

    public function replicate(AuthUser $authUser, PeriodesModel $periodesModel): bool
    {
        return $authUser->can('Replicate:PeriodesModel');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:PeriodesModel');
    }

}