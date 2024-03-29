<?php

namespace App\Policies;

use app\Models\Tracklist\Tracklist;
use app\Models\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TracklistPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \app\Models\User\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \app\Models\Tracklist\Tracklist  $tracklist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Tracklist $tracklist)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \app\Models\User\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \app\Models\Tracklist\Tracklist  $tracklist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Tracklist $tracklist)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \app\Models\Tracklist\Tracklist  $tracklist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Tracklist $tracklist)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \app\Models\Tracklist\Tracklist  $tracklist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Tracklist $tracklist)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \app\Models\Tracklist\Tracklist  $tracklist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Tracklist $tracklist)
    {
        //
    }
}
