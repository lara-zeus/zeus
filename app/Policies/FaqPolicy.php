<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use LaraZeus\Sky\Models\Faq;
use Illuminate\Auth\Access\HandlesAuthorization;

class FaqPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Faq');
    }

    public function view(AuthUser $authUser, Faq $faq): bool
    {
        return $authUser->can('View:Faq');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Faq');
    }

    public function update(AuthUser $authUser, Faq $faq): bool
    {
        return $authUser->can('Update:Faq');
    }

    public function delete(AuthUser $authUser, Faq $faq): bool
    {
        return $authUser->can('Delete:Faq');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Faq');
    }

    public function restore(AuthUser $authUser, Faq $faq): bool
    {
        return $authUser->can('Restore:Faq');
    }

    public function forceDelete(AuthUser $authUser, Faq $faq): bool
    {
        return $authUser->can('ForceDelete:Faq');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Faq');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Faq');
    }

    public function replicate(AuthUser $authUser, Faq $faq): bool
    {
        return $authUser->can('Replicate:Faq');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Faq');
    }

}