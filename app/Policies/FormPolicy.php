<?php

namespace App\Policies;

use App\Models\User;
use LaraZeus\Bolt\Models\Form;
use Illuminate\Auth\Access\HandlesAuthorization;

class FormPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_form');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \LaraZeus\Bolt\Models\Form  $form
     * @return bool
     */
    public function view(User $user, Form $form): bool
    {
        return $user->can('view_form');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_form');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \LaraZeus\Bolt\Models\Form  $form
     * @return bool
     */
    public function update(User $user, Form $form): bool
    {
        return $user->can('update_form');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \LaraZeus\Bolt\Models\Form  $form
     * @return bool
     */
    public function delete(User $user, Form $form): bool
    {
        return $user->can('delete_form');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_form');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \LaraZeus\Bolt\Models\Form  $form
     * @return bool
     */
    public function forceDelete(User $user, Form $form): bool
    {
        return $user->can('force_delete_form');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_form');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \LaraZeus\Bolt\Models\Form  $form
     * @return bool
     */
    public function restore(User $user, Form $form): bool
    {
        return $user->can('restore_form');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_form');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \LaraZeus\Bolt\Models\Form  $form
     * @return bool
     */
    public function replicate(User $user, Form $form): bool
    {
        return $user->can('replicate_form');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_form');
    }

}
