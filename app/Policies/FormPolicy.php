<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use LaraZeus\Bolt\Models\Form;
use Illuminate\Auth\Access\HandlesAuthorization;

class FormPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Form');
    }

    public function view(AuthUser $authUser, Form $form): bool
    {
        return $authUser->can('View:Form');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Form');
    }

    public function update(AuthUser $authUser, Form $form): bool
    {
        return $authUser->can('Update:Form');
    }

    public function delete(AuthUser $authUser, Form $form): bool
    {
        return $authUser->can('Delete:Form');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Form');
    }

    public function restore(AuthUser $authUser, Form $form): bool
    {
        return $authUser->can('Restore:Form');
    }

    public function forceDelete(AuthUser $authUser, Form $form): bool
    {
        return $authUser->can('ForceDelete:Form');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Form');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Form');
    }

    public function replicate(AuthUser $authUser, Form $form): bool
    {
        return $authUser->can('Replicate:Form');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Form');
    }

}