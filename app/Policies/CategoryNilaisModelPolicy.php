<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\CategoryNilaisModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryNilaisModelPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:CategoryNilaisModel');
    }

    public function view(AuthUser $authUser, CategoryNilaisModel $categoryNilaisModel): bool
    {
        return $authUser->can('View:CategoryNilaisModel');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:CategoryNilaisModel');
    }

    public function update(AuthUser $authUser, CategoryNilaisModel $categoryNilaisModel): bool
    {
        return $authUser->can('Update:CategoryNilaisModel');
    }

    public function delete(AuthUser $authUser, CategoryNilaisModel $categoryNilaisModel): bool
    {
        return $authUser->can('Delete:CategoryNilaisModel');
    }

    public function restore(AuthUser $authUser, CategoryNilaisModel $categoryNilaisModel): bool
    {
        return $authUser->can('Restore:CategoryNilaisModel');
    }

    public function forceDelete(AuthUser $authUser, CategoryNilaisModel $categoryNilaisModel): bool
    {
        return $authUser->can('ForceDelete:CategoryNilaisModel');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:CategoryNilaisModel');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:CategoryNilaisModel');
    }

    public function replicate(AuthUser $authUser, CategoryNilaisModel $categoryNilaisModel): bool
    {
        return $authUser->can('Replicate:CategoryNilaisModel');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:CategoryNilaisModel');
    }

}