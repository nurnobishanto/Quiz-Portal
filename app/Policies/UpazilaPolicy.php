<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Upazila;
use Illuminate\Auth\Access\HandlesAuthorization;

class UpazilaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('view_any_upazila');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Upazila  $upazila
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Upazila $upazila)
    {
        return $user->can('view_upazila');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_upazila');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Upazila  $upazila
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Upazila $upazila)
    {
        return $user->can('update_upazila');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Upazila  $upazila
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Upazila $upazila)
    {
        return $user->can('delete_upazila');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user)
    {
        return $user->can('delete_any_upazila');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Upazila  $upazila
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Upazila $upazila)
    {
        return $user->can('force_delete_upazila');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDeleteAny(User $user)
    {
        return $user->can('force_delete_any_upazila');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Upazila  $upazila
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Upazila $upazila)
    {
        return $user->can('restore_upazila');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restoreAny(User $user)
    {
        return $user->can('restore_any_upazila');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Upazila  $upazila
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, Upazila $upazila)
    {
        return $user->can('replicate_upazila');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function reorder(User $user)
    {
        return $user->can('reorder_upazila');
    }

}
