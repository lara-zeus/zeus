<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use LaraZeus\Wind\Models\Letter;
use Illuminate\Auth\Access\HandlesAuthorization;

class LetterPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Letter');
    }

    public function view(AuthUser $authUser, Letter $letter): bool
    {
        return $authUser->can('View:Letter');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Letter');
    }

    public function update(AuthUser $authUser, Letter $letter): bool
    {
        return $authUser->can('Update:Letter');
    }

    public function delete(AuthUser $authUser, Letter $letter): bool
    {
        return $authUser->can('Delete:Letter');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Letter');
    }

    public function restore(AuthUser $authUser, Letter $letter): bool
    {
        return $authUser->can('Restore:Letter');
    }

    public function forceDelete(AuthUser $authUser, Letter $letter): bool
    {
        return $authUser->can('ForceDelete:Letter');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Letter');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Letter');
    }

    public function replicate(AuthUser $authUser, Letter $letter): bool
    {
        return $authUser->can('Replicate:Letter');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Letter');
    }

}