<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Adjacency;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdjacencyPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Adjacency');
    }

    public function view(AuthUser $authUser, Adjacency $adjacency): bool
    {
        return $authUser->can('View:Adjacency');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Adjacency');
    }

    public function update(AuthUser $authUser, Adjacency $adjacency): bool
    {
        return $authUser->can('Update:Adjacency');
    }

    public function delete(AuthUser $authUser, Adjacency $adjacency): bool
    {
        return $authUser->can('Delete:Adjacency');
    }

    public function restore(AuthUser $authUser, Adjacency $adjacency): bool
    {
        return $authUser->can('Restore:Adjacency');
    }

    public function forceDelete(AuthUser $authUser, Adjacency $adjacency): bool
    {
        return $authUser->can('ForceDelete:Adjacency');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Adjacency');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Adjacency');
    }

    public function replicate(AuthUser $authUser, Adjacency $adjacency): bool
    {
        return $authUser->can('Replicate:Adjacency');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Adjacency');
    }

}