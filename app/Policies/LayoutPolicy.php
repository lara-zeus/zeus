<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use LaraZeus\DynamicDashboard\Models\Layout;
use Illuminate\Auth\Access\HandlesAuthorization;

class LayoutPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Layout');
    }

    public function view(AuthUser $authUser, Layout $layout): bool
    {
        return $authUser->can('View:Layout');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Layout');
    }

    public function update(AuthUser $authUser, Layout $layout): bool
    {
        return $authUser->can('Update:Layout');
    }

    public function delete(AuthUser $authUser, Layout $layout): bool
    {
        return $authUser->can('Delete:Layout');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Layout');
    }

    public function restore(AuthUser $authUser, Layout $layout): bool
    {
        return $authUser->can('Restore:Layout');
    }

    public function forceDelete(AuthUser $authUser, Layout $layout): bool
    {
        return $authUser->can('ForceDelete:Layout');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Layout');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Layout');
    }

    public function replicate(AuthUser $authUser, Layout $layout): bool
    {
        return $authUser->can('Replicate:Layout');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Layout');
    }

}