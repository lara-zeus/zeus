<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use LaraZeus\Sky\Models\Navigation;
use Illuminate\Auth\Access\HandlesAuthorization;

class NavigationPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Navigation');
    }

    public function view(AuthUser $authUser, Navigation $navigation): bool
    {
        return $authUser->can('View:Navigation');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Navigation');
    }

    public function update(AuthUser $authUser, Navigation $navigation): bool
    {
        return $authUser->can('Update:Navigation');
    }

    public function delete(AuthUser $authUser, Navigation $navigation): bool
    {
        return $authUser->can('Delete:Navigation');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Navigation');
    }

    public function restore(AuthUser $authUser, Navigation $navigation): bool
    {
        return $authUser->can('Restore:Navigation');
    }

    public function forceDelete(AuthUser $authUser, Navigation $navigation): bool
    {
        return $authUser->can('ForceDelete:Navigation');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Navigation');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Navigation');
    }

    public function replicate(AuthUser $authUser, Navigation $navigation): bool
    {
        return $authUser->can('Replicate:Navigation');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Navigation');
    }

}