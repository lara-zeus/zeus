<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use LaraZeus\Sky\Models\Library;
use Illuminate\Auth\Access\HandlesAuthorization;

class LibraryPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Library');
    }

    public function view(AuthUser $authUser, Library $library): bool
    {
        return $authUser->can('View:Library');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Library');
    }

    public function update(AuthUser $authUser, Library $library): bool
    {
        return $authUser->can('Update:Library');
    }

    public function delete(AuthUser $authUser, Library $library): bool
    {
        return $authUser->can('Delete:Library');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Library');
    }

    public function restore(AuthUser $authUser, Library $library): bool
    {
        return $authUser->can('Restore:Library');
    }

    public function forceDelete(AuthUser $authUser, Library $library): bool
    {
        return $authUser->can('ForceDelete:Library');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Library');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Library');
    }

    public function replicate(AuthUser $authUser, Library $library): bool
    {
        return $authUser->can('Replicate:Library');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Library');
    }

}